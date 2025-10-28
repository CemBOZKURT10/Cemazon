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