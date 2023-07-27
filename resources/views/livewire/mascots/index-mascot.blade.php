<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-blue-200 dark:bg-blue-900 text-gray-500 dark:text-white">
                    <tr>
                        <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            {{ __('Name') }}
                        </th>
                        <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            {{ __('Age') }}
                        </th>
                        <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            {{ __('Peso') }}
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-center text-xs font-medium uppercase tracking-wider mx-auto">
                            {{ __('Options') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                    @forelse ($mascots as $mascot)
                        <tr>
                            <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $mascot->name }}
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $mascot->age }}
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $mascot->peso }}
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap text-center ">
                                <a href="{{ route('mascots.index', $mascot->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">{{ __('Edit') }}</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">{{ __('No records available') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="flex justify-center text-lg py-4">
                {{ $mascots->links() }}
            </div>
        </div>
    </div>
</div>
