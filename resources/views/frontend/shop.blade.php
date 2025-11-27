<x-frontend-layout>

    <!-- Shop Detail Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <!-- Shop Header -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                <div class="md:flex">
                    <!-- Shop Image -->
                    <div class="md:w-1/3">
                        <img class="h-full w-full object-cover" src="{{ asset(Storage::url($shop->profile_image)) }}"
                            alt="Shop image">
                    </div>

                    <!-- Shop Info -->
                    <div class="p-8 md:w-2/3">
                        <div class="flex justify-between items-start">
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">{{ $shop->shop_name }}</h1>
                                <div class="flex items-center mt-2">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $shop->shop_type }}</span>
                                    <span
                                        class="ml-2 bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <i class="fas fa-check-circle mr-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                                <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Rating and Info -->
                        <div class="mt-4 flex flex-wrap items-center gap-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>{{ $shop->shop_address }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-phone-alt mr-2"></i>
                                <span>{{ $shop->contact_number }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fa-solid fa-envelope  mr-2"></i>
                                 <span>{{ $shop->email }}</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <p class="text-gray-700">
                                We believe sports are more than just games – they’re a way of life. That’s why we carefully select only the best quality sports equipment and accessories to ensure durability, comfort, and performance. Whether you’re a beginner looking to start your journey or a professional aiming to sharpen your skills,  it will be your trusted partner in every step.
                            </p>
                        </div>

                        <!-- Stats -->
                        <div class="mt-6 grid grid-cols-2 gap-4 text-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">{{ $shop->products->count() }}</p>
                                <p class="text-gray-600">Products</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">24h</p>
                                <p class="text-gray-600">Avg. Shipping</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Products Section -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">All Products ({{ $products->count() }})</h2>
                    <form action="{{ route('shop', $shop->id) }}" method="get">
                        <div class="flex items-center space-x-4">
                            <button type="submit" class="p-2 rounded-md bg-gray-100 text-gray-600 hover:bg-gray-200">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($products as $product)
                        <x-product-card :product="$product" />
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
