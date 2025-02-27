<x-filament-panels::page>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Stock List</h1>
        <a href="{{ route('filament.admin.pages.add-stock') }}"
            class="bg-primary-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-primary-600 transition">
            + Add Stock
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($this->getStockItems() as $stock)
            <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 shadow-lg rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-xl flex flex-col h-[350px]">

                <!-- Standardized Image Container -->
                <div class="w-[200px] h-[200px] flex justify-center items-center">
                    <img src="{{ asset('storage/' . $stock['image']) }}"
                        alt="{{ $stock['title'] }}"
                        class="w-[200px] h-[200px] object-cover rounded-lg">
                </div>

                <!-- Card Content -->
                <div class="flex-grow flex flex-col justify-between mt-4">
                    <div>
                        <h3 class="text-lg font-semibold text-black dark:text-white">{{ $stock['title'] }}</h3>
                    </div>
                    <p class="text-gray-900 dark:text-gray-100 font-bold mt-2">Quantity: {{ $stock['quantity'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-filament-panels::page>
