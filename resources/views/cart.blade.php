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
                    <div class="shrink-0">
                        <!-- <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/home" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                            <a href="/product" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
                            <a href="cart" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cart</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pay</a>
                            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
                        </div>
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
        </div>
        </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show = "isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <!--<a href="/home" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>-->
                <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                <a href="/product" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
                <a href="/cart" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cart</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pay</a>
                <a href="about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                <div class="shrink-0">
                <img class="size-8 rounded-full" src="{{ asset('img/avatar.png') }}" alt="">
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
            <!-- Cart Items -->
            <div class="bg-white rounded-lg shadow p-6" x-data="{
                    cartItems: [
                        { name: 'HP Pavilion Plus 14 inch Laptop 14-ey0013AU, Silver', price: 829.29, quantity: 1, imgSrc: 'img/laptop-hp-pavilion-plus-14-ey0017au-ryzen-5-8r296pa-ar6-1.png' }
                    ],
                    get total() {
                        return this.cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0).toFixed(2);
                    },
                    increment(item) {
                        item.quantity++;
                    },
                    decrement(item) {
                        if (item.quantity > 1) item.quantity--;
                    }
                }">
                <h2 class="text-xl font-bold mb-4">Your Cart</h2>
                <div class="space-y-4">
                    <template x-for="item in cartItems" :key="item.name">
                        <div class="flex items-center space-x-4">
                            <img :src="item.imgSrc" alt="Product" class="h-20 w-20 object-cover rounded-lg">
                            <div class="flex-1">
                                <h3 class="text-lg font-medium" x-text="item.name"></h3>
                                <p class="text-gray-500" x-text="'$' + item.price.toFixed(2)"></p>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <button @click="decrement(item)" class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">-</button>
                                <span x-text="item.quantity"></span>
                                <button @click="increment(item)" class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">+</button>
                            </div>
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </div>
                    </template>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-bold">Total: $<span x-text="total"></span></h3>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>