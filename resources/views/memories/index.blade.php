<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lời gửi gắm</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="{{ asset('assets/css/memories.css') }}">
</head>

<body>
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="{{ route('home') }}" class="brand">
                Hành Trình Phục Vụ
            </a>

            <a href="{{ route('home') }}" class="back-link">
                ← Trang chủ
            </a>
        </div>
    </header>

    <main class="page-shell">
           @if (!request()->boolean('write'))
        <section class="community-hero">
            <div class="container community-hero-inner">
                <div>
                    <span class="eyebrow">Không gian kỷ niệm</span>

                    <h1>Những lời gửi gắm</h1>

                    <p>
                        Nơi mọi người cùng chia sẻ lời chúc, hình ảnh
                        và những khoảnh khắc đáng nhớ trong ngày đặc biệt này.
                    </p>
                </div>

                <div class="hero-stat">
                    <strong>26.07.2026</strong>
                    <span>Một ngày để nhớ</span>
                </div>
            </div>
        </section>
    @endif


        <section class="feed-section">
            <div class="container feed-layout {{ request()->boolean('write') ? 'form-only-layout' : '' }}">
                @if (!request()->boolean('write'))
                    <aside class="sidebar">
                        <div class="profile-card">
                            <img
                                src="{{ asset('assets/image/portrait.jpg') }}"
                                alt="Người tốt nghiệp"
                            >

                            <h2>Đaminh Bùi Đức Lộc</h2>

                            <p>Giáo Lý Viên Cấp III</p>
                        </div>

                        <div class="event-card">
                            <span>Ngày tốt nghiệp</span>
                            <strong>26 tháng 07 năm 2026</strong>
                        </div>

                        <div class="qr-card">
                            <span class="qr-eyebrow">
                                Không gian lời chúc
                            </span>

                            <div class="qr-frame">
                                <img
                                    src="{{ asset('assets/image/qr.png') }}"
                                    alt="Mã QR mở form gửi lời chúc"
                                >
                            </div>

                            <h3>Quét để gửi lời chúc</h3>

                            <p>
                                Sau khi quét, form gửi ảnh và lời chúc sẽ được mở trực tiếp.
                            </p>

                            <a
                                href="{{ route('memories.index', ['write' => 1]) }}"
                                class="qr-action"
                            >
                                <span>Mở form gửi lời chúc</span>
                                <span class="qr-action-arrow">→</span>
                            </a>

                            <a
                                href="{{ asset('assets/images/memories-qr.png') }}"
                                download="QR-gui-loi-chuc-anh-Loc.png"
                                class="qr-download"
                            >
                                <span>↓</span>
                                <span>Tải mã QR</span>
                            </a>
                        </div>
                    </aside>
                @endif

                <section class="feed">
                    @if (session('success'))
                        <div class="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert-error">
                            <strong>Không thể đăng bài:</strong>

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (request()->boolean('write'))
                        <article class="composer-card" id="memory-form">
                            <div class="composer-header">
                                <div class="avatar">B</div>

                                <div>
                                    <h2>Gửi lời chúc đến anh Lộc</h2>

                                    <p>
                                        Viết lời chúc và gửi một hình ảnh kỷ niệm.
                                    </p>
                                </div>
                            </div>

                            <form
                                action="{{ route('memories.store') }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf

                                <div class="form-group">
                                    <label for="sender_name">Tên của bạn</label>

                                    <input
                                        type="text"
                                        id="sender_name"
                                        name="sender_name"
                                        value="{{ old('sender_name') }}"
                                        placeholder="Nhập tên của bạn"
                                        required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="message">Lời gửi gắm</label>

                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="5"
                                        placeholder="Bạn muốn nhắn điều gì?"
                                        required
                                    >{{ old('message') }}</textarea>
                                </div>

                                <div class="upload-box">
                                    <input
                                        type="file"
                                        id="image"
                                        name="image"
                                        accept="image/*"
                                    >

                                    <label for="image">
                                        <span class="upload-icon">＋</span>
                                        <strong>Chọn hoặc chụp ảnh</strong>
                                        <small>JPG, PNG hoặc WEBP</small>
                                    </label>
                                </div>

                                <button type="submit" class="submit-button">
                                    Gửi lời chúc
                                </button>
                            </form>

                            <a
                                href="{{ route('memories.index') }}"
                                class="cancel-write-link"
                            >
                                ← Quay lại xem lời gửi gắm
                            </a>
                        </article>
                    @endif

                    @if (!request()->boolean('write'))
                        @forelse ($posts as $post)
                            <article class="post-card">
                                <div class="post-header">
                                    <div class="avatar">
                                        {{ mb_strtoupper(mb_substr($post->sender_name, 0, 1)) }}
                                    </div>

                                    <div>
                                        <h3>{{ $post->sender_name }}</h3>

                                        <span>
                                            {{ $post->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>

                                <p class="post-message">
                                    {{ $post->message }}
                                </p>

                                @if ($post->image_path)
                                    <img
                                        class="post-image"
                                        src="{{ asset('storage/' . $post->image_path) }}"
                                        alt=""
                                        onerror="this.remove()"
                                    >
                                @endif

                                <div class="post-footer">
                                    <button type="button">
                                        ♡ Thả tim
                                    </button>

                                    <span>
                                        {{ $post->likes_count }} lượt yêu thích
                                    </span>
                                </div>
                            </article>
                        @empty
                            <div class="empty-feed">
                                Chưa có lời gửi gắm nào.
                                Hãy là người đầu tiên chia sẻ một kỷ niệm.
                            </div>
                        @endforelse
                    @endif
                </section>
            </div>
        </section>
    </main>
</body>
</html>