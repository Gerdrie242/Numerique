<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bienvenue - T.T.G Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen bg-gray-100 text-gray-800">

    <!-- Background image -->
    <div class="absolute inset-0">
        <img src="https://source.unsplash.com/1600x900/?education,technology" alt="Background"
             class="w-full h-full object-cover brightness-75">
        <div class="absolute inset-0 bg-gradient-to-r from-white/80 to-white/60 backdrop-blur-sm"></div>
    </div>

    <!-- Page content -->
    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- Header -->
        <header class="w-full max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row md:justify-between md:items-center">
            <h1 class="text-2xl font-bold text-indigo-800 tracking-wide">T.T.G Network</h1>
            <nav class="mt-4 md:mt-0 space-x-4">
                <a href="{{ route('register') }}" class="text-indigo-700 hover:text-indigo-900 font-medium transition">Créer un compte</a>
                <a href="{{ route('login') }}" class="text-indigo-700 hover:text-indigo-900 font-medium transition">Se connecter</a>
            </nav>
        </header>

        <!-- Main -->
        <main class="flex-1 flex flex-col items-center justify-center px-4 text-center space-y-6">
            <h2 class="text-4xl font-extrabold text-indigo-800 drop-shadow animate-fade-in">
                Bienvenue sur <span class="text-indigo-600">T.T.G Network</span>
            </h2>
            <p class="max-w-xl text-lg text-gray-700 animate-fade-in delay-100">
                La plateforme scolaire intelligente qui facilite la gestion des étudiants, cours, notes, enseignants et plus encore.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 animate-fade-in delay-200">
                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow hover:bg-indigo-700 transition">
                    Créer un compte
                </a>
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-white text-indigo-700 font-semibold border border-indigo-600 rounded-xl shadow hover:bg-gray-100 transition">
                    Se connecter
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white/70 backdrop-blur-md py-4 text-center text-sm text-gray-600 border-t border-gray-300">
            © {{ date('Y') }} <strong>T.T.G Network</strong>. Tous droits réservés.
        </footer>
    </div>

    <!-- Animation -->
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
