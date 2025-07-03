<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    {{ __('Name') }}
                </label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @if ($errors->has('name'))
                    <p class="text-sm text-red-600 mt-2">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    {{ __('Email') }}
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @if ($errors->has('email'))
                    <p class="text-sm text-red-600 mt-2">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    {{ __('Password') }}
                </label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @if ($errors->has('password'))
                    <p class="text-sm text-red-600 mt-2">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @if ($errors->has('password_confirmation'))
                    <p class="text-sm text-red-600 mt-2">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Rôle</label>
                <select name="role" id="role" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="etudiant">Étudiant</option>
                    <option value="formateur">Formateur</option>
                    <option value="parent">Parent</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}"
                   class="text-sm text-blue-600 hover:underline">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>

</body>
</html>
