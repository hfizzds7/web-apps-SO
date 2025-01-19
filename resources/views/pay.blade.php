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
                            <a href="/home" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Home</a>
                            <a href="/product" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Product</a>
                            <a href="/cart" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Cart</a>
                            <a href="/pay" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Pay</a>
                            <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Payment History</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold">Payment History</h2>
                    <button onclick="clearHistory()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Clear History
                    </button>
                </div>
                <div id="payment-history"></div>
            </div>
        </div>
    </main>
</div>

<script>
    // Fungsi untuk memuat riwayat pembayaran
    function loadPaymentHistory() {
        const paymentHistory = JSON.parse(localStorage.getItem('paymentHistory')) || [];
        const historyContainer = document.getElementById('payment-history');

        if (paymentHistory.length === 0) {
            historyContainer.innerHTML = `<p class="text-gray-500">No payment history available.</p>`;
            return;
        }

        historyContainer.innerHTML = '';
        paymentHistory.forEach((payment, index) => {
            const paymentElement = `
                <div class="mb-4 border-b pb-4">
                    <h3 class="text-lg font-medium">Payment #${index + 1}</h3>
                    <p class="text-gray-500">Date: ${new Date(payment.date).toLocaleString()}</p>
                    <p class="text-gray-500">Amount: $${payment.amount.toFixed(2)}</p>
                    <p class="text-gray-500">Items:</p>
                    <ul class="ml-4 list-disc text-gray-500">
                        ${payment.items.map(item => `<li>${item.name} (x${item.quantity}) - $${item.price.toFixed(2)}</li>`).join('')}
                    </ul>
                </div>
            `;
            historyContainer.insertAdjacentHTML('beforeend', paymentElement);
        });
    }

    // Fungsi untuk menghapus seluruh riwayat pembayaran
    function clearHistory() {
        if (confirm("Are you sure you want to clear all payment history?")) {
            localStorage.removeItem('paymentHistory');
            loadPaymentHistory(); // Refresh tampilan
        }
    }

    // Panggil fungsi untuk memuat riwayat pembayaran
    document.addEventListener('DOMContentLoaded', loadPaymentHistory);
</script>
</body>
</html>
