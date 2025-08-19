

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zona Musik - Konser Musik Standar Internasional</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #d32f2f;
            --secondary-color: #f5f5f5;
            --dark-color: #212121;
            --light-color: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        
        .concert-card {
            transition: transform 0.3s ease;
            margin-bottom: 25px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .concert-card:hover {
            transform: translateY(-10px);
        }
        
        .concert-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .concert-card .card-body {
            padding: 20px;
        }
        
        .concert-card .price {
            color: var(--primary-color);
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 30px;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 600;
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .about-section {
            background-color: var(--secondary-color);
            padding: 80px 0;
            margin: 50px 0;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .newsletter-section {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0;
            margin-top: 50px;
        }
        
        /* Search bar styles */
        .search-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .search-results-count {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .no-results {
            text-align: center;
            padding: 50px;
            font-size: 1.2rem;
            color: #666;
        }

        /* Chatbot styles */
        #chatBotWindow {
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            border: none;
        }
        #chatBotWindow.d-none {
            opacity: 0;
            transform: translateY(20px);
        }
        #chatBotMessages .user-message {
            align-self: flex-end;
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 10px;
        }
        #chatBotMessages .bot-message {
            align-self: flex-start;
            background-color: #e9ecef;
            color: var(--dark-color);
            border-radius: 10px 10px 10px 0;
        }
        #chatBotMessages > div { /* Direct children of chatBotMessages */
            max-width: 80%;
            margin-bottom: 10px;
            padding: 10px;
        }
        /* <<< KILO CODE - ADDITIONAL CSS FOR CHATBOT START >>> */
        #chatBotToggl {
            transition: transform 0.2s ease-in-out;
        }
        #chatBotToggl:hover {
            transform: scale(1.1);
        }
        /* #chatBotWindow is already styled, but ensure flex properties if not inline */
        /* #chatBotWindow {
            display: flex; 
            flex-direction: column;
            background-color: var(--light-color);
        } */
        #chatBotMessages {
            background-color: #f8f9fa; /* Light background for message area */
        }
        #chatBotInput {
            border-right: none;
        }
        #chatBotInput:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }
        #sendChatBotMessage {
            border-left: none;
        }
        /* <<< KILO CODE - ADDITIONAL CSS FOR CHATBOT END >>> */
    </style>
</head>
<body>


    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Nikmati Pengalaman Konser Tak Terlupakan</h1>
            <p class="lead mb-5">Beli tiket konser musik internasional dan lokal favoritmu dengan mudah dan aman</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Concerts -->
    <section class="container mb-5" id="concertsSection">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">Konser Mendatang</h2>
            <div class="d-flex">
                <div class="input-group me-2" style="width: 200px;">
                    <select class="form-select" id="sortConcerts">
                        <option value="date">Sortir: Tanggal</option>
                        <option value="price-asc">Harga: Rendah ke Tinggi</option>
                        <option value="price-desc">Harga: Tinggi ke Rendah</option>
                        <option value="name">Nama A-Z</option>
                    </select>
                </div>
                <a href="#" class="btn btn-outline-primary">Lihat Semua</a>
            </div>
        </div>
        
        <div id="searchResultsCount" class="search-results-count d-none"></div>
        
        <div class="row" id="concertsContainer">
            <!-- Concert 1 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Coldplay" data-genre="pop" data-location="Jakarta" data-date="2023-11-15">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1501612780327-45045538702b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Coldplay Concert">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">Hampir Habis</span>
                        <h5 class="card-title">Coldplay: Music of the Spheres</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>15 Nov 2023, 19:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>GBK Stadium, Jakarta
                        </p>
                        <p class="price">Rp 1.500.000 - 5.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 2 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="BLACKPINK" data-genre="kpop" data-location="Jakarta" data-date="2023-12-25">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Blackpink Concert">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Tersedia</span>
                        <h5 class="card-title">BLACKPINK: Born Pink World Tour</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>25 Des 2023, 20:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>Indonesia Convention Center
                        </p>
                        <p class="price">Rp 2.000.000 - 7.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 3 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Sheila On 7" data-genre="pop" data-location="Jakarta" data-date="2024-01-10">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1464375117522-1311d6a5b81f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Sheila On 7 Concert">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Terbatas</span>
                        <h5 class="card-title">Sheila On 7: 25 Tahun Perjalanan</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>10 Jan 2024, 19:30 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>Istora Senayan, Jakarta
                        </p>
                        <p class="price">Rp 800.000 - 3.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 4 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Java Jazz" data-genre="jazz" data-location="Jakarta" data-date="2024-03-02">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Java Jazz Festival">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Tersedia</span>
                        <h5 class="card-title">Java Jazz Festival 2024</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>2-4 Mar 2024, 16:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>JIE Expo, Jakarta
                        </p>
                        <p class="price">Rp 1.200.000 - 4.500.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Additional concerts for better search demonstration -->
            <!-- Concert 5 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Noah" data-genre="rock" data-location="Bandung" data-date="2023-12-10">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Noah Concert">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Tersedia</span>
                        <h5 class="card-title">NOAH: Konser Kembali ke Bandung</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>10 Des 2023, 20:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>Gelora Bandung Lautan Api
                        </p>
                        <p class="price">Rp 1.000.000 - 4.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 6 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="BTS" data-genre="kpop" data-location="Jakarta" data-date="2024-04-15">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="BTS Concert">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">Hampir Habis</span>
                        <h5 class="card-title">BTS: Yet to Come World Tour</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>15 Apr 2024, 19:30 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>GBK Stadium, Jakarta
                        </p>
                        <p class="price">Rp 2.500.000 - 8.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 7 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Raisa" data-genre="pop" data-location="Surabaya" data-date="2024-02-14">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Raisa Concert">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Tersedia</span>
                        <h5 class="card-title">Raisa: Valentine Special</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>14 Feb 2024, 19:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>Convention Hall, Surabaya
                        </p>
                        <p class="price">Rp 1.200.000 - 3.500.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
            
            <!-- Concert 8 -->
            <div class="col-md-6 col-lg-3 concert-item" data-artist="Rhoma Irama" data-genre="dangdut" data-location="Jakarta" data-date="2023-11-25">
                <div class="concert-card card h-100">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Rhoma Irama Concert">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Terbatas</span>
                        <h5 class="card-title">Rhoma Irama: Dangdut Legends</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>25 Nov 2023, 20:00 WIB<br>
                            <i class="fas fa-map-marker-alt me-2"></i>Istora Senayan, Jakarta
                        </p>
                        <p class="price">Rp 500.000 - 2.000.000</p>
                        <a href="#" class="btn btn-primary w-100">Beli Tiket</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="noResults" class="no-results d-none">
            <i class="fas fa-search fa-3x mb-3"></i>
            <h4>Konser tidak ditemukan</h4>
            <p>Maaf, kami tidak menemukan konser yang sesuai dengan pencarian Anda.</p>
            <button class="btn btn-primary mt-3" id="resetSearch">Reset Pencarian</button>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Tentang Zona Musik</h2>
                    <p class="lead">Platform penjualan tiket konser musik terpercaya di Indonesia</p>
                    <p>Zona Musik hadir untuk memudahkan Anda mendapatkan tiket konser favorit dengan proses yang cepat, aman, dan terjamin. Kami bekerja langsung dengan penyelenggara resmi untuk memastikan tiket yang Anda beli 100% asli.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Tiket Asli</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Proses Cepat</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Harga Terbaik</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Customer Service 24/7</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-dark mt-3">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded shadow" alt="About Zona Musik">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container my-5">
        <h2 class="section-title text-center mb-5">Mengapa Memilih Zona Musik?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <h4>Tiket Asli</h4>
                <p>Kami menjamin semua tiket yang dijual 100% asli dari penyelenggara resmi</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Pembayaran Aman</h4>
                <p>Sistem pembayaran terenkripsi dan didukung berbagai metode pembayaran</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h4>Bantuan 24/7</h4>
                <p>Tim customer service kami siap membantu kapan saja melalui berbagai channel</p>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container text-center">
            <h2 class="mb-4">Dapatkan Info Konser Terbaru</h2>
            <p class="mb-5">Berlangganan newsletter kami untuk mendapatkan update konser mendatang dan penawaran khusus</p>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <form class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Alamat email Anda">
                        <button class="btn btn-primary" type="submit">Berlangganan</button>
                    </form>
                    <small class="text-muted">Kami tidak akan membagikan email Anda ke pihak lain</small>
                </div>
            </div>
        </div>
    </section>
    <button id="chatBotToggl" class="btn btn-primary rounded-circle shadow" style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; z-index: 1050;">
        <i class="fas fa-comments fs-4"></i>
    </button>

    <!-- Chatbot Window -->
    <div id="chatBotWindow" class="card shadow-lg d-none" style="position: fixed; bottom: 90px; right: 20px; width: 350px; max-height: 500px; z-index: 1050; display: flex; flex-direction: column;">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center p-2">
            <h6 class="mb-0 ms-2">ZonaMusik Assistant</h6>
            <button id="closeChatBot" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
        </div>
        <div id="chatBotMessages" class="card-body p-3" style="overflow-y: auto; flex-grow: 1; display: flex; flex-direction: column;">
            <!-- Bot initial message -->
            <div class="bot-message">Halo! Ada yang bisa saya bantu terkait konser?</div>
        </div>
        <div class="card-footer p-2">
            <div class="input-group">
                <input type="text" id="chatBotInput" class="form-control" placeholder="Ketik pesanmu...">
                <button id="sendChatBotMessage" class="btn btn-primary" type="button">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- <<< KILO CODE - CHATBOT HTML END >>> -->
 

    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Concert data for search functionality
        const concerts = [
            {
                id: 1,
                title: "Coldplay: Music of the Spheres",
                artist: "Coldplay",
                genre: "pop",
                location: "Jakarta",
                date: "2023-11-15",
                venue: "GBK Stadium",
                price: "Rp 1.500.000 - 5.000.000",
                image: "https://images.unsplash.com/photo-1501612780327-45045538702b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Hampir Habis",
                statusClass: "bg-danger"
            },
            {
                id: 2,
                title: "BLACKPINK: Born Pink World Tour",
                artist: "BLACKPINK",
                genre: "kpop",
                location: "Jakarta",
                date: "2023-12-25",
                venue: "Indonesia Convention Center",
                price: "Rp 2.000.000 - 7.000.000",
                image: "https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Tersedia",
                statusClass: "bg-success"
            },
            {
                id: 3,
                title: "Sheila On 7: 25 Tahun Perjalanan",
                artist: "Sheila On 7",
                genre: "pop",
                location: "Jakarta",
                date: "2024-01-10",
                venue: "Istora Senayan",
                price: "Rp 800.000 - 3.000.000",
                image: "https://images.unsplash.com/photo-1464375117522-1311d6a5b81f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Terbatas",
                statusClass: "bg-warning text-dark"
            },
            {
                id: 4,
                title: "Java Jazz Festival 2024",
                artist: "Java Jazz",
                genre: "jazz",
                location: "Jakarta",
                date: "2024-03-02",
                venue: "JIE Expo",
                price: "Rp 1.200.000 - 4.500.000",
                image: "https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Tersedia",
                statusClass: "bg-success"
            },
            {
                id: 5,
                title: "NOAH: Konser Kembali ke Bandung",
                artist: "Noah",
                genre: "rock",
                location: "Bandung",
                date: "2023-12-10",
                venue: "Gelora Bandung Lautan Api",
                price: "Rp 1.000.000 - 4.000.000",
                image: "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Tersedia",
                statusClass: "bg-success"
            },
            {
                id: 6,
                title: "BTS: Yet to Come World Tour",
                artist: "BTS",
                genre: "kpop",
                location: "Jakarta",
                date: "2024-04-15",
                venue: "GBK Stadium",
                price: "Rp 2.500.000 - 8.000.000",
                image: "https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Hampir Habis",
                statusClass: "bg-danger"
            },
            {
                id: 7,
                title: "Raisa: Valentine Special",
                artist: "Raisa",
                genre: "pop",
                location: "Surabaya",
                date: "2024-02-14",
                venue: "Convention Hall",
                price: "Rp 1.200.000 - 3.500.000",
                image: "https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                status: "Tersedia",
                statusClass: "bg-success"
            },
            {
                id: 8,
                title: "Rhoma Irama: Dangdut Legends",
                artist: "Rhoma Irama",
                genre: "dangdut",
                location: "Jakarta",
                date: "2023-11-25",
                venue: "Istora Senayan",
                price: "Rp 500.000 - 2.000.000",
                image: "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80",
                                status: "Terbatas",
                statusClass: "bg-warning text-dark"
            }
        ];

        // Search functionality
        function performSearch(searchTerm) {
            const concertItems = document.querySelectorAll('.concert-item');
            let visibleCount = 0;
            
            concertItems.forEach(item => {
                const artist = item.getAttribute('data-artist').toLowerCase();
                const genre = item.getAttribute('data-genre').toLowerCase();
                const location = item.getAttribute('data-location').toLowerCase();
                const title = item.querySelector('.card-title').textContent.toLowerCase();
                
                if (artist.includes(searchTerm) || 
                    genre.includes(searchTerm) || 
                    location.includes(searchTerm) || 
                    title.includes(searchTerm)) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            const noResults = document.getElementById('noResults');
            const resultsCount = document.getElementById('searchResultsCount');
            
            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
                resultsCount.classList.add('d-none');
            } else {
                noResults.classList.add('d-none');
                resultsCount.classList.remove('d-none');
                resultsCount.textContent = `Ditemukan ${visibleCount} konser`;
            }
        }

        // Sort functionality
        function sortConcerts(sortBy) {
            const container = document.getElementById('concertsContainer');
            const items = Array.from(document.querySelectorAll('.concert-item'));
            
            items.sort((a, b) => {
                if (sortBy === 'date') {
                    const dateA = new Date(a.getAttribute('data-date'));
                    const dateB = new Date(b.getAttribute('data-date'));
                    return dateA - dateB;
                } else if (sortBy === 'price-asc') {
                    const priceA = parseInt(a.querySelector('.price').textContent.replace(/\D/g,''));
                    const priceB = parseInt(b.querySelector('.price').textContent.replace(/\D/g,''));
                    return priceA - priceB;
                } else if (sortBy === 'price-desc') {
                    const priceA = parseInt(a.querySelector('.price').textContent.replace(/\D/g,''));
                    const priceB = parseInt(b.querySelector('.price').textContent.replace(/\D/g,''));
                    return priceB - priceA;
                } else if (sortBy === 'name') {
                    const nameA = a.querySelector('.card-title').textContent.toLowerCase();
                    const nameB = b.querySelector('.card-title').textContent.toLowerCase();
                    return nameA.localeCompare(nameB);
                }
                return 0;
            });
            
            // Clear and re-append sorted items
            container.innerHTML = '';
            items.forEach(item => {
                container.appendChild(item);
            });
        }

        // Event listeners
        const mainSearchBtn = document.getElementById('mainSearchBtn');
        const mainSearchInput = document.getElementById('mainSearchInput');
        const navbarSearchBtn = document.getElementById('navbarSearchBtn');
        const navbarSearch = document.getElementById('navbarSearch');
        const sortConcertsEl = document.getElementById('sortConcerts');
        const resetSearchBtn = document.getElementById('resetSearch');

        if (mainSearchBtn && mainSearchInput) {
            mainSearchBtn.addEventListener('click', function() {
                const searchTerm = mainSearchInput.value.toLowerCase();
                performSearch(searchTerm);
            });
        }

        if (navbarSearchBtn && navbarSearch) {
            navbarSearchBtn.addEventListener('click', function() {
                const searchTerm = navbarSearch.value.toLowerCase();
                performSearch(searchTerm);
            });
        }

        if (mainSearchInput) {
            mainSearchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const searchTerm = this.value.toLowerCase();
                    performSearch(searchTerm);
                }
            });
        }

        if (navbarSearch) {
            navbarSearch.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const searchTerm = this.value.toLowerCase();
                    performSearch(searchTerm);
                }
            });
        }

        if (sortConcertsEl) {
            sortConcertsEl.addEventListener('change', function() {
                sortConcerts(this.value);
            });
        }

        if (resetSearchBtn) {
            resetSearchBtn.addEventListener('click', function() {
                const concertItems = document.querySelectorAll('.concert-item');
                concertItems.forEach(item => {
                    item.style.display = 'block';
                });
                const noResultsEl = document.getElementById('noResults');
                if (noResultsEl) noResultsEl.classList.add('d-none');
                
                const searchResultsCountEl = document.getElementById('searchResultsCount');
                if (searchResultsCountEl) searchResultsCountEl.classList.add('d-none');
                
                if (mainSearchInput) mainSearchInput.value = '';
                if (navbarSearch) navbarSearch.value = '';
            });
        }

        // Genre quick search buttons
        document.querySelectorAll('[data-search-term]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const searchTerm = this.getAttribute('data-search-term');
                if (mainSearchInput) mainSearchInput.value = searchTerm;
                performSearch(searchTerm);
            });
        });

        // <<< KILO CODE - CHATBOT JAVASCRIPT START >>>
        document.addEventListener('DOMContentLoaded', function() {
            const chatBotToggleBtn = document.getElementById('chatBotToggl');
            const chatBotWindow = document.getElementById('chatBotWindow');
            const closeChatBotBtn = document.getElementById('closeChatBot');
            const chatBotMessages = document.getElementById('chatBotMessages');
            const chatBotInput = document.getElementById('chatBotInput');
            const sendChatBotMessageBtn = document.getElementById('sendChatBotMessage');

            function toggleChatBot() {
                if (chatBotWindow) {
                    chatBotWindow.classList.toggle('d-none');
                    if (!chatBotWindow.classList.contains('d-none') && chatBotMessages) {
                        chatBotMessages.scrollTop = chatBotMessages.scrollHeight;
                    }
                }
            }

            function addMessageToChat(message, sender) {
                if (!chatBotMessages) return;
                const messageDiv = document.createElement('div');
                messageDiv.classList.add(sender === 'user' ? 'user-message' : 'bot-message');
                messageDiv.textContent = message;
                chatBotMessages.appendChild(messageDiv);
                chatBotMessages.scrollTop = chatBotMessages.scrollHeight;
            }

            function getBotResponse(userInput) {
                const lowerInput = userInput.toLowerCase();
                if (lowerInput.includes('tiket') || lowerInput.includes('beli')) {
                    return "Anda dapat membeli tiket dengan mengklik tombol 'Beli Tiket' pada konser yang Anda inginkan. Apakah ada konser spesifik yang Anda cari?";
                } else if (lowerInput.includes('konser') || lowerInput.includes('jadwal')) {
                    return "Jadwal konser terbaru dapat dilihat di bagian 'Konser Mendatang'. Anda juga bisa menggunakan fitur pencarian dan sortir.";
                } else if (lowerInput.includes('halo') || lowerInput.includes('hai')) {
                    return "Halo! Ada yang bisa saya bantu hari ini?";
                } else if (lowerInput.includes('lokasi') || lowerInput.includes('dimana')) {
                    return "Lokasi konser tertera pada detail masing-masing konser. Misalnya, Coldplay akan diadakan di GBK Stadium, Jakarta.";
                } else if (lowerInput.includes('terima kasih') || lowerInput.includes('thanks')) {
                    return "Sama-sama! Senang bisa membantu.";
                } else {
                    return "Maaf, saya belum mengerti pertanyaan Anda. Bisa coba tanyakan hal lain seputar konser, tiket, atau jadwal?";
                }
            }

            function handleSendMessage() {
                if (!chatBotInput) return;
                const messageText = chatBotInput.value.trim();
                if (messageText === '') return;

                addMessageToChat(messageText, 'user');
                chatBotInput.value = '';

                setTimeout(() => {
                    const botReply = getBotResponse(messageText);
                    addMessageToChat(botReply, 'bot');
                }, 500 + Math.random() * 500);
            }

            if (chatBotToggleBtn) {
                chatBotToggleBtn.addEventListener('click', toggleChatBot);
            }
            if (closeChatBotBtn) {
                closeChatBotBtn.addEventListener('click', toggleChatBot);
            }
            if (sendChatBotMessageBtn) {
                sendChatBotMessageBtn.addEventListener('click', handleSendMessage);
            }
            if (chatBotInput) {
                chatBotInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        handleSendMessage();
                    }
                });
            }
        });
        // <<< KILO CODE - CHATBOT JAVASCRIPT END >>>
    </script>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\konser1\resources\views/home.blade.php ENDPATH**/ ?>