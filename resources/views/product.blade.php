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
                <!--<img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">-->
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <!--<a href="/home" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>-->
                <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                <a href="/product" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
                <a href="/cart" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cart</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pay</a>
                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
                </div>
            </div>
            </div>
            <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
                <div class="relative ml-3">
                <!-- <div>
                    <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full" src="{{ asset('img/avatar.png') }}" alt="">
                    </button>
                </div> -->

                <div x-show="isOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
                </div>
            </div>
            </div>
            <div class="-mr-2 flex md:hidden">
            <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
        </div>
        </div>

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
            <!-- <div class="shrink-0">
            <img class="size-8 rounded-full" src="{{ asset('img/avatar.png') }}" alt="">
            </div> -->
            <!-- <div class="ml-3">
                <div class="text-base/5 font-medium text-white">Tom Cook</div>
                <div class="text-sm font-medium text-gray-400">tom@example.com</div>
            </div>
            <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
            </div> -->
        </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Our Products</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/ASUS ROG Strix XG32VQ.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS ROG Strix XG32VQ</h2>
                    <p class="text-gray-500 mb-4">$699,99</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/ASUS ROG STRIX XG49VQ.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS ROG STRIX XG49VQ</h2>
                    <p class="text-gray-500 mb-4">$799,00</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor Asus ROG Strix XG27AQMR Gaming Monitor.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor Asus ROG Strix XG27AQMR Gaming</h2>
                    <p class="text-gray-500 mb-4">$449,00</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor Gaming LG Full HD UltraGear 31,5.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor Gaming LG Full HD UltraGear 31,5</h2>
                    <p class="text-gray-500 mb-4">$293,75</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Monitor LG 27GS60F-B 27 UltraGear FHD IPS 180Hz 1ms Gaming.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Monitor LG 27GS60F-B 27 UltraGear FHD IPS 180Hz 1ms Gaming</h2>
                    <p class="text-gray-500 mb-4">$212,57</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/laptop-msi-thin-gf63-12ucx-intel-core-i5-9s7-16r821-1013-1.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Laptop MSI Thin gf63 12ucx Intel Core i5</h2>
                    <p class="text-gray-500 mb-4">$631,18</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/lenovo-LOQ-15IRX9.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Lenovo LOQ 15IRX9</h2>
                    <p class="text-gray-500 mb-4">$819,99</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/msi-katana-15-B13V.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">MSI Katana 15-B13V</h2>
                    <p class="text-gray-500 mb-4">$1.185,00</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/laptop-hp-pavilion-plus-14-ey0017au-ryzen-5-8r296pa-ar6-1.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Laptop HP Pavilion Plus 14 ey0017au Ryzen 5 8r296pa ar6 1</h2>
                    <p class="text-gray-500 mb-4">$716,98</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/HP 14s-FQ0591AU.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">HP 14s FQ0591AU</h2>
                    <p class="text-gray-500 mb-4">$490,22</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/asus-geforce-rtx-4070-super-12gb-gddr6x-192bits-evo-dual-oc-pn90yv0kc0-m0aa00.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">ASUS Dual GeForce RTX™ 4070 SUPER EVO OC Edition 12GB GDDR6X</h2>
                    <p class="text-gray-500 mb-4">$609,99</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/GeForce GTX 1650 GAMING X 4G.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">GeForce GTX 1650 GAMING X 4G</h2>
                    <p class="text-gray-500 mb-4">$395,00</p>
                    <br>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/VGA Gigabyte GeForce GTX 1050 Ti OC 4G.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">VGA Gigabyte GeForce GTX 1050 Ti OC 4G</h2>
                    <p class="text-gray-500 mb-4">$179,99</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
                <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow duration-200">
                <img src="{{ asset('img/Vga Rog Strix Geforce Rtx 4090 Oc Edition 24gb Gddr6x.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-medium">Vga Rog Strix Geforce Rtx 4090 Oc Edition 24gb Gddr6x</h2>
                    <p class="text-gray-500 mb-4">$3.099,00</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200">Add to Cart</button>
                </div>
            </div>
        </div>
    </main>


</body>
</html>