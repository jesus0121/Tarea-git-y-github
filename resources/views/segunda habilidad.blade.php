<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicación Efectiva</title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box;}
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e1b4b, #312e81, #4338ca);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            color: #eee; padding: 20px;
        }
        .container {
            background: rgba(30, 27, 75, 0.95);
            border-radius: 25px;
            border: 2px solid rgba(139, 92, 246, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.85);
            max-width: 950px; padding: 40px;
            text-align: center;
        }
        .main-title {
            font-size: clamp(2.6rem, 8vw, 3.5rem);
            font-weight: 800; margin-bottom: 15px;
            background: linear-gradient(135deg, #a78bfa, #8b5cf6, #7c3aed);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .subtitle {font-size: 1.3rem; color: #cbd5e1; margin-bottom: 30px;}
        .section-icon {font-size: 60px; margin-bottom: 20px;}
        .photo {
            width: 100%; max-width: 450px; margin: 0 auto 25px;
            border-radius: 20px; border: 3px solid rgba(139,92,246,0.6);
            box-shadow: 0 12px 30px rgba(0,0,0,0.6);
            transition: transform 0.3s ease-in-out;
        }
        .photo:hover {transform: scale(1.05);}
        .story-text {font-size: 1.1rem; line-height: 1.8; color: #e2e8f0; text-align: justify;}
    </style>
</head>

<body>
    <div class="container">
        <h1 class="main-title">Comunicación Efectiva</h1>
        <p class="subtitle">Habilidad Personal</p>
        <div class="section-icon">🗣️</div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS30JWE-e7g8-F41bd1i6ONHhqmvhTDMr6qhA&s" alt="Comunicación efectiva" class="photo">
        <p class="story-text">
            La <b>comunicación efectiva</b> es esencial para transmitir ideas claras y escuchar activamente.
            Esta habilidad me permite expresar pensamientos con asertividad, evitar malentendidos
            y construir relaciones de confianza tanto en el ámbito académico como profesional.
        </p>
    </div>
</body>
</html>
