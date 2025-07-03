<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bienvenue - T.T.G Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-600 text-white min-h-screen flex flex-col">

    <!-- Header -->
    <header class="w-full max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row md:justify-between md:items-center">
        <h1 class="text-2xl font-bold">T.T.G Network</h1>
        <nav class="mt-4 md:mt-0 space-x-4">
            <a href="{{ route('register') }}" class="text-white hover:text-yellow-300 font-semibold">Créer un compte</a>
            <a href="{{ route('login') }}" class="text-white hover:text-yellow-300 font-semibold">Se connecter</a>
        </nav>
    </header>

    <!-- Main -->
    <main class="flex-1 flex flex-col items-center justify-center px-4 text-center space-y-6">
        <h2 class="text-4xl font-extrabold drop-shadow-md animate-fade-in">
            Bienvenue sur <span class="text-yellow-300">T.T.G Network</span>
        </h2>
        <p class="max-w-xl text-lg text-gray-200 drop-shadow-sm animate-fade-in delay-100">
            La plateforme scolaire intelligente qui facilite la gestion des étudiants, cours, notes, enseignants et plus encore.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 animate-fade-in delay-200">
            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-white text-indigo-800 font-semibold rounded-xl shadow hover:bg-gray-100 transition">
                Créer un compte
            </a>
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-white text-indigo-800 font-semibold rounded-xl shadow hover:bg-gray-100 transition">
                Se connecter
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-900 py-4 text-center text-sm">
        © {{ date('Y') }} <strong>T.T.G Network</strong>. Tous droits réservés.
    </footer>

    <!-- Simple fade-in animation -->
    <style>
        .animate-fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</body>
</html>
