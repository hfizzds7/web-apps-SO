<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/home" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Home</a>
                            <a href="/product" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Product</a>
                            <a href="/cart" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Cart</a>
                            <a href="pay" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Pay</a>
                            <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Our Products</h1>
        </div>
    </header>

    <script>
    function addToCart(name, price, imgSrc) {
        // Ambil data cart dari Local Storage atau buat array baru jika belum ada
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Periksa apakah item sudah ada di cart
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            // Jika sudah ada, tambahkan quantity
            existingItem.quantity++;
        } else {
            // Jika belum ada, tambahkan item baru
            cart.push({ name, price, imgSrc, quantity: 1 });
        }

        // Simpan kembali data cart ke Local Storage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Berikan notifikasi
        alert(`${name} has been added to your cart.`);
    }
</script>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/ASUS_ROG_Strix_XG32VQ.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS ROG Strix XG32VQ</h2>
                    <p class="text-gray-500 mb-4">$699,99</p>
                    <button onclick="addToCart('ASUS ROG Strix XG32VQ', 699.99, 'img/ASUS_ROG_Strix_XG32VQ.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/ASUS_ROG_STRIX_XG49VQ.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS ROG STRIX XG49VQ</h2>
                    <p class="text-gray-500 mb-4">$799,00</p>
                    <button onclick="addToCart('ASUS ROG Strix XG49VQ', 799.00, 'img/ASUS_ROG_STRIX_XG49VQ.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor_Asus_ROG_Strix_XG27AQMR_Gaming_Monitor.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor Asus ROG Strix XG27AQMR Gaming</h2>
                    <p class="text-gray-500 mb-4">$449,00</p>
                    <button onclick="addToCart('Monitor Asus ROG Strix XG27AQMR Gaming', 449.00, 'img/Monitor_Asus_ROG_Strix_XG27AQMR_Gaming_Monitor.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor_Gaming_LG_Full_HD_UltraGear_31,5.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor Gaming LG Full HD UltraGear 31,5</h2>
                    <p class="text-gray-500 mb-4">$293,75</p>
                    <button onclick="addToCart('Monitor Gaming LG Full HD UltraGear 31,5', 293.75, 'img/Monitor_Gaming_LG_Full_HD_UltraGear_31,5.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor_LG_27GS60F-B_27_UltraGear_FHD_IPS_180Hz_1ms_Gaming.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor LG 27GS60F-B 27 UltraGear FHD IPS 180Hz 1ms Gaming</h2>
                    <p class="text-gray-500 mb-4">$212,57</p>
                    <button onclick="addToCart('Monitor LG 27GS60F-B 27 UltraGear FHD IPS 180Hz 1ms Gaming', 212.57, 'img/Monitor_LG_27GS60F-B_27_UltraGear_FHD_IPS_180Hz_1ms_Gaming.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/laptop-msi-thin-gf63-12ucx-intel-core-i5-9s7-16r821-1013-1.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Laptop MSI Thin gf63 12ucx Intel Core i5</h2>
                    <p class="text-gray-500 mb-4">$631,18</p>
                    <button onclick="addToCart('Laptop MSI Thin gf63 12ucx Intel Core i5', 631.18, 'img/laptop-msi-thin-gf63-12ucx-intel-core-i5-9s7-16r821-1013-1.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/lenovo-LOQ-15IRX9.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Lenovo LOQ 15IRX9</h2>
                    <p class="text-gray-500 mb-4">$819,99</p>
                    <button onclick="addToCart('Lenovo LOQ 15IRX9', 819.99, 'img/lenovo-LOQ-15IRX9.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/msi-katana-15-B13V.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">MSI Katana 15-B13V</h2>
                    <p class="text-gray-500 mb-4">$1.185,00</p>
                    <button onclick="addToCart('MSI Katana 15-B13V', 1.185.00, 'img/msi-katana-15-B13V.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/laptop-hp-pavilion-plus-14-ey0017au-ryzen-5-8r296pa-ar6-1.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Laptop HP Pavilion Plus 14 ey0017au Ryzen 5 8r296pa ar6 1</h2>
                    <p class="text-gray-500 mb-4">$716,98</p>
                    <button onclick="addToCart('Laptop HP Pavilion Plus 14 ey0017au Ryzen 5 8r296pa ar6 1', 1.185.00, 'img/laptop-hp-pavilion-plus-14-ey0017au-ryzen-5-8r296pa-ar6-1.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/HP_14s-FQ0591AU.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">HP 14s FQ0591AU</h2>
                    <p class="text-gray-500 mb-4">$490,22</p>
                    <button onclick="addToCart('HP 14s FQ0591AU', 490.22, 'img/HP_14s-FQ0591AU.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/asus-geforce-rtx-4070-super-12gb-gddr6x-192bits.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS Dual GeForce RTX™ 4070 SUPER EVO OC Edition 12GB GDDR6X</h2>
                    <p class="text-gray-500 mb-4">$609,99</p>
                    <button onclick="addToCart('ASUS Dual GeForce RTX™ 4070 SUPER EVO OC Edition 12GB GDDR6X', 609.99, 'img/asus-geforce-rtx-4070-super-12gb-gddr6x-192bits.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/GeForce_GTX_1650_GAMING_X_4G.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">GeForce GTX 1650 GAMING X 4G</h2>
                    <p class="text-gray-500 mb-4">$395,00</p>
                    <button onclick="addToCart('GeForce GTX 1650 GAMING X 4G', 395.00, 'img/GeForce_GTX_1650_GAMING_X_4G.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/VGA_Gigabyte_GeForce_GTX_1050_Ti_OC_4G.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">VGA Gigabyte GeForce GTX 1050 Ti OC 4G</h2>
                    <p class="text-gray-500 mb-4">$179,99</p>
                    <button onclick="addToCart('VGA Gigabyte GeForce GTX 1050 Ti OC 4G', 179.99, 'img/VGA_Gigabyte_GeForce_GTX_1050_Ti_OC_4G.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Vga_Rog_Strix_Geforce_Rtx_4090_Oc_Edition_24gb_Gddr6x.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">VGA ROG Strix Geforce Rtx 4090 Oc Edition 24gb Gddr6x</h2>
                    <p class="text-gray-500 mb-4">$3.099,00</p>
                    <button onclick="addToCart('VGA ROG Strix Geforce Rtx 4090 Oc Edition 24gb Gddr6x', 3099.00, 'img/Vga_Rog_Strix_Geforce_Rtx_4090_Oc_Edition_24gb_Gddr6x.png')"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
    function addToCart(name, price, imgSrc) {
        // Ambil data keranjang dari Local Storage atau buat array baru jika belum ada
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Periksa apakah item sudah ada di keranjang
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity++; // Jika sudah ada, tambahkan quantity
        } else {
            // Jika belum ada, tambahkan item baru
            cart.push({ name, price, imgSrc, quantity: 1 });
        }

        // Simpan kembali data ke Local Storage
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${name} has been added to your cart.`);
    }
</script>

</body>
</html>
