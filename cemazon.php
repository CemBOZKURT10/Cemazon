<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Sayfanın karakter setini belirler -->
    <meta charset="UTF-8">
    
    <!-- Sayfanın mobil uyumlu olmasını sağlar, viewport ayarları yapar -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sayfa favicon'u (tarayıcı sekmesindeki simge) tanımlar -->
    <link rel="icon" href="logolar/c.png" type="image/x-icon">
    
    <!-- Sayfa başlığını tanımlar -->
    <title>CEMAZON - Online Alışveriş</title>
    
    <!-- Bootstrap CSS bağlantısı: Sayfanın hızlıca şık bir tasarıma sahip olmasını sağlar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome bağlantısı: Sayfada ikonları kullanmamıza olanak tanır -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Kendi stil dosyanız: Cemazon'a özgü CSS stilini tanımlar -->
    <style>
        /* Cemazon için Özel CSS */
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #ffc107;
            --success-color: #198754;
            --danger-color: #dc3545;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        .hero-section {
            background: linear-gradient(135deg, #4a90e2 0%, #50c878 100%) !important;
            color: #ffffff !important;
            text-align: center;
            padding: 2rem;
        }
        .hero-section h1 {
            font-weight: 700;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        .hero-section p {
            font-size: 1.25rem;
            font-weight: 500;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .product-card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        .product-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .product-price {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--success-color);
        }
        .product-old-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .btn-add-cart {
            background-color: var(--secondary-color);
            border: none;
            color: #000;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-add-cart:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }
        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }
        .badge {
            font-size: 0.7rem;
        }
        footer {
            background-color: #212529 !important;
        }
        .social-links a {
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: var(--secondary-color) !important;
        }
        .cart-item {
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 0;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }
        header h2 img {
            display: block;
            margin: 0;
            max-height: 100px;
            max-width: 100%;
        }
        header .fa-map-marker-alt {
            color: var(--secondary-color);
            font-size: 1.5rem;
        }
        header span {
            font-size: 1.2rem;
            font-weight: 500;
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            .product-card {
                margin-bottom: 1rem;
            }
            .social-links a {
                font-size: 1.5rem;
            }
        }
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .nav-link.active {
            color: var(--primary-color) !important;
            font-weight: 600;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #0056b3;
        }
        * {
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #f1f1f1;
        }
        @media (prefers-reduced-motion: reduce) {
            .product-card,
            .btn-add-cart,
            .navbar-nav .nav-link,
            .social-links a {
                transition: none;
            }
            .loading {
                animation: none;
            }
        }
        header {
            background: linear-gradient(135deg, #4a90e2 0%, #50c878 100%) !important;
            display: flex;
            align-items: center;
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- Header: Sayfanın üst kısmındaki başlık ve arama alanını içerir -->
    <header class="bg-primary text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 d-flex align-items-center">
                    <h2 class="mb-0">
                        <!-- Cemazon logosu -->
                        <img src="logolar/cemazon.png" alt="Cemazon" class="img-fluid" style="max-height: 100px;">
                    </h2>
                    <!-- Konum işareti ve Bartın yazısı -->
                    <div class="ms-3 d-flex align-items-center">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <span>Bartın</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Arama alanı -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ürün ara..." id="searchInput">
                        <button class="btn btn-warning" type="button" id="searchBtn">
                            <!-- Arama ikonu -->
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3 text-end">
                    <!-- Giriş ve sepet butonları -->
                    <button class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-user"></i> Giriş
                    </button>
                    <button class="btn btn-warning position-relative" id="cartBtn">
                        <!-- Sepet ikonu ve sepetteki ürün sayısı -->
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cartCount">
                            0
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation: Sayfanın üst kısmındaki gezinme menüsünü içerir -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- Menüler -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-category="all">Tüm Ürünler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-category="elektronik">Elektronik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-category="giyim">Giyim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-category="ev">Ev & Yaşam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-category="kitap">Kitap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section: Sayfanın ana başlığı ve giriş bölümünü içerir -->
    <section class="hero-section bg-gradient text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 mb-3">Cemazon'a Hoş Geldiniz!</h1>
            <p class="lead mb-4">En kaliteli ürünleri en uygun fiyatlarla keşfedin</p>
            <button class="btn btn-warning btn-lg">Alışverişe Başla</button>
        </div>
    </section>

    <!-- Ürünler Bölümü: Öne çıkan ürünlerin gösterileceği alandır -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Öne Çıkan Ürünler</h2>
            <div class="row" id="productsContainer">
                <!-- JavaScript ile ürünler buraya yüklenecek -->
            </div>
        </div>
    </section>

    <!-- Footer: Sayfanın alt kısmında, site hakkında bilgiler ve sosyal medya bağlantıları yer alır -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Cemazon</h5>
                    <p>Güvenilir online alışveriş deneyimi</p>
                </div>
                <div class="col-md-4">
                    <h5>Hızlı Linkler</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Hakkımızda</a></li>
                        <li><a href="#" class="text-light text-decoration-none">İletişim</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Kargo</a></li>
                        <li><a href="#" class="text-light text-decoration-none">İade</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Sosyal Medya</h5>
                    <div class="social-links">
                        <!-- Sosyal medya bağlantıları -->
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2026 Cemazon. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>

    <!-- Sepet Modal: Kullanıcının sepetine eklediği ürünleri görmesini sağlar -->
    <div class="modal fade" id="cartModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sepetim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="cartItems">
                    <p class="text-center text-muted">Sepetiniz boş</p>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="d-flex justify-content-between mb-3">
                            <!-- Toplam tutarı gösterir -->
                            <strong>Toplam: <span id="cartTotal">0 ₺</span></strong>
                        </div>
                        <button type="button" class="btn btn-success w-100">Satın Al</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Giriş Modal: Kullanıcının giriş yapmasını sağlar -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Giriş Yap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">E-posta</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="E-posta adresinizi girin" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="passwordInput" placeholder="Şifrenizi girin" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Bootstrap JS bağlantısı: Sayfanın dinamik özelliklerini aktif eder -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Kendi JavaScript dosyanız: Sayfada etkileşimli özellikleri yönetir -->
    <script>
        // Cemazon E-Ticaret JavaScript

// Ürün verileri
const products = [
    {
        id: 1,
        name: "iPhone 17 Pro",
        price: 115000,
        oldPrice: 120000,
        image: "https://productimages.hepsiburada.net/s/777/375-375/110001191547050.jpg",
        category: "elektronik",
        description: "En yeni iPhone modeli"
    },
    {
        id: 2,
        name: "Samsung Galaxy S25 Ultra",
        price: 74999,
        oldPrice: 82999,
        image: "https://cdn.vatanbilgisayar.com/Upload/PRODUCT/samsung/thumb/1-185_large.jpg",
        category: "elektronik",
        description: "Güçlü Android telefon"
    },
    {
        id: 3,
        name: "Nike Air Force",
        price: 5999,
        oldPrice: 6999,
        image: "https://img.sportinn.com.tr/nike-air-force-1-07-erkek-sneaker-ayakkabi-cw2288-111-153736-43-B.jpg",
        category: "giyim",
        description: "Spor ayakkabı"
    },
    {
        id: 4,
        name: "MacBook Air M4",
        price: 67999,
        oldPrice: 72999,
        image: "https://productimages.hepsiburada.net/s/777/375-375/110000951875311.jpg",
        category: "elektronik",
        description: "Profesyonel laptop"
    },
    {
        id: 5,
        name: "Levi's Kot Pantolon",
        price: 1299,
        oldPrice: 1699,
        image: "https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&h=300&fit=crop",
        category: "giyim",
        description: "Klasik kot pantolon"
    },
    {
        id: 6,
        name: "Kahve Makinesi",
        price: 29999,
        oldPrice: 32999,
        image: "https://cdn.evkur.com.tr/c/Product/2_fa03bg.jpg",
        category: "ev",
        description: "Otomatik kahve makinesi"
    },
    {
        id: 7,
        name: "Php Kitap",
        price: 299,
        oldPrice: 499,
        image: "https://www.kodlab.com/1364-thickbox_default/php.jpg",
        category: "kitap",
        description: "Programlama kitabı"
    },
    {
        id: 8,
        name: "JBL Bluetooth Kulaklık",
        price: 1599,
        oldPrice: 2199,
        image: "https://static.ticimax.cloud/55525/uploads/urunresimleri/buyuk/cc24f4ec-f290-4661-995d-f903c0dfe5a2-d36f-4.jpg",
        category: "elektronik",
        description: "Kablosuz kulaklık"
    },
    // Elektronik kategorisi için ek ürünler
    {
        id: 9,
        name: "Sony PlayStation 5",
        price: 22999,
        oldPrice: 25999,
        image: "https://m.media-amazon.com/images/S/aplus-media-library-service-media/4caf29e5-dd71-4427-be2c-938523ca8b6c.__CR0,0,362,453_PT0_SX362_V1___.jpg",
        category: "elektronik",
        description: "Yeni nesil oyun konsolu"
    },
    {
        id: 10,
        name: "LG OLED TV",
        price: 24999,
        oldPrice: 26999,
        image: "https://www.lg.com/content/dam/channel/wcms/tr/images/tv/oled55b16la_apd_emtk_tr_c/gallery/D-1v.jpg",
        category: "elektronik",
        description: "4K Ultra HD OLED TV"
    },
    {
        id: 11,
        name: "Apple Watch Series 11",
        price: 8999,
        oldPrice: 9999,
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSriPvs9khbgEofcQMMN2it7Cfq5pGb3lyI5g&s",
        category: "elektronik",
        description: "Akıllı saat"
    },
    {
        id: 12,
        name: "Canon EOS R6",
        price: 162999,
        oldPrice: 169999,
        image: "https://fotografium.com/canon-eos-r6-mark-ii-24-105mm-f4l-is-usm-kit-aynasiz-slr-fotograf-makineleri-canon-canon-eos-r6-mark-ii-54131-17-O.jpg",
        category: "elektronik",
        description: "Profesyonel fotoğraf makinesi"
    },
    {
        id: 13,
        name: "JBL Charge 5",
        price: 4999,
        oldPrice: 5999,
        image: "https://sharafstore.com/web/image/product.template/5049/image_1024?unique=6356347",
        category: "elektronik",
        description: "Kablosuz hoparlör"
    },
    // Giyim kategorisi için ek ürünler
    {
        id: 14,
        name: "Adidas Spor Ayakkabı",
        price: 4999,
        oldPrice: 5999,
        image: "https://0990b9.a-cdn.akinoncloud.com/products/2024/09/16/4751796/e70035bf-95d2-4145-8284-faa3f6e309f0.jpg",
        category: "giyim",
        description: "Rahat spor ayakkabı"
    },
    {
        id: 15,
        name: "Puma Sweatshirt",
        price: 1999,
        oldPrice: 2499,
        image: "https://fitmoda.mncdn.com/mnresize/1028/-/Assets/Supplementler/Thumbs/puma_train_pwr_fleece_hoodie_kaponlu_sweatshirt_siyah_90078.jpeg",
        category: "giyim",
        description: "Şık sweatshirt"
    },
    {
        id: 16,
        name: "Zara Mont",
        price: 3999,
        oldPrice: 4499,
        image: "https://static.zara.net/assets/public/71fb/e636/47994ddca91e/18c3cd29244f/05992558401-e1/05992558401-e1.jpg?ts=1754047871072",
        category: "giyim",
        description: "Kışlık mont"
    },
    {
        id: 17,
        name: "H&M Tişört",
        price: 999,
        oldPrice: 1299,
        image: "https://image.hm.com/assets/hm/a1/c1/a1c1a37264e90abce4bc1d22781fbea233cc2615.jpg?imwidth=2160",
        category: "giyim",
        description: "Günlük tişört"
    },
    {
        id: 18,
        name: "Levi's Şapka",
        price: 499,
        oldPrice: 699,
        image: "https://sporthink.mncdn.com/mnresize/1080/1080/sporthink/uploads/products/original_153347_1.jpeg",
        category: "giyim",
        description: "Klasik şapka"
    },
    {
        id: 19,
        name: "Nike Eşofman",
        price: 2999,
        oldPrice: 3499,
        image: "https://img.sportinn.com.tr/nike-sportswear-club-jogger-bb-erkek-esofman-alti-bv2671-010-69965-39-B.jpg",
        category: "giyim",
        description: "Spor eşofman"
    },
    {
        id: 20,
        name: "Columbia Polar",
        price: 2499,
        oldPrice: 2999,
        image: "https://cdn.akakce.com/z/columbia/columbia-fast-trek-ii-erkek-polar-siyah-ae3039-010.jpg",
        category: "giyim",
        description: "Sıcak tutan polar"
    },
    // Ev kategorisi için ek ürünler
    {
        id: 21,
        name: "Dyson Süpürge",
        price: 12999,
        oldPrice: 13999,
        image: "https://productimages.hepsiburada.net/s/777/375-375/110000679761259.jpg",
        category: "ev",
        description: "Kablosuz süpürge"
    },
    {
        id: 22,
        name: "Philips Blender",
        price: 1999,
        oldPrice: 2499,
        image: "https://images.philips.com/is/image/philipsconsumer/vrs_826109868aa51135ca86c78f0feee869700498ca?&wid=309&hei=309&$jpglarge$",
        category: "ev",
        description: "Mutfak blenderı"
    },
    {
        id: 23,
        name: "Tefal Tava Seti",
        price: 2999,
        oldPrice: 3499,
        image: "https://m.media-amazon.com/images/I/51l9jsdf5fL.jpg",
        category: "ev",
        description: "Yapışmaz tava seti"
    },
    {
        id: 24,
        name: "IKEA Masa",
        price: 4999,
        oldPrice: 5999,
        image: "https://image-ikea.mncdn.com/urunler/500_500/PE813472.jpg",
        category: "ev",
        description: "Modern yemek masası"
    },
    {
        id: 25,
        name: "Arzum Kahve Makinesi",
        price: 1999,
        oldPrice: 2499,
        image: "https://static.ticimax.cloud/55900/uploads/urunresimleri/buyuk/arzum-ok006-k-okka-minio-duo-turk-kahv-6-49c7.jpg",
        category: "ev",
        description: "Türk kahvesi makinesi"
    },
    {
        id: 26,
        name: "Vestel Klima",
        price: 8999,
        oldPrice: 9999,
        image: "https://statics.vestel.com.tr/productimages/20234522_r1_900_1254.jpg",
        category: "ev",
        description: "Duvar tipi klima"
    },
    {
        id: 27,
        name: "Samsung Buzdolabı",
        price: 14999,
        oldPrice: 15999,
        image: "https://static.ticimax.cloud/cdn-cgi/image/width=-,quality=85/62856/uploads/urunresimleri/buyuk/samsung-rb45dg600ewwtr-458lt-beyaz-kom--4adb-.jpg",
        category: "ev",
        description: "Çift kapılı buzdolabı"
    },
    {
        id: 28,
        name: "Rowenta Ütü",
        price: 2999,
        oldPrice: 3499,
        image: "https://productimages.hepsiburada.net/s/10/375-375/8864428785714.jpg",
        category: "ev",
        description: "Buharlı ütü"
    },
    // Kitap kategorisi için ek ürünler
    {
        id: 29,
        name: "JavaScript Kitabı",
        price: 399,
        oldPrice: 499,
        image: "https://i.dr.com.tr/cache/600x600-0/originals/0000000457676-1.jpg",
        category: "kitap",
        description: "JavaScript öğrenme kitabı"
    },
    {
        id: 30,
        name: "Web Tasarım Kitabı",
        price: 299,
        oldPrice: 399,
        image: "https://www.kodlab.com/1362-medium_default/web-tasarim-temelleri.jpg",
        category: "kitap",
        description: "CSS ile tasarım rehberi"
    },
    {
        id: 31,
        name: "HTML5 Kitabı",
        price: 199,
        oldPrice: 299,
        image: "https://img.kitapyurdu.com/v1/getImage/fn:11347992/wh:true/wi:500",
        category: "kitap",
        description: "HTML5 başlangıç kitabı"
    },
    {
        id: 32,
        name: "Python Kitabı",
        price: 499,
        oldPrice: 599,
        image: "https://img.kitapyurdu.com/v1/getImage/fn:11387639/wh:true/miw:200/mih:200",
        category: "kitap",
        description: "Python programlama kitabı"
    },
    {
        id: 33,
        name: "C# Kitabı",
        price: 399,
        oldPrice: 499,
        image: "https://www.dikeyeksen.com/cdn/shop/files/csharp_on_kapak3D_53cde556-20ac-4346-b98e-746ba7a52b12_1024x1024.jpg?v=1722500299",
        category: "kitap",
        description: "C# öğrenme kitabı"
    }
];

// Sepet verileri
let cart = [];
let currentCategory = 'all';

// DOM yüklendiğinde çalışacak fonksiyon
document.addEventListener('DOMContentLoaded', function() {
    displayProducts(products);
    setupEventListeners();
    updateCartUI();

    // Giriş modal
    const loginBtn = document.querySelector('.btn-outline-light');
    loginBtn.addEventListener('click', function() {
        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    });

    // Ensure modal closes properly and scrolling is restored
    const loginModalElement = document.getElementById('loginModal');
    loginModalElement.addEventListener('hidden.bs.modal', function() {
        document.body.classList.remove('modal-open'); // Remove modal-open class
        document.body.style.overflow = ''; // Restore scrolling
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) backdrop.remove(); // Remove leftover backdrop
    });

    // Login form submission
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('emailInput').value;
        const password = document.getElementById('passwordInput').value;
        console.log(`E-posta: ${email}, Şifre: ${password}`);
        alert('Giriş başarılı!');
        const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
        loginModal.hide();
    });
});

// Event listener'ları kurma
function setupEventListeners() {
    // Kategori filtreleme
    const categoryLinks = document.querySelectorAll('[data-category]');
    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');
            filterByCategory(category);
            
            // Aktif kategoriyi güncelle
            categoryLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Arama
    const searchBtn = document.getElementById('searchBtn');
    const searchInput = document.getElementById('searchInput');
    
    searchBtn.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });

    // Sepet modal
    const cartBtn = document.getElementById('cartBtn');
    cartBtn.addEventListener('click', function() {
        const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
        updateCartModal();
        cartModal.show();
    });
}

// Ürünleri görüntüleme
function displayProducts(productsToShow) {
    const container = document.getElementById('productsContainer');
    
    if (productsToShow.length === 0) {
        container.innerHTML = '<div class="col-12 text-center"><p class="text-muted">Ürün bulunamadı.</p></div>';
        return;
    }

    container.innerHTML = productsToShow.map(product => `
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card product-card h-100">
                <img src="${product.image}" class="card-img-top product-image" alt="${product.name}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text text-muted">${product.description}</p>
                    <div class="mt-auto">
                        <div class="mb-2">
                            <span class="product-price">${formatPrice(product.price)}</span>
                            ${product.oldPrice ? `<span class="product-old-price ms-2">${formatPrice(product.oldPrice)}</span>` : ''}
                        </div>
                        <button class="btn btn-add-cart w-100" onclick="addToCart(${product.id})">
                            <i class="fas fa-cart-plus me-2"></i>Sepete Ekle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// Kategoriye göre filtreleme
function filterByCategory(category) {
    currentCategory = category;
    let filteredProducts = category === 'all' ? products : products.filter(p => p.category === category);
    displayProducts(filteredProducts);
}

// Arama fonksiyonu
function performSearch() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase().trim();
    
    if (searchTerm === '') {
        filterByCategory(currentCategory); // Eğer arama boşsa mevcut kategoriye göre filtrele
        return;
    }

    const filteredProducts = products.filter(product => 
        product.name.toLowerCase().includes(searchTerm) || // Ürün adı arama terimini içeriyorsa
        product.description.toLowerCase().includes(searchTerm) // Ürün açıklaması arama terimini içeriyorsa
    );
    
    displayProducts(filteredProducts); // Filtrelenmiş ürünleri göster
}

// Sepete ürün ekleme
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return;

    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            ...product,
            quantity: 1
        });
    }
    
    updateCartUI();
    showNotification(`${product.name} sepete eklendi!`, 'success');
}

// Sepetten ürün çıkarma
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCartUI();
    updateCartModal();
}

// Ürün miktarını güncelleme
function updateQuantity(productId, newQuantity) {
    if (newQuantity <= 0) {
        removeFromCart(productId);
        return;
    }
    
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity = newQuantity;
        updateCartUI();
        updateCartModal();
    }
}

// Sepet UI güncelleme
function updateCartUI() {
    const cartCount = document.getElementById('cartCount');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
}

// Sepet modal güncelleme
function updateCartModal() {
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');
    
    if (cart.length === 0) {
        cartItems.innerHTML = '<p class="text-center text-muted">Sepetiniz boş</p>';
        cartTotal.textContent = '0 ₺';
        return;
    }
    
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    
    cartItems.innerHTML = cart.map(item => `
        <div class="cart-item">
            <div class="row align-items-center">
                <div class="col-3">
                    <img src="${item.image}" class="cart-item-image rounded" alt="${item.name}">
                </div>
                <div class="col-6">
                    <h6 class="mb-1">${item.name}</h6>
                    <small class="text-muted">${formatPrice(item.price)}</small>
                </div>
                <div class="col-3">
                    <div class="input-group input-group-sm">
                        <button class="btn btn-outline-secondary" onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
                        <input type="text" class="form-control text-center" value="${item.quantity}" readonly>
                        <button class="btn btn-outline-secondary" onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
                    </div>
                    <button class="btn btn-sm btn-danger mt-1 w-100" onclick="removeFromCart(${item.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    `).join('');
    
    cartTotal.textContent = formatPrice(total);
}

// Fiyat formatlama
function formatPrice(price) {
    return new Intl.NumberFormat('tr-TR', {
        style: 'currency',
        currency: 'TRY',
        minimumFractionDigits: 0
    }).format(price);
}

// Bildirim gösterme
function showNotification(message, type = 'info') {
    // Basit toast bildirimi
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'success' ? 'success' : 'info'} position-fixed`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    toast.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'} me-2"></i>
        ${message}
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

// Sayfa yüklendiğinde animasyon
window.addEventListener('load', function() {
    const cards = document.querySelectorAll('.product-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }, index * 100);
    });
});
    </script>
</body>

</html>