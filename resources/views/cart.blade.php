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
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                            <a href="/product" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
                            <a href="/cart" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cart</a>
                            <a href="/pay" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pay</a>
                            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Cart Page</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-6" id="cart">
                <h2 class="text-xl font-bold mb-4">Your Cart</h2>
                <div id="cart-items"></div>
                <div class="mt-6">
                    <h3 class="text-lg font-bold">Total: $<span id="cart-total">0.00</span></h3>
                    <button onclick="proceedToCheckout()" class="mt-4 w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Fungsi untuk memuat keranjang
    function loadCart() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');

        let total = 0;
        cartItemsContainer.innerHTML = '';

        cart.forEach((item, index) => {
            total += item.price * item.quantity;

            const itemElement = `
                <div class="flex items-center space-x-4 mb-4">
                    <img src="${item.imgSrc}" alt="${item.name}" class="h-20 w-20 object-cover rounded-lg">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium">${item.name}</h3>
                        <p class="text-gray-500">$${item.price.toFixed(2)}</p>
                        <p class="text-sm text-gray-500">Quantity: ${item.quantity}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button onclick="decrementQuantity(${index})" class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">-</button>
                        <button onclick="incrementQuantity(${index})" class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">+</button>
                        <button onclick="removeFromCart(${index})" class="text-red-500 hover:text-red-700">Remove</button>
                    </div>
                </div>
            `;
            cartItemsContainer.insertAdjacentHTML('beforeend', itemElement);
        });

        cartTotal.innerText = total.toFixed(2);
    }

    // Fungsi untuk menambah jumlah item
    function incrementQuantity(index) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart[index].quantity++;
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCart();
    }

    // Fungsi untuk mengurangi jumlah item
    function decrementQuantity(index) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart[index].quantity > 1) {
            cart[index].quantity--;
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }
    }

    // Fungsi untuk menghapus item dari keranjang
    function removeFromCart(index) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCart();
    }

    // Fungsi untuk melanjutkan ke checkout
    function proceedToCheckout() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart.length === 0) {
            alert("Your cart is empty!");
            return;
        }

        const paymentHistory = JSON.parse(localStorage.getItem('paymentHistory')) || [];
        const totalAmount = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);

        // Tambahkan data pembayaran ke riwayat
        paymentHistory.push({
            date: new Date().toISOString(),
            amount: totalAmount,
            items: cart,
        });

        localStorage.setItem('paymentHistory', JSON.stringify(paymentHistory));
        localStorage.removeItem('cart'); // Kosongkan keranjang setelah checkout
        alert("Checkout successful! Redirecting to payment page...");
        window.location.href = "/pay"; // Redirect ke halaman pembayaran
    }

    document.addEventListener('DOMContentLoaded', loadCart);
</script>
</body>
</html>
