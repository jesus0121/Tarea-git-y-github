<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo en Equipo</title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box;}
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b, #334155);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            color: #eee; padding: 20px;
        }
        .container {
            background: rgba(15, 23, 42, 0.95);
            border-radius: 25px;
            border: 2px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.85);
            max-width: 950px; padding: 40px;
            text-align: center;
        }
        .main-title {
            font-size: clamp(2.6rem, 8vw, 3.5rem);
            font-weight: 800; margin-bottom: 15px;
            background: linear-gradient(135deg, #3b82f6, #2563eb, #1d4ed8);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .subtitle {font-size: 1.3rem; color: #cbd5e1; margin-bottom: 30px;}
        .section-icon {
            font-size: 60px; margin-bottom: 20px;
        }
        .photo {
            width: 100%; max-width: 450px; margin: 0 auto 25px;
            border-radius: 20px; border: 3px solid rgba(59,130,246,0.6);
            box-shadow: 0 12px 30px rgba(0,0,0,0.6);
            transition: transform 0.3s ease-in-out;
        }
        .photo:hover {transform: scale(1.05);}
        .story-text {
            font-size: 1.1rem; line-height: 1.8; color: #e2e8f0; text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="main-title">Trabajo en Equipo</h1>
        <p class="subtitle">Habilidad Personal</p>
        <div class="section-icon">🤝</div>
        <img src="https://www.revistaeyn.com/binrepository/1381x900/91c0/1200d900/none/26086/VITU/Trabajoenequipo.40_EN1205231_MG224177218.jpg" alt="Trabajo en equipo" class="photo">
        <p class="story-text">
            El <b>trabajo en equipo</b> es la habilidad de colaborar con otros para alcanzar objetivos en común.
            A través de la cooperación, el respeto y la comunicación, he aprendido que los mejores resultados surgen
            cuando cada persona aporta sus fortalezas y conocimientos al grupo.
        </p>
    </div>
</body>
</html>
