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

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/memories.css') }}?v={{ filemtime(public_path('assets/css/memories.css')) }}"
    >
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
                                href="{{ asset('assets/image/qr.png') }}"
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
                                id="memory-editor-form"
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
                                        id="image-source"
                                        accept="image/jpeg,image/png,image/webp"
                                    >

                                    <label for="image-source">
                                        <span class="upload-icon">＋</span>
                                        <strong>Chọn hoặc chụp ảnh</strong>
                                        <small>JPG, PNG hoặc WEBP</small>
                                    </label>
                                </div>

                                <div class="image-editor" id="image-editor" hidden>
                                    <p class="editor-hint">
                                        Kéo ảnh để căn chỉnh. Dùng nút − và ＋ để thu phóng.
                                    </p>

                                    <div class="editor-stage" id="editor-stage">
                                        <div class="editor-crop" id="editor-crop">
                                            <img
                                                id="editor-photo"
                                                src=""
                                                alt="Ảnh đang chỉnh"
                                                draggable="false"
                                            >
                                        </div>

                                        <img
                                            id="editor-frame"
                                            src="{{ asset('assets/frames/frame1.png') }}"
                                            alt=""
                                            draggable="false"
                                        >
                                    </div>

                                    <div class="editor-controls">
                                        <button type="button" id="zoom-out">−</button>
                                        <button type="button" id="reset-photo">Đặt lại</button>
                                        <button type="button" id="zoom-in">＋</button>
                                    </div>
                                </div>

                                <!-- File ảnh đã ghép frame sẽ được đặt vào input này -->
                                <input
                                    type="file"
                                    id="image-final"
                                    name="image"
                                    hidden
                                >
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
                                    @php
                                        $postImageUrl = str_starts_with(
                                            $post->image_path,
                                            'http://'
                                        ) || str_starts_with(
                                            $post->image_path,
                                            'https://'
                                        )
                                            ? $post->image_path
                                            : asset('storage/' . $post->image_path);
                                    @endphp

                                    <img
                                        class="post-image"
                                        src="{{ $postImageUrl }}"
                                        alt="Ảnh kỷ niệm của {{ $post->sender_name }}"
                                        loading="lazy"
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
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('memory-editor-form');

    if (!form) {
        return;
    }

    const sourceInput = document.getElementById('image-source');
    const finalInput = document.getElementById('image-final');

    const editor = document.getElementById('image-editor');
    const stage = document.getElementById('editor-stage');

    const photo = document.getElementById('editor-photo');
    const frame = document.getElementById('editor-frame');

    const zoomInButton = document.getElementById('zoom-in');
    const zoomOutButton = document.getElementById('zoom-out');
    const resetButton = document.getElementById('reset-photo');

    const submitButton = form.querySelector('.submit-button');

    let naturalWidth = 0;
    let naturalHeight = 0;

    let baseScale = 1;
    let scale = 1;

    let offsetX = 0;
    let offsetY = 0;

    let dragging = false;
    let pointerStartX = 0;
    let pointerStartY = 0;
    let originalOffsetX = 0;
    let originalOffsetY = 0;

    let imageSelected = false;

    function getStageSize() {
        return {
            width: stage.clientWidth,
            height: stage.clientHeight,
        };
    }

    function clampOffsets() {
        const stageSize = getStageSize();

        const imageWidth = naturalWidth * scale;
        const imageHeight = naturalHeight * scale;

        const maxOffsetX = Math.max(
            0,
            (imageWidth - stageSize.width) / 2
        );

        const maxOffsetY = Math.max(
            0,
            (imageHeight - stageSize.height) / 2
        );

        offsetX = Math.max(
            -maxOffsetX,
            Math.min(maxOffsetX, offsetX)
        );

        offsetY = Math.max(
            -maxOffsetY,
            Math.min(maxOffsetY, offsetY)
        );
    }

    function renderPhoto() {
        if (!imageSelected) {
            return;
        }

        clampOffsets();

        const stageSize = getStageSize();

        const imageWidth = naturalWidth * scale;
        const imageHeight = naturalHeight * scale;

        photo.style.width = `${imageWidth}px`;
        photo.style.height = `${imageHeight}px`;

        photo.style.left = `${
            stageSize.width / 2
            - imageWidth / 2
            + offsetX
        }px`;

        photo.style.top = `${
            stageSize.height / 2
            - imageHeight / 2
            + offsetY
        }px`;
    }

    function resetPhoto() {
        if (!imageSelected) {
            return;
        }

        const stageSize = getStageSize();

        baseScale = Math.max(
            stageSize.width / naturalWidth,
            stageSize.height / naturalHeight
        );

        scale = baseScale;
        offsetX = 0;
        offsetY = 0;

        renderPhoto();
    }

    sourceInput.addEventListener('change', () => {
        const file = sourceInput.files[0];

        if (!file) {
            return;
        }

        if (!file.type.startsWith('image/')) {
            alert('Vui lòng chọn một file ảnh.');
            sourceInput.value = '';
            return;
        }

        const objectUrl = URL.createObjectURL(file);

        photo.onload = () => {
            naturalWidth = photo.naturalWidth;
            naturalHeight = photo.naturalHeight;

            imageSelected = true;
            editor.hidden = false;

            resetPhoto();

            URL.revokeObjectURL(objectUrl);
        };

        photo.src = objectUrl;
    });

    stage.addEventListener('pointerdown', event => {
        if (!imageSelected) {
            return;
        }

        dragging = true;

        pointerStartX = event.clientX;
        pointerStartY = event.clientY;

        originalOffsetX = offsetX;
        originalOffsetY = offsetY;

        stage.classList.add('dragging');
        stage.setPointerCapture(event.pointerId);
    });

    stage.addEventListener('pointermove', event => {
        if (!dragging) {
            return;
        }

        offsetX = originalOffsetX
            + event.clientX
            - pointerStartX;

        offsetY = originalOffsetY
            + event.clientY
            - pointerStartY;

        renderPhoto();
    });

    function stopDragging(event) {
        dragging = false;
        stage.classList.remove('dragging');

        if (
            event.pointerId !== undefined
            && stage.hasPointerCapture(event.pointerId)
        ) {
            stage.releasePointerCapture(event.pointerId);
        }
    }

    stage.addEventListener('pointerup', stopDragging);
    stage.addEventListener('pointercancel', stopDragging);

    zoomInButton.addEventListener('click', () => {
        if (!imageSelected) {
            return;
        }

        scale *= 1.1;
        renderPhoto();
    });

    zoomOutButton.addEventListener('click', () => {
        if (!imageSelected) {
            return;
        }

        scale = Math.max(baseScale, scale / 1.1);
        renderPhoto();
    });

    resetButton.addEventListener('click', resetPhoto);

    window.addEventListener('resize', () => {
        if (imageSelected) {
            resetPhoto();
        }
    });

    function waitForImage(image) {
        return new Promise((resolve, reject) => {
            if (image.complete && image.naturalWidth > 0) {
                resolve();
                return;
            }

            image.addEventListener('load', resolve, {
                once: true,
            });

            image.addEventListener('error', reject, {
                once: true,
            });
        });
    }

    form.addEventListener('submit', async event => {
        if (!imageSelected) {
            return;
        }

        event.preventDefault();

        submitButton.disabled = true;
        submitButton.textContent = 'Đang xử lý ảnh...';

        try {
            await waitForImage(frame);

            const canvasWidth = 900;
            const canvasHeight = 1600;

            const canvas = document.createElement('canvas');
            canvas.width = canvasWidth;
            canvas.height = canvasHeight;

            const context = canvas.getContext('2d');

            context.imageSmoothingEnabled = true;
            context.imageSmoothingQuality = 'high';

            context.fillStyle = '#ffffff';
            context.fillRect(0, 0, canvasWidth, canvasHeight);

            const stageSize = getStageSize();
            const outputRatioX = canvasWidth / stageSize.width;
            const outputRatioY = canvasHeight / stageSize.height;

            const displayedWidth = naturalWidth * scale;
            const displayedHeight = naturalHeight * scale;

            const drawX = (
                stageSize.width / 2
                - displayedWidth / 2
                + offsetX
            ) * outputRatioX;

            const drawY = (
                stageSize.height / 2
                - displayedHeight / 2
                + offsetY
            ) * outputRatioY;

            context.drawImage(
                photo,
                drawX,
                drawY,
                displayedWidth * outputRatioX,
                displayedHeight * outputRatioY
            );

            context.drawImage(
                frame,
                0,
                0,
                canvasWidth,
                canvasHeight
            );

            canvas.toBlob(blob => {
                if (!blob) {
                    alert('Không thể tạo ảnh đã ghép frame.');

                    submitButton.disabled = false;
                    submitButton.textContent = 'Gửi lời chúc';
                    return;
                }

                const editedFile = new File(
                    [blob],
                    `memory-${Date.now()}.jpg`,
                    {
                        type: 'image/jpeg',
                    }
                );

                const transfer = new DataTransfer();
                transfer.items.add(editedFile);

                finalInput.files = transfer.files;

                form.submit();
            }, 'image/jpeg', 0.9);
        } catch (error) {
            console.error(error);

            alert(
                'Không tải được frame. Kiểm tra file '
                + 'public/assets/frames/frame1.png'
            );

            submitButton.disabled = false;
            submitButton.textContent = 'Gửi lời chúc';
        }
    });
});
</script>
</body>
</html>