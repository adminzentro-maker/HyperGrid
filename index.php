<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperGrid - Minecraft Server</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            text-align: center;
            padding: 50px 20px 20px;
        }

        h1 {
            font-size: 3.5rem;
            color: #38bdf8;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 25px rgba(56, 189, 248, 0.5);
        }

        p.subtitle {
            font-size: 1.2rem;
            color: #94a3b8;
            margin-top: 10px;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            width: 100%;
            max-width: 800px;
            padding: 20px;
        }

        .card {
            background: #1e293b;
            border: 2px solid #334155;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            width: 100%;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            color: #38bdf8;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .ip-box {
            background: #0f172a;
            border: 1px solid #38bdf8;
            color: #38bdf8;
            padding: 12px 20px;
            font-size: 1.4rem;
            font-weight: 600;
            border-radius: 8px;
            user-select: all;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .btn {
            background: #38bdf8;
            color: #0f172a;
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: #0ea5e9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(56, 189, 248, 0.4);
        }

        .btn-discord {
            background: #5865F2;
            color: #ffffff;
        }

        .btn-discord:hover {
            background: #4752C4;
            box-shadow: 0 5px 15px rgba(88, 101, 242, 0.4);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            width: 100%;
        }

        .feature-box, .rule-box {
            background: #1e293b;
            padding: 20px;
            border-radius: 16px;
            border: 2px solid #334155;
            text-align: left;
        }

        .feature-box h3, .rule-box h3 {
            color: #38bdf8;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .rule-box ul {
            list-style-type: disc;
            padding-left: 20px;
            color: #cbd5e1;
        }

        .rule-box li {
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .feature-box p {
            color: #cbd5e1;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        footer {
            margin-top: 40px;
            padding: 20px;
            text-align: center;
            color: #64748b;
            font-size: 0.9rem;
            border-top: 1px solid #1e293b;
            width: 100%;
        }

        @media (max-width: 700px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }
            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>HyperGrid</h1>
        <p class="subtitle">Dein ultimatives Minecraft-Server-Erlebnis</p>
    </header>

    <main>
        <!-- Server IP Karte -->
        <div class="card">
            <h2>Server IP-Adresse</h2>
            <div class="ip-box" id="serverIp">HyperGrid.any-hosting.de</div>
            <button class="btn" onclick="copyIp()">IP kopieren</button>
        </div>

        <!-- Infos & Regeln Grid -->
        <div class="grid-2">
            <div class="feature-box">
                <h3>Server-Infos</h3>
                <p><strong>Version:</strong> Neueste Version (Java & Bedrock)<br>
                <strong>Spielmodi:</strong> Survival / CityBuild / Community<br>
                <strong>Status:</strong> Online 24/7</p>
            </div>
            <div class="rule-box">
                <h3>Regelwerk</h3>
                <ul>
                    <li>Kein Griefing oder Diebstahl.</li>
                    <li>Fairer Umgangston im Chat.</li>
                    <li>Keine Cheats oder Hacks.</li>
                    <li>Respektiere das Server-Team.</li>
                </ul>
            </div>
        </div>

        <!-- Community / Discord Karte -->
        <div class="card">
            <h2>Werde Teil der Community</h2>
            <p style="color: #cbd5e1; margin-bottom: 20px;">Tritt unserem Discord-Server bei, um dich mit anderen Spielern auszutauschen, Support zu erhalten oder bei Events mitzumachen.</p>
            <!-- Ersetze den # unten mit deinem echten Discord-Einladungslink -->
            <a href="#" target="_blank" class="btn btn-discord">Discord Beitreten</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 HyperGrid Minecraft Server. Alle Rechte vorbehalten.</p>
    </footer>

    <script>
        function copyIp() {
            const ipText = "HyperGrid.any-hosting.de";
            navigator.clipboard.writeText(ipText).then(() => {
                const btn = document.querySelector('.card .btn');
                btn.textContent = "IP kopiert!";
                setTimeout(() => {
                    btn.textContent = "IP kopieren";
                }, 2000);
            });
        }
    </script>

</body>
</html>