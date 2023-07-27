<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-2 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $mascot->name }}</h2>
                <a href="{{ route('mascots.index') }}"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white px-4 py-2 rounded">{{ __('Back') }}</a>
            </div>
            <p class="text-gray-600 dark:text-gray-300"><strong>Age</strong>: {{ $mascot->age }}</p>
            <p class="text-gray-600 dark:text-gray-300"><strong>Peso</strong>: {{ $mascot->peso }}</p>
        </div>
    </div>
</div>