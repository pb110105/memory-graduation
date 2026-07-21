<?php

namespace App\Http\Controllers;

use App\Models\MemoryPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
                ->store('memory-posts', 'public');
        }

        MemoryPost::create([
            'sender_name' => $validated['sender_name'],
            'message' => $validated['message'],
            'image_path' => $imagePath,
        ]);

        return redirect()
            ->route('memories.index')
            ->with('success', 'Kỷ niệm của bạn đã được đăng.');
    }
}