<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperGrid | Minecraft Server</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-color: #030712;
            --card-bg: rgba(15, 23, 42, 0.6);
            --border-color: rgba(56, 189, 248, 0.15);
            --primary: #38bdf8;
            --primary-glow: rgba(56, 189, 248, 0.3);
            --accent: #818cf8;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: var(--bg-color);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(56, 189, 248, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(129, 140, 248, 0.08) 0%, transparent 40%);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Header & Live Status */
        header {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #34d399;
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.15);
        }

        .pulse {
            width: 8px;
            height: 8px;
            background-color: #34d399;
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(52, 211, 153, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
        }

        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(135deg, #fff 30%, var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.subtitle {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        /* Glass Cards */
        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 35px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary), transparent);
        }

        /* IP Box */
        .ip-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(3, 7, 18, 0.8);
            border: 2px solid var(--border-color);
            padding: 15px 25px;
            border-radius: 14px;
            margin: 25px 0 20px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .ip-container:hover {
            border-color: var(--primary);
            box-shadow: 0 0 25px var(--primary-glow);
        }

        .ip-text {
            font-family: 'Orbitron', monospace;
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            color: var(--primary);
            letter-spacing: 1px;
        }

        .copy-btn {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: none;
            padding: 12px 28px;
            color: #030712;
            font-weight: 700;
            font-size: 0.95rem;
            border-radius: 10px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .copy-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px var(--primary-glow);
        }

        /* Grid Layouts */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .feature-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 30px;
            text-align: left;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(56, 189, 248, 0.4);
        }

        .feature-card i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #fff;
        }

        .feature-card p, .feature-card ul {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .feature-card ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .feature-card ul li i {
            font-size: 0.9rem;
            margin-right: 8px;
            margin-bottom: 0;
            color: #34d399;
        }

        /* Action Buttons Row (Discord / Store) */
        .action-row {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .btn-social {
            background: #5865F2;
            color: white;
            padding: 14px 30px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(88, 101, 242, 0.3);
        }

        .btn-social:hover {
            transform: translateY(-2px);
            background: #4752C4;
            box-shadow: 0 6px 20px rgba(88, 101, 242, 0.5);
        }

        footer {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding-top: 20px;
            width: 100%;
            max-width: 1000px;
        }

        @media (max-width: 600px) {
            .ip-container {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <header>
            <div class="status-badge">
                <div class="pulse"></div>
                Server Online & Bereit
            </div>
            <h1>HyperGrid</h1>
            <p class="subtitle">Das ultimative Minecraft-Erlebnis für Java & Bedrock</p>
        </header>

        <!-- Main IP Card -->
        <section class="glass-card">
            <h2 style="font-family: 'Orbitron', sans-serif; color: #fff; font-size: 1.5rem;">Verbinde dich jetzt</h2>
            <div class="ip-container" onclick="copyIp()">
                <span class="ip-text">HyperGrid.any-hosting.de</span>
                <span style="color: var(--text-muted); font-size: 0.85rem;"><i class="fa-regular fa-copy"></i> Klicken zum Kopieren</span>
            </div>
            <button class="copy-btn" onclick="copyIp()">
                <i class="fa-solid fa-clone" id="copyIcon"></i> <span id="copyText">IP in Zwischenablage</span>
            </button>
        </section>

        <!-- Features & Rules Grid -->
        <div class="grid-2">
            <!-- Features -->
            <div class="feature-card">
                <i class="fa-solid fa-server"></i>
                <h3>Server Features</h3>
                <ul>
                    <li><i class="fa-solid fa-check"></i> Java & Bedrock Kompatibilität</li>
                    <li><i class="fa-solid fa-check"></i> 24/7 Hochverfügbarkeit</li>
                    <li><i class="fa-solid fa-check"></i> Lagfreies Gameplay & Events</li>
                    <li><i class="fa-solid fa-check"></i> Freundliches & aktives Team</li>
                </ul>
            </div>

            <!-- Rules -->
            <div class="feature-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h3>Kurz-Regeln</h3>
                <ul>
                    <li><i class="fa-solid fa-circle-chevron-right" style="color: var(--primary);"></i> Kein Griefing oder Zerstören</li>
                    <li><i class="fa-solid fa-circle-chevron-right" style="color: var(--primary);"></i> Respektvoller Umgangston</li>
                    <li><i class="fa-solid fa-circle-chevron-right" style="color: var(--primary);"></i> Keine Hacks oder unfairen Mods</li>
                    <li><i class="fa-solid fa-circle-chevron-right" style="color: var(--primary);"></i> Anweisungen des Teams befolgen</li>
                </ul>
            </div>
        </div>

        <!-- Community / Discord Card -->
        <section class="glass-card" style="padding: 30px;">
            <h2 style="font-family: 'Orbitron', sans-serif; color: #fff; margin-bottom: 10px; font-size: 1.3rem;">Werde Teil der Community</h2>
            <p style="color: var.text-muted; margin-bottom: 20px; font-size: 0.95rem;">Tritt unserem Discord-Server bei für Updates, Support, Giveaways und um neue Mitspieler zu finden.</p>
            <div class="action-row">
                <!-- Ersetze den # durch deinen Discord Einladungslink -->
                <a href="#" target="_blank" class="btn-social">
                    <i class="fa-brands fa-discord" style="font-size: 1.2rem;"></i> Discord Beitreten
                </a>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2026 HyperGrid Minecraft Server. Alle Rechte vorbehalten.</p>
    </footer>

    <script>
        function copyIp() {
            const ip = "HyperGrid.any-hosting.de";
            navigator.clipboard.writeText(ip).then(() => {
                const textElem = document.getElementById('copyText');
                const iconElem = document.getElementById('copyIcon');
                
                textElem.textContent = "Erfolgreich kopiert!";
                iconElem.className = "fa-solid fa-check";
                
                setTimeout(() => {
                    textElem.textContent = "IP in Zwischenablage";
                    iconElem.className = "fa-solid fa-clone";
                }, 2500);
            });
        }
    </script>
</body>
</html>

