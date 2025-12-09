<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Name</h3>
                    <p class="text-gray-900">{{ Auth::user()->name }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-900">{{ Auth::user()->email }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Phone</h3>
                    <p class="text-gray-900">{{ Auth::user()->phone }}</p>
                </div>

                <!-- Кнопка Edit -->
                <a href="{{ route('profile.edit') }}" 
                   class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                   Edit
                </a>
            </div>
        </div>
    </div>
</x-app-layout>


