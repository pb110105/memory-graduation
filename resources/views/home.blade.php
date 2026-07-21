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
                <p class="hero-small">Một hành trình của đức tin và phục vụ</p>

                <h1 class="hero-title">
                    Chúc mừng anh
                    <span class="hero-name">Đaminh</span>
                    <span class="hero-name">Bùi Đức Lộc</span>
                </h1>

                <p class="hero-description reveal">
                    Tốt nghiệp Giáo Lý Viên Cấp III.
                    Một chặng đường khép lại để mở ra hành trình mới,
                    nơi tình yêu, sự trưởng thành và tinh thần phục vụ tiếp tục được lan tỏa.
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
                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1000&q=85"
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
                        Một hành trình được viết bằng sự kiên trì
                    </h2>

                    <p class="section-description">
                        Từ những ngày đầu còn nhiều bỡ ngỡ, hành trình Giáo lý viên
                        đã mang đến không chỉ kiến thức, mà còn là những người bạn,
                        những bài học và những trải nghiệm không thể quên.
                    </p>

                    <p class="section-description">
                        Ngày hôm nay không đơn thuần là ngày hoàn thành một chương trình học.
                        Đây là dấu mốc ghi nhận sự trưởng thành, lòng nhiệt thành
                        và một trái tim luôn sẵn sàng phục vụ.
                    </p>

                    <blockquote>
                        “Hãy để trẻ em đến với Thầy, đừng ngăn cấm chúng.”
                        <br>
                        — Mc 10,14
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="section" id = "timeline">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Dòng thời gian</span>

                    <h2 class="section-title">
                        Những dấu mốc đáng nhớ
                    </h2>

                    <p class="section-description">
                        Mỗi năm là một chương nhỏ, mỗi kỷ niệm là một phần
                        làm nên hành trình ý nghĩa này.
                    </p>
                </div>

                <div class="timeline">
                    <div class="timeline-item">
                        <article class="timeline-card">
                            <h3>Khởi đầu hành trình</h3>
                            <p>
                                Những buổi học đầu tiên, những người bạn đầu tiên
                                và những trải nghiệm đầu tiên trên con đường trở thành Giáo lý viên.
                            </p>
                        </article>

                        <div class="timeline-year">2023</div>
                    </div>

                    <div class="timeline-item">
                        <article class="timeline-card">
                            <h3>Trưởng thành qua phục vụ</h3>
                            <p>
                                Tham gia sinh hoạt, đồng hành cùng thiếu nhi
                                và dần hiểu hơn ý nghĩa của sự kiên nhẫn và trách nhiệm.
                            </p>
                        </article>

                        <div class="timeline-year">2024</div>
                    </div>

                    <div class="timeline-item">
                        <article class="timeline-card">
                            <h3>Những kỷ niệm đẹp</h3>
                            <p>
                                Những chuyến đi, những hoạt động tập thể
                                và những khoảnh khắc bên những người đồng hành thân thương.
                            </p>
                        </article>

                        <div class="timeline-year">2025</div>
                    </div>

                    <div class="timeline-item">
                        <article class="timeline-card">
                            <h3>Ngày tốt nghiệp</h3>
                            <p>
                                Hoàn thành chương trình Giáo Lý Viên Cấp III
                                và bắt đầu một chặng đường phục vụ mới.
                            </p>
                        </article>

                        <div class="timeline-year">2026</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id = "gallery">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Album</span>

                    <h2 class="section-title">
                        Những khoảnh khắc còn mãi
                    </h2>

                    <p class="section-description">
                        Một vài mảnh ghép của hành trình đã qua,
                        được lưu lại để mỗi lần nhìn lại vẫn còn nguyên cảm xúc.
                    </p>
                </div>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1200&q=85"
                            alt="Kỷ niệm 1"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=85"
                            alt="Kỷ niệm 2"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=900&q=85"
                            alt="Kỷ niệm 3"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1520857014576-2c4f4c972b57?auto=format&fit=crop&w=800&q=85"
                            alt="Kỷ niệm 4"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=85"
                            alt="Kỷ niệm 5"
                        >
                    </div>

                    <div class="gallery-item">
                        <img
                            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=85"
                            alt="Kỷ niệm 6"
                        >
                    </div>
                </div>
            </div>
        </section>

        <section class="section letter-section" id = "letter">
            <div class="container">
                <article class="letter-card">
                    <span class="eyebrow">Lời gửi gắm</span>

                    <h2>Gửi bạn trong ngày đặc biệt này</h2>

                    <p>
                        Ngày hôm nay đánh dấu việc bạn đã hoàn thành chương trình
                        Giáo Lý Viên Cấp III. Nhưng đây không phải là điểm kết thúc,
                        mà là khởi đầu cho một hành trình mới.
                    </p>

                    <p>
                        Mong rằng những kiến thức, những trải nghiệm và tình yêu
                        bạn đã nhận được trong suốt thời gian qua sẽ tiếp tục đồng hành cùng bạn.
                    </p>

                    <p>
                        Chúc bạn luôn giữ được ngọn lửa nhiệt thành,
                        sự kiên nhẫn và một trái tim biết yêu thương,
                        để tiếp tục gieo những hạt giống tốt đẹp
                        đến những người bạn gặp trên hành trình phục vụ.
                    </p>

                    <div class="letter-signature">
                        Với tất cả sự trân trọng
                    </div>
                </article>
            </div>
            <a href="{{ route('memories.index') }}" class="memory-button">
                Xem những lời gửi gắm
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