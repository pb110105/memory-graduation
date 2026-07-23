<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hành Trình Phục Vụ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    
</head>

<body>
    <nav class="navbar">
    <div class="container navbar-inner">
        <a href="#" class="navbar-brand">
            Hành Trình Phục Vụ
        </a>

        <button class="navbar-toggle" type="button" aria-label="Mở menu">
            ☰
        </button>

        <div class="navbar-menu">
            <a href="#story">Câu chuyện</a>
            <a href="#timeline">Hành trình</a>
            <a href="#gallery">Album</a>
            <a href="{{ route('memories.index') }}">Lời gửi gắm</a>
        </div>
    </div>
    </nav>
    <header class="hero">
        <div class="container">
            <div class="hero-content reveal">
                <p class="hero-small">Anh Lộc Bùi đừng khóc khi vào được trang web này nhé!!!</p>

                <h1 class="hero-title">
                    Chúc mừng anh
                    <span class="hero-name">Đaminh</span>
                    <span class="hero-name">Bùi Đức Lộc</span>
                </h1>

                <p class="hero-description reveal">
                    Tốt nghiệp Giáo Lý Viên Cấp III.
                    Một chặng đường khép lại để mở ra hành trình mới,
                    nơi tình yêu, sự trưởng thành và tinh thần phục vụ tiếp tục được lan tỏa.
                    Ba năm Đuốc hồng, một năm Horeb, sắp được hai năm Tabor – Một hành trình dài với
                    4 năm nhiệm kỳ Trưởng Xứ Đoàn.
                    Mặc dù tụi em chọc anh nhiều lắm nhưng sâu trong đó là cợt nhã, chọc thiệc.
                    Nhưng anh cố lên, sắp được đổi tên tiktok rồi đó.
                </p>

                <div class="hero-meta reveal">
                    <span class="hero-meta-item">26 tháng 07 năm 2026</span>
                    <span class="hero-meta-item">Giáo Lý Viên Cấp III</span>
                </div>

                <a href="#story" class="hero-button">
                    Khám phá hành trình
                    <span>↓</span>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="section" id="story">
            <div class="container intro-grid">
                <div class="intro-image reveal">
                    <img
                        src="{{ asset('assets/image/LocBui2.png') }}"
                        alt="Ảnh người tốt nghiệp"
                    >

                    <div class="intro-badge">
                        <strong>III</strong>
                        <span>GIÁO LÝ VIÊN</span>
                    </div>
                </div>

                <div class="intro-content">
                    <span class="eyebrow">Câu chuyện</span>

                    <h2 class="section-title">
                        Câu chuyện cổ tích: Lộc Bùi và con đường
                    </h2>

                    <p class="section-description">
                        Ngày xửa ngày xưa, có anh Lộc Bùi, đi trên con đường.
                        Ảnh đang đi nhưng phải ghé vào ngã Đuốc hồng 1. Sau đó ảnh lại rẽ vào đường Đuốc hồng 2.
                        Vui chơi, học tập dui dẻ xong ảnh lại rẽ vào con đường Horeb, ở con đường này ảnh hái được 1 ngôi sao.
                        Ngôi sao này khiến anh phải chịu rất nhiều thị phi. Nhưng hãy nhớ rằng: Tất cả là tại Lộc Bùi, nếu không có ai đổ lỗi thì hãy đổ cho Lộc Bùi.

                    </p>

                    <p class="section-description">
                        Thời gian dài sau, anh lại tiếp tục chạy vào con đường Tabor, sẵn sàng hái thêm 1 ngôi sao bỏ túi cho mình nữa.
                        Ở con đường này, ảnh lại thấy biển báo Đuốc hồng 3 – đây cũng là điểm đích của đường Đuốc hồng.
                        Câu chuyện đúc kết ở đây là: tốn thời gian đọc câu chuyện này.
                    </p>

                    <blockquote>
                        “Cam on vi da den”
                        <br>
                        — Lb 3,1
                    </blockquote>
                </div>
            </div>
        </section>
        <section id="timeline" class="timeline-photo-section">
            <img
                class="timeline-photo"
                src="{{ asset('assets/image/LocBuiBanner.jpg') }}"
                alt="Những hình ảnh đáng nhớ trong hành trình phục vụ"
            >
        </section>

        <section class="section" id = "gallery">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Album</span>

                    <h2 class="section-title">
                        Photobooth cùng anh Lộc nhé
                    </h2>

                    <p class="section-description">
                        Những khoảnh khắc đáng nhớ trong hành trình phục vụ của anh Lộc Bùi.
                        Từ những ngày đầu tiên đến những kỷ niệm cuối cùng, mỗi bức ảnh là một câu chuyện,
                        một kỷ niệm và một phần của hành trình đầy ý nghĩa này.
                    </p>
                </div>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb1.jpg') }}"
                            alt="Kỷ niệm 1"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb2.jpg') }}"
                            alt="Kỷ niệm 2"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb3.jpg') }}"
                            alt="Kỷ niệm 3"
                        >
                    </div>
                    <div class="gallery-item gallery-video-item">
                        <video
                            class="gallery-video"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="metadata"
                            poster="{{ asset('assets/image/album-video-cover.jpg') }}"
                        >
                            <source
                                src="{{ asset('assets/video/video1.mp4') }}"
                                type="video/mp4"
                            >
                        </video>
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb4.jpg') }}"
                            alt="Kỷ niệm 4"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb5.jpg') }}"
                            alt="Kỷ niệm 5"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb6.jpg') }}"
                            alt="Kỷ niệm 6"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb7.jpg') }}"
                            alt="Kỷ niệm 7"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb8.jpg') }}"
                            alt="Kỷ niệm 8"
                        >
                    </div>
                    <div class="gallery-item gallery-video-item">
                        <video
                            class="gallery-video"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="metadata"
                            poster="{{ asset('assets/image/album-video-cover.jpg') }}"
                        >
                            <source
                                src="{{ asset('assets/video/video2.mp4') }}"
                                type="video/mp4"
                            >
                        </video>
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb9.jpg') }}"
                            alt="Kỷ niệm 9"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb10.jpg') }}"
                            alt="Kỷ niệm 10"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb11.jpg') }}"
                            alt="Kỷ niệm 11"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb12.jpg') }}"
                            alt="Kỷ niệm 12"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb13.jpg') }}"
                            alt="Kỷ niệm 13"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb14.jpg') }}"
                            alt="Kỷ niệm 14"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb15.jpg') }}"
                            alt="Kỷ niệm 15"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb16.jpg') }}"
                            alt="Kỷ niệm 16"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb17.jpg') }}"
                            alt="Kỷ niệm 17"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb18.jpg') }}"
                            alt="Kỷ niệm 18"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb19.jpg') }}"
                            alt="Kỷ niệm 19"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb20.jpg') }}"
                            alt="Kỷ niệm 20"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb21.jpg') }}"
                            alt="Kỷ niệm 21"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb22.jpg') }}"
                            alt="Kỷ niệm 22"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb23.jpg') }}"
                            alt="Kỷ niệm 23"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb24.jpg') }}"
                            alt="Kỷ niệm 24"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb25.jpg') }}"
                            alt="Kỷ niệm 25"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb26.jpg') }}"
                            alt="Kỷ niệm 26"
                        >
                    </div>
                    <div class="gallery-item">
                        <img
                            src="{{ asset('assets/image/ptb27.jpg') }}"
                            alt="Kỷ niệm 27"
                        >
                    </div>


                </div>
            </div>
        </section>

        <section class="section letter-section" id = "letter">
            <div class="container">
                <article class="letter-card">
                    <span class="eyebrow">Đôi lời chúc mừng</span>

                    <h2>Gửi anh Lộc Bùi</h2>

                    <p>
                        Có những hành trình rồi sẽ đến ngày khép lại, nhưng những gì được vun đắp bằng đức tin và tinh thần phục vụ thì sẽ còn ở lại mãi.
                        Hôm nay, tụi em xin chúc mừng anh Lộc Bùi đã tốt nghiệp Đuốc Hồng.
                    </p>

                    <p>
                        Đằng sau tấm bằng này không chỉ là ba năm gắn bó, mà còn là ngày tháng phục vụ, những hy sinh không cần được nhắc tên.
                        Thanh xuân phải có Đuốc Hồng – Không có Đuốc Hồng hết bà thanh xuân. Là nơi tuổi trẻ được sống cho Chúa, được học cách yêu thương, phục vụ và lớn lên trong đức tin.
                    </p>

                    <p>
                        Hôm nay anh tốt nghiệp, nhưng tình yêu dành cho Chúa mãi mãi ở trong anh. Ngọn lửa ấy sẽ tiếp tục được anh mang theo và lan tỏa ở bất cứ nơi đâu Chúa gọi mời.
                        Nguyện xin Thiên Chúa luôn đồng hành, gìn giữ và ban nhiều ơn lành trên hành trình phục vụ của anh. Mong rằng, ở bất cứ cương vị nào, anh vẫn luôn là người biết sống yêu thương, phục vụ và trở nên chứng nhân cho Tin Mừng bằng chính đời sống của mình.
                    </p>

                    <div class="letter-signature">
                        Chúc mừng anh Lộc Bùi!
                    </div>
                </article>
            </div>
            <a href="{{ route('memories.index') }}" class="memory-button">
            <span>Lời gửi gắm đến anh Lộc</span>

            <span class="memory-button-arrow">
                →
            </span>
            </a>
        </section>
    </main>

    <footer class="footer">
        Được tạo để lưu giữ một hành trình đáng nhớ • 26.07.2026
    </footer>
    <button class="scroll-top" type="button" aria-label="Lên đầu trang">
    ↑
    </button>
    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>
</html>