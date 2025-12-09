<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Редактировать профиль</h1>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required class="block w-full mt-1">
            </div>

            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="block w-full mt-1">
            </div>

            <div class="mb-4">
                <label for="phone">Телефон</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" required class="block w-full mt-1">
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>

        </form>
    </div>
</x-app-layout>
