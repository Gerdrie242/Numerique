<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bienvenue - T.T.G Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen text-white font-sans">

    <!-- Image de fond douce avec overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://source.unsplash.com/1600x900/?library,classroom,technology"
             class="w-full h-full object-cover brightness-75 blur-sm" alt="Fond éducatif" />
        <div class="absolute inset-0 bg-gradient-to-r from-purple-600/70 to-pink-500/70"></div>
    </div>

    <!-- Contenu -->
    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- Header -->
        <header class="w-full max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row md:justify-between md:items-center">
            <h1 class="text-3xl font-extrabold tracking-wide text-white">T.T.G Network</h1>
            <nav class="mt-4 md:mt-0 space-x-6 text-lg">
                <a href="{{ route('register') }}" class="hover:text-yellow-300 transition">Créer un compte</a>
                <a href="{{ route('login') }}" class="hover:text-yellow-300 transition">Se connecter</a>
            </nav>
        </header>

        <!-- Main -->
        <main class="flex-1 flex flex-col items-center justify-center px-4 text-center space-y-6">
            <h2 class="text-5xl font-bold drop-shadow-md animate-fade-in">
                Bienvenue sur <span class="text-yellow-300">T.T.G Network</span>
            </h2>
            <p class="max-w-2xl text-lg text-gray-100 drop-shadow-sm animate-fade-in delay-100">
                La plateforme scolaire intelligente qui simplifie la gestion des étudiants, des cours, des enseignants et des résultats.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 animate-fade-in delay-200">
                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-yellow-300 text-purple-900 font-semibold rounded-xl shadow hover:bg-yellow-400 transition">
                    Créer un compte
                </a>
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-white/90 text-purple-800 font-semibold rounded-xl border border-white shadow hover:bg-white transition">
                    Se connecter
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white/20 backdrop-blur-sm py-4 text-center text-sm text-white/80 border-t border-white/20">
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
