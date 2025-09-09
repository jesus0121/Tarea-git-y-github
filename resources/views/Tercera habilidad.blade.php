<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolución de Problemas</title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box;}
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #064e3b, #065f46, #10b981);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            color: #eee; padding: 20px;
        }
        .container {
            background: rgba(6, 78, 59, 0.95);
            border-radius: 25px;
            border: 2px solid rgba(34, 197, 94, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.85);
            max-width: 950px; padding: 40px;
            text-align: center;
        }
        .main-title {
            font-size: clamp(2.6rem, 8vw, 3.5rem);
            font-weight: 800; margin-bottom: 15px;
            background: linear-gradient(135deg, #34d399, #10b981, #059669);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .subtitle {font-size: 1.3rem; color: #cbd5e1; margin-bottom: 30px;}
        .section-icon {font-size: 60px; margin-bottom: 20px;}
        .photo {
            width: 100%; max-width: 450px; margin: 0 auto 25px;
            border-radius: 20px; border: 3px solid rgba(34,197,94,0.6);
            box-shadow: 0 12px 30px rgba(0,0,0,0.6);
            transition: transform 0.3s ease-in-out;
        }
        .photo:hover {transform: scale(1.05);}
        .story-text {font-size: 1.1rem; line-height: 1.8; color: #e2e8f0; text-align: justify;}
    </style>
</head>

<body>
    <div class="container">
        <h1 class="main-title">Resolución de Problemas</h1>
        <p class="subtitle">Habilidad Personal</p>
        <div class="section-icon">🧩</div>
        <img src="https://static.wixstatic.com/media/6780b3_61b01773ea354bd9916ee810834505fb~mv2.jpg/v1/fill/w_1000,h_667,al_c,q_85,usm_0.66_1.00_0.01/6780b3_61b01773ea354bd9916ee810834505fb~mv2.jpg" alt="Resolución de problemas" class="photo">
        <p class="story-text">
            La <b>resolución de problemas</b> me ayuda a enfrentar retos con pensamiento crítico y creatividad.
            Gracias a esta habilidad he podido identificar causas, proponer soluciones y adaptarme a diferentes
            situaciones en la vida académica y profesional.
        </p>
    </div>
</body>
</html>
