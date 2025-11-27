<x-frontend-layout>
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">
                Search Results for "{{ $searchQuery }}"
            </h1>

            @if($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>

            @else
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600">No products found matching your search.</p>
                    <a href="{{ route('home') }}" class="mt-4 inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Back to Home
                    </a>
                </div>
            @endif
        </div>
    </section>
</x-frontend-layout>
