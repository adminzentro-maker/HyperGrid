<!DOCTYPE html>
<html lang="de" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperGrid — Next-Gen Minecraft</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            950: '#030712',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #030712;
            background-image: 
                radial-gradient(at 0% 0%, rgba(14, 165, 233, 0.12) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(99, 102, 241, 0.1) 0px, transparent 50%);
            background-attachment: fixed;
        }
        .glass {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glow-hover:hover {
            box-shadow: 0 0 30px -5px rgba(14, 165, 233, 0.3);
            border-color: rgba(14, 165, 233, 0.4);
        }
    </style>
</head>
<body class="text-slate-100 min-h-screen flex flex-col justify-between selection:bg-sky-500 selection:text-white">

    <!-- Top Floating Navbar / Header -->
    <header class="w-full max-w-5xl mx-auto p-6 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-sky-500/20 font-bold text-xl">
                H
            </div>
            <span class="font-extrabold text-xl tracking-tight bg-gradient-to-r from-white to-slate-400 bg-clip-text text-transparent">HyperGrid</span>
        </div>
        <div class="flex items-center gap-3">
            <a href="team.html" class="px-4 py-2 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-400 border border-sky-500/20 hover:bg-sky-500/20 transition-all">
                <i class="fa-solid fa-users"></i> Team
            </a>
            <a href="#discord" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs font-semibold bg-indigo-600/20 text-indigo-400 border border-indigo-500/30 hover:bg-indigo-600/30 transition-all">
                <i class="fa-brands fa-discord"></i> Community
            </a>
        </div>
    </header>

    <!-- Main Bento Grid Container -->
    <main class="w-full max-w-5xl mx-auto px-6 py-4 grid grid-cols-1 md:grid-cols-3 gap-6 my-auto">
        
        <!-- Hero / Intro Box (Spans 2 columns) -->
        <div class="glass md:col-span-2 rounded-3xl p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden group">
            <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Server Online
                </div>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4 leading-tight">
                    Die nächste Evolution des <span class="bg-gradient-to-r from-sky-400 to-indigo-400 bg-clip-text text-transparent">Minecraft Gamings</span>.
                </h1>
                <p class="text-slate-400 text-sm sm:text-base max-w-lg mb-8">
                    Erlebe kompromissloses, lagfreies Gameplay auf HyperGrid. Für Java und Bedrock optimiert, mit einer fantastischen Community.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 items-center">
                <a href="#connect" class="px-6 py-3.5 rounded-2xl bg-sky-500 hover:bg-sky-400 text-slate-950 font-bold text-sm tracking-wide transition-all shadow-lg shadow-sky-500/25 flex items-center gap-2">
                    <i class="fa-solid fa-gamepad"></i> Loslegen
                </a>
                <a href="#rules" class="px-6 py-3.5 rounded-2xl glass hover:bg-slate-800/80 font-semibold text-sm transition-all text-slate-300">
                    Regelwerk lesen
                </a>
            </div>
        </div>

        <!-- Live Status Card (1 column) -->
        <div class="glass rounded-3xl p-8 flex flex-col justify-between relative overflow-hidden">
            <div>
                <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Live Status</div>
                <div class="text-2xl font-bold mb-1" id="player-count">Lade...</div>
                <p class="text-xs text-slate-400">Spieler aktuell online</p>
            </div>
            <div class="mt-6 pt-6 border-t border-white/5 space-y-2">
                <div class="flex justify-between text-xs text-slate-400">
                    <span>Version:</span>
                    <span class="text-slate-200 font-mono">Java & Bedrock</span>
                </div>
                <div class="flex justify-between text-xs text-slate-400">
                    <span>Uptime:</span>
                    <span class="text-emerald-400 font-mono">99.9%</span>
                </div>
            </div>
        </div>

        <!-- Server IP Copy Card (Spans 2 columns) -->
        <div id="connect" class="glass md:col-span-2 rounded-3xl p-8 glow-hover transition-all duration-300 flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <span class="text-xs font-semibold text-sky-400 uppercase tracking-wider block mb-1">Direktverbindung</span>
                    <h3 class="text-xl font-bold">Server IP-Adresse</h3>
                </div>
                <button onclick="copyIp()" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 border border-slate-700 font-mono text-sky-400 font-bold text-sm transition-all flex items-center justify-center gap-3 group">
                    <span id="ip-label">HyperGrid.any-hosting.de</span>
                    <i class="fa-regular fa-copy text-slate-400 group-hover:text-white transition-colors"></i>
                </button>
            </div>
        </div>

        <!-- Discord Quick Box (1 column) -->
        <div id="discord" class="glass rounded-3xl p-8 flex flex-col justify-between bg-gradient-to-br from-indigo-950/40 to-slate-900/40">
            <div>
                <div class="w-12 h-12 rounded-2xl bg-indigo-600/20 border border-indigo-500/30 flex items-center justify-center text-indigo-400 text-xl mb-4">
                    <i class="fa-brands fa-discord"></i>
                </div>
                <h3 class="text-lg font-bold mb-1">Discord Community</h3>
                <p class="text-xs text-slate-400 mb-4">Tritt unserem Discord bei für Events, Support und Updates.</p>
            </div>
            <a href="#" target="_blank" class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-xs tracking-wide text-center transition-all shadow-lg shadow-indigo-600/20">
                Server beitreten
            </a>
        </div>

        <!-- Regeln Bento Box (Spans 3 columns / volle Breite) -->
        <div id="rules" class="glass md:col-span-3 rounded-3xl p-8 sm:p-10">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Server-Regelwerk</h3>
                    <p class="text-xs text-slate-400">Für ein faires und angenehmes Miteinander auf HyperGrid.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-slate-900/40 border border-white/5 p-4 rounded-2xl">
                    <div class="text-sky-400 font-bold mb-1 text-sm">01. Kein Griefing</div>
                    <p class="text-xs text-slate-400">Das zerstören oder bauen auf fremden Grundstücken ohne Erlaubnis ist strengstens untersagt.</p>
                </div>
                <div class="bg-slate-900/40 border border-white/5 p-4 rounded-2xl">
                    <div class="text-sky-400 font-bold mb-1 text-sm">02. Respekt</div>
                    <p class="text-xs text-slate-400">Behandle jeden Mitspieler mit Respekt. Beleidigungen, Rassismus oder Mobbing werden nicht toleriert.</p>
                </div>
                <div class="bg-slate-900/40 border border-white/5 p-4 rounded-2xl">
                    <div class="text-sky-400 font-bold mb-1 text-sm">03. Keine Hacks</div>
                    <p class="text-xs text-slate-400">Die Nutzung von Cheat-Clients, X-Ray oder unfairen Mods führt zum sofortigen permanenten Ausschluss.</p>
                </div>
                <div class="bg-slate-900/40 border border-white/5 p-4 rounded-2xl">
                    <div class="text-sky-400 font-bold mb-1 text-sm">04. Team-Anweisungen</div>
                    <p class="text-xs text-slate-400">Anweisungen des Server-Teams (Admins/Mods) ist stets Folge zu leisten.</p>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="w-full max-w-5xl mx-auto px-6 py-6 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
        <p>&copy; <?php echo date("Y"); ?> HyperGrid Minecraft Server. Alle Rechte vorbehalten.</p>
        <p class="font-mono text-slate-600">Design v4.3 PHP Edition</p>
    </footer>

    <!-- Script für IP Copy & Live Player Count -->
    <script>
        function copyIp() {
            const ip = "HyperGrid.any-hosting.de";
            navigator.clipboard.writeText(ip).then(() => {
                const label = document.getElementById('ip-label');
                const originalText = label.textContent;
                label.textContent = "Kopiert!";
                label.classList.add("text-emerald-400");
                
                setTimeout(() => {
                    label.textContent = originalText;
                    label.classList.remove("text-emerald-400");
                }, 2000);
            });
        }

        async function fetchServerStatus() {
            try {
                const response = att= await fetch('https://api.mcsrvstat.us/3/HyperGrid.any-hosting.de');
                const data = await response.json();
                const playerCountElem = document.getElementById('player-count');
                
                if (data.online) {
                    playerCountElem.textContent = `${data.players.online} / ${data.players.max}`;
                } else {
                    playerCountElem.textContent = "Offline";
                    playerCountElem.classList.add("text-rose-400");
                }
            } catch (e) {
                document.getElementById('player-count').textContent = "Online";
            }
        }
        
        fetchServerStatus();
        setInterval(fetchServerStatus, 60000);
    </script>
</body>
</html>
