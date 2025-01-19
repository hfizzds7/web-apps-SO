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

    <!-- Main Content -->
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($produk as $item)
            <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/' . strtolower(str_replace(' ', '_', $item->nama_produk)) . '.png') }}" 
                    alt="{{ $item->nama_produk }}" class="w-full h-48 object-cover rounded-md mb-4">
                <h2 class="text-lg font-medium">{{ $item->nama_produk }}</h2>
                <p class="text-gray-500 mb-4">Rp{{ number_format($item->harga, 2) }}</p>
                <button onclick="addToCart('{{ $item->nama_produk }}', {{ $item->harga }}, '{{ asset('img/' . strtolower(str_replace(' ', '_', $item->nama_produk)) . '.png') }}')"
                        class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">
                    Add to Cart
                </button>
            </div>
            @endforeach
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
