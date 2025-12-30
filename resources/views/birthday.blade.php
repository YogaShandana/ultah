<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy Birthday Sintayuningsih!</title>
    <link rel="icon" href="{{ asset('img/1.jpg') }}" type="image/jpeg">
    
    <!-- Fonts: Playfair Display (Elegant Serif) & Outfit (Clean Sans) -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #fdfdfd;
            --text-primary: #2d2d2d;
            --text-secondary: #666666;
            --gold-accent: #bd9b5f; /* Muted, elegant gold */
            --paper-shadow: 0 20px 40px -10px rgba(0,0,0,0.08); /* Soft elegant shadow */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: #fafafa;
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Canvas / Card */
        .card-canvas {
            background: var(--bg-color);
            width: 100%;
            max-width: 400px;
            min-height: 80vh;
            padding: 40px 30px;
            border-radius: 20px; /* Softer corners */
            box-shadow: var(--paper-shadow);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid #f0f0f0;
        }

        /* Top Date */
        .header-date {
            font-size: 0.75rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold-accent);
            font-weight: 600;
            margin-bottom: 30px;
        }

        /* Aesthetic Photo Frame - Arch Shape */
        .photo-wrapper {
            position: relative;
            width: 220px;
            height: 300px;
            margin-bottom: 30px;
        }

        .photo-frame {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 120px 120px 0 0; /* Arch Shape */
            border: 8px solid white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        .photo-inner {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .photo-frame:hover .photo-inner {
            transform: scale(1.05);
        }

        /* Decorative thin lines behind photo */
        .deco-circle {
            position: absolute;
            border: 1px solid var(--gold-accent);
            border-radius: 50%;
            z-index: 1;
            opacity: 0.3;
        }

        /* Typography */
        .title-group {
            margin-bottom: 25px;
            position: relative;
        }

        .main-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 0.9;
            color: var(--text-primary);
            margin-bottom: 5px;
        }

        .name-highlight {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-style: italic;
            color: var(--gold-accent);
            display: block;
            margin-top: 5px;
        }

        /* Message */
        .message-content {
            font-size: 0.9rem;
            line-height: 1.8;
            color: var(--text-secondary);
            font-weight: 300;
            margin-bottom: 40px;
            max-width: 90%;
        }

        /* Subtle Grain Texture Overlay */
        .texture-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 10;
        }

        /* Simple Confetti (Minimalist) */
        .confetti-dot {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: var(--gold-accent);
            animation: floatDown 4s ease-in-out infinite;
            opacity: 0;
        }

        @keyframes floatDown {
            0% { transform: translateY(-100px); opacity: 0; }
            10% { opacity: 0.8; }
            100% { transform: translateY(100vh); opacity: 0; }
        }

        /* Footer */
        .footer-simple {
            font-size: 0.7rem;
            color: #aaa;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

    </style>
</head>
<body>

    <div class="texture-overlay"></div>

    <div class="card-canvas">
        <div class="header-date">31 . 12 . 2004</div>

        <div class="photo-wrapper">
            <!-- Decorative circle behind -->
            <div class="deco-circle" style="width: 250px; height: 250px; top: 40px; left: -15px;"></div>
            
            <div class="photo-frame">
                 <!-- User's photo -->
                <img src="{{ asset('img/1.jpg') }}" alt="Birthday Boy" class="photo-inner">
            </div>
        </div>

        <div class="title-group">
            <h1 class="main-title">Happy<br>Birthday</h1>
            <span class="name-highlight">Sintayuningsih</span>
        </div>

        <div class="message-content">
            <p>
                Semoga sehat selalu dan kaya raya. 💸<br>
                Dan semoga dapat sepeda tiba-tiba jatuh dari langit! 🚲☁️<br>
                    </p>
        </div>

        <div class="footer-simple">
             hadiahnya ini dulu ya bingung mau ngasi apa, mau beliin sepeda tunggu banyak uang dulu ya ya hahaha, sorry ya ambil fotomu tanpa ijin
        </div>
    </div>

    <!-- Minimalist JS for soft confetti -->
    <script>
        function createConfetti() {
            const card = document.querySelector('.card-canvas');
            const dot = document.createElement('div');
            dot.classList.add('confetti-dot');
            dot.style.left = Math.random() * 100 + '%';
            dot.style.animationDelay = Math.random() * 3 + 's';
            dot.style.opacity = Math.random() * 0.5 + 0.3; // subtle opacity
            
            card.appendChild(dot);
            
            setTimeout(() => dot.remove(), 4000);
        }

        setInterval(createConfetti, 400);
    </script>
</body>
</html>