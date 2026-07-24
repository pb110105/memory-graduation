<?php

namespace App\Http\Controllers;

use App\Models\MemoryPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

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
            'sender_name' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:1000'],
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:15360',
            ],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            Log::info('Memory image upload', [
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'extension' => $file->getClientOriginalExtension(),
                'size_mb' => round($file->getSize() / 1024 / 1024, 2),
                'is_valid' => $file->isValid(),
            ]);

            $imagePath = $file->store('memory-posts', 'public');
        }

        MemoryPost::create([
            'sender_name' => $validated['sender_name'],
            'message' => $validated['message'],
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('memories.index')
            ->with('success', 'Lời chúc của bạn đã được gửi thành công!');
    }
}