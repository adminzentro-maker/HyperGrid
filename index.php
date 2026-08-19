<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>HyperGrid | Minecraft Server</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Inter:wght@300;400;600&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #050505; background-image: radial-gradient(circle at 20% 30%, rgba(56, 189, 248, 0.15) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(139, 92, 246, 0.1) 0%, transparent 50%); color: #ffffff; font-family: 'Inter', sans-serif; min-height: 100vh; display: flex; flex-direction: column; align-items: center; padding: 20px; }
        .container { max-width: 900px; width: 100%; }
        header { text-align: center; margin: 80px 0; }
        h1 { font-family: 'Orbitron', sans-serif; font-size: 4.5rem; text-transform: uppercase; letter-spacing: 5px; background: linear-gradient(to right, #38bdf8, #818cf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 10px; }
        .glass-card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px; padding: 40px; text-align: center; }
        .ip-box { background: #000; border: 2px solid #38bdf8; padding: 20px; font-family: 'Orbitron', monospace; font-size: 1.8rem; color: #38bdf8; border-radius: 12px; margin: 20px 0; box-shadow: 0 0 20px rgba(56, 189, 248, 0.2); cursor: pointer; }
        .btn { background: linear-gradient(135deg, #38bdf8, #3b82f6); border: none; padding: 15px 40px; color: white; font-weight: 700; border-radius: 50px; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s; }
        .btn:hover { transform: scale(1.05); box-shadow: 0 0 30px rgba(56, 189, 248, 0.5); }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px; }
        .card-small { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); padding: 25px; border-radius: 20px; }
        h2 { font-family: 'Orbitron', sans-serif; margin-bottom: 15px; color: #38bdf8; }
        @media (max-width: 768px) { .grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <div class='container'>
        <header>
            <h1>HyperGrid</h1>
            <p>Die nächste Generation des Minecraft-Gamings.</p>
        </header>
        <section class='glass-card'>
            <h2>Server IP</h2>
            <div class='ip-box' onclick='copyIp()'>HyperGrid.any-hosting.de</div>
            <button class='btn' onclick='copyIp()'>IP kopieren</button>
        </section>
        <div class='grid'>
            <div class='card-small'>
                <h2>Features</h2>
                <p>✓ 24/7 Online<br>✓ Java Support<br>✓ Aktive Community</p>
            </div>
            <div class='card-small'>
                <h2>Regeln</h2>
                <p>• Kein Griefing<br>• Respektvoller Umgang<br>• Fair Play only</p>
            </div>
        </div>
    </div>
    <script>
        function copyIp() {
            navigator.clipboard.writeText('HyperGrid.any-hosting.de');
            const btn = document.querySelector('.btn');
            btn.textContent = 'Kopiert!';
            setTimeout(() => { btn.textContent = 'IP kopieren'; }, 2000);
        }
    </script>
</body>
</html>
