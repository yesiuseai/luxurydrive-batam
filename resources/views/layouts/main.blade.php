<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxuryDrive Batam - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Inter:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --glass: rgba(255, 255, 255, 0.03); --border: rgba(255, 255, 255, 0.1); }
        body { background: #000; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
        
        /* Animasi Muncul */
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .reveal { animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards; }

        .navbar { background: rgba(0,0,0,0.8); backdrop-filter: blur(20px); border-bottom: 1px solid var(--border); z-index: 1000; }
        .navbar-brand { font-family: 'Montserrat'; letter-spacing: 2px; }

        .glass-card { 
            background: var(--glass); backdrop-filter: blur(15px); border: 1px solid var(--border); 
            border-radius: 25px; transition: all 0.5s ease;
        }
        .glass-card:hover { transform: translateY(-10px); border-color: rgba(255,255,255,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.5); }

        .btn-chrome {
            background: #fff; color: #000 !important; border-radius: 50px; font-weight: 700;
            padding: 15px 40px; transition: 0.3s; display: inline-block; text-decoration: none;
            font-size: 0.85rem; letter-spacing: 1px; border: none;
        }
        .btn-chrome:hover { transform: scale(1.05); box-shadow: 0 0 25px rgba(255,255,255,0.4); background: #eee; }
        
        .btn-outline {
            border: 1px solid #fff; color: #fff; border-radius: 50px; padding: 15px 40px;
            font-size: 0.85rem; letter-spacing: 1px; transition: 0.3s; text-decoration: none;
        }
        .btn-outline:hover { background: #fff; color: #000; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="/">LUXURY<span class="text-secondary">DRIVE</span></a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white me-4" href="/">Home</a>
                <a class="nav-link text-white" href="/katalog">Katalog</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">@yield('content')</div>
</body>
</html>