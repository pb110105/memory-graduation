<?php

namespace App\Http\Controllers;

use App\Models\MemoryPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\View;
use RuntimeException;

class MemoryPostController extends Controller
{
    public function index(): View
    {
        $posts = MemoryPost::latest()->get();

        return view('memories.index', compact('posts'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'sender_name' => [
                'required',
                'string',
                'max:100',
            ],

            'message' => [
                'required',
                'string',
                'max:1000',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:15360',
            ],
        ]);

        $imageUrl = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $supabaseUrl = rtrim(
                (string) config('services.supabase.url'),
                '/'
            );

            $serviceKey = (string) config(
                'services.supabase.service_role_key'
            );

            $bucket = (string) config(
                'services.supabase.storage_bucket'
            );

            if (
                $supabaseUrl === ''
                || $serviceKey === ''
                || $bucket === ''
            ) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'image' => 'Thiếu cấu hình Supabase Storage.',
                    ]);
            }

            $extension = strtolower(
                $file->guessExtension()
                ?: $file->getClientOriginalExtension()
                ?: 'jpg'
            );

            $objectPath = sprintf(
                'memory-posts/%s.%s',
                Str::uuid()->toString(),
                $extension
            );

            $uploadUrl = sprintf(
                '%s/storage/v1/object/%s/%s',
                $supabaseUrl,
                $bucket,
                $objectPath
            );

            try {
                $fileContents = file_get_contents(
                    $file->getRealPath()
                );

                if ($fileContents === false) {
                    throw new RuntimeException(
                        'Không thể đọc file ảnh tạm.'
                    );
                }

                $response = Http::withHeaders([
                    'apikey' => $serviceKey,
                    'Authorization' => 'Bearer ' . $serviceKey,
                    'x-upsert' => 'false',
                ])
                    ->timeout(90)
                    ->retry(2, 300)
                    ->withBody(
                        $fileContents,
                        $file->getMimeType()
                            ?: 'application/octet-stream'
                    )
                    ->post($uploadUrl);

                if ($response->failed()) {
                    Log::error('Supabase image upload failed', [
                        'status' => $response->status(),
                        'response' => $response->body(),
                        'object_path' => $objectPath,
                    ]);

                    return back()
                        ->withInput()
                        ->withErrors([
                            'image' => 'Không thể tải ảnh lên. Vui lòng thử lại.',
                        ]);
                }

                $imageUrl = sprintf(
                    '%s/storage/v1/object/public/%s/%s',
                    $supabaseUrl,
                    $bucket,
                    $objectPath
                );
            } catch (\Throwable $exception) {
                report($exception);

                return back()
                    ->withInput()
                    ->withErrors([
                        'image' => 'Có lỗi khi xử lý ảnh. Vui lòng thử lại.',
                    ]);
            }
        }

        MemoryPost::create([
            'sender_name' => $validated['sender_name'],
            'message' => $validated['message'],
            'image_path' => $imageUrl,
        ]);

        return redirect()
            ->route('memories.index')
            ->with(
                'success',
                'Lời chúc của bạn đã được gửi thành công!'
            );
    }
}