<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Auth::user()->email }} {{ __("is logged in!") }}
                </div>

                
    

@canImpersonate($guard = null)
 <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Impersonate</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <!-- Table Row 1 -->
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">Test User</td>
            <td class="px-6 py-4 whitespace-nowrap">test@example.com</td>
            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('impersonate', 1) }}">view</a></td>
        </tr>
        <!-- Table Row 2 -->
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">Test2 User</td>
            <td class="px-6 py-4 whitespace-nowrap">test2@example.com</td>
            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('impersonate', 2) }}">view</a></td>
        </tr>

        <tr>
            <td class="px-6 py-4 whitespace-nowrap">Test3 User</td>
            <td class="px-6 py-4 whitespace-nowrap">text3@example.com</td>
            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('impersonate', 3) }}">view</a></td>
        </tr>
    </tbody>
</table>
@endCanImpersonate
            </div>
        </div>
    </div>
</x-app-layout>
