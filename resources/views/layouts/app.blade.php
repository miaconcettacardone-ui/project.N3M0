<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ProjectNEMO — Defending the Natural World')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --forest: #1a3c2a;
            --forest-deep: #0f2518;
            --sage: #7c9a72;
            --sage-light: #a8c49e;
            --sand: #e8dcc8;
            --sand-light: #f5f0e6;
            --cream: #faf8f4;
            --amber: #d4913b;
            --amber-glow: #e6a84d;
            --text-dark: #1a1a1a;
            --text-muted: #5a5a5a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Source Sans 3', sans-serif;
            color: var(--text-dark);
            background: var(--cream);
            overflow-x: hidden;
        }

        /* NAV */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 100;
            padding: 1.2rem 3rem;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(26,60,42,0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0,0,0,0.15);
            transition: all 0.4s ease;
        }
        nav.transparent { background: transparent; box-shadow: none; }
        nav.scrolled {
            background: rgba(26,60,42,0.95) !important;
            padding: 0.8rem 3rem;
            box-shadow: 0 4px 30px rgba(0,0,0,0.15);
        }
        .nav-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem; font-weight: 900; color: white;
            text-decoration: none; letter-spacing: 2px;
        }
        .nav-logo span { color: var(--amber); }
        .nav-links {
            display: flex; list-style: none; gap: 1.8rem; align-items: center;
        }
        .nav-links a {
            color: rgba(255,255,255,0.85); text-decoration: none;
            font-size: 0.85rem; font-weight: 600; letter-spacing: 1px;
            text-transform: uppercase; transition: color 0.3s; position: relative;
        }
        .nav-links a::after {
            content: ''; position: absolute; bottom: -4px; left: 0;
            width: 0; height: 2px; background: var(--amber); transition: width 0.3s;
        }
        .nav-links a:hover { color: white; }
        .nav-links a:hover::after { width: 100%; }
        .nav-links a.active { color: white; }
        .nav-links a.active::after { width: 100%; }
        .nav-donate-btn {
            background: var(--amber); color: var(--forest-deep) !important;
            padding: 0.6rem 1.5rem; border-radius: 50px; font-weight: 700 !important;
        }
        .nav-donate-btn::after { display: none !important; }
        .nav-donate-btn:hover {
            background: var(--amber-glow) !important; transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(212,145,59,0.4);
        }

        /* PAGE HERO */
        .page-hero {
            padding: 9rem 3rem 4rem;
            background: linear-gradient(135deg, var(--forest-deep) 0%, var(--forest) 50%, #2d5a3f 100%);
            text-align: center; position: relative; overflow: hidden;
        }
        .page-hero::before {
            content: ''; position: absolute; inset: 0;
            background: radial-gradient(ellipse at 20% 50%, rgba(168,196,158,0.08) 0%, transparent 50%),
                        radial-gradient(ellipse at 80% 30%, rgba(212,145,59,0.06) 0%, transparent 40%);
        }
        .page-hero-label {
            font-size: 0.8rem; font-weight: 700; letter-spacing: 4px;
            text-transform: uppercase; color: var(--amber); margin-bottom: 1rem; position: relative;
        }
        .page-hero h1 {
            font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 900;
            color: white; line-height: 1.15; position: relative;
            max-width: 700px; margin: 0 auto;
        }
        .page-hero h1 em { font-style: italic; color: var(--sage-light); }
        .page-hero p {
            color: rgba(255,255,255,0.7); font-size: 1.15rem; margin-top: 1rem;
            position: relative; max-width: 550px; margin-left: auto; margin-right: auto; line-height: 1.7;
        }

        /* SHARED */
        .section { padding: 5rem 3rem; }
        .section-alt { background: var(--sand-light); }
        .section-dark { background: var(--forest-deep); color: white; }
        .container { max-width: 1100px; margin: 0 auto; }
        .section-label {
            font-size: 0.8rem; font-weight: 700; letter-spacing: 4px;
            text-transform: uppercase; color: var(--sage); margin-bottom: 1rem;
        }
        .section-title {
            font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 900;
            color: var(--forest-deep); line-height: 1.2; margin-bottom: 1rem;
        }
        .section-dark .section-title { color: white; }
        .section-subtitle { font-size: 1.05rem; color: var(--text-muted); line-height: 1.7; max-width: 600px; }
        .section-dark .section-subtitle { color: rgba(255,255,255,0.6); }
        .btn-primary {
            display: inline-block; padding: 0.9rem 2.2rem; background: var(--amber);
            color: var(--forest-deep); text-decoration: none; font-weight: 700;
            font-size: 0.95rem; letter-spacing: 1px; border-radius: 50px;
            transition: all 0.3s; border: none; cursor: pointer;
        }
        .btn-primary:hover {
            background: var(--amber-glow); transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(212,145,59,0.35);
        }

        /* CARDS */
        .card {
            background: white; border-radius: 16px; overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06); transition: all 0.4s ease;
            text-decoration: none; color: inherit; display: block;
        }
        .card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(0,0,0,0.12); }
        .card-img {
            height: 200px; display: flex; align-items: center;
            justify-content: center; font-size: 3.5rem; position: relative;
        }
        .card-img.ocean { background: linear-gradient(135deg, #1a4a5e, #3d8fa3); }
        .card-img.forest { background: linear-gradient(135deg, #1a3c2a, #7c9a72); }
        .card-img.wildlife { background: linear-gradient(135deg, #4a3c1a, #8a7a4a); }
        .card-img.climate { background: linear-gradient(135deg, #3c1a2a, #7a4a5a); }
        .card-img.vet { background: linear-gradient(135deg, #2a3c4a, #5a7a8a); }
        .card-img.sustain { background: linear-gradient(135deg, #2a4a2a, #5a8a5a); }
        .card-category {
            position: absolute; top: 1rem; left: 1rem;
            background: rgba(255,255,255,0.9); padding: 0.3rem 0.8rem;
            border-radius: 50px; font-size: 0.7rem; font-weight: 700;
            letter-spacing: 1px; text-transform: uppercase; color: var(--forest);
        }
        .card-body { padding: 1.5rem; }
        .card-date { font-size: 0.8rem; color: var(--text-muted); font-weight: 600; margin-bottom: 0.5rem; }
        .card-body h3 {
            font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 700;
            color: var(--forest-deep); line-height: 1.3; margin-bottom: 0.6rem;
        }
        .card-body p { font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; }
        .card-link {
            display: inline-flex; align-items: center; gap: 0.4rem;
            margin-top: 1rem; font-weight: 700; color: var(--amber); font-size: 0.85rem;
        }

        /* GRIDS */
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
        .grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; }
        .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; }

        /* FOOTER */
        footer { background: #0a1a10; padding: 4rem 3rem 2rem; }
        .footer-inner {
            max-width: 1200px; margin: 0 auto;
            display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 3rem;
        }
        .footer-brand .nav-logo { font-size: 1.4rem; display: inline-block; margin-bottom: 1rem; }
        .footer-description { font-size: 0.9rem; color: rgba(255,255,255,0.5); line-height: 1.7; max-width: 300px; }
        .footer-social { display: flex; gap: 1rem; margin-top: 1.5rem; }
        .footer-social a {
            width: 40px; height: 40px; border-radius: 50%;
            background: rgba(255,255,255,0.1); display: flex;
            align-items: center; justify-content: center;
            color: rgba(255,255,255,0.6); text-decoration: none;
            font-size: 1.1rem; transition: all 0.3s;
        }
        .footer-social a:hover { background: var(--amber); color: var(--forest-deep); }
        .footer-column h4 { font-family: 'Playfair Display', serif; font-size: 1.1rem; color: white; margin-bottom: 1.2rem; }
        .footer-column ul { list-style: none; }
        .footer-column li { margin-bottom: 0.7rem; }
        .footer-column a { color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.9rem; transition: color 0.3s; }
        .footer-column a:hover { color: var(--amber); }
        .footer-bottom {
            max-width: 1200px; margin: 3rem auto 0; padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            display: flex; justify-content: space-between; align-items: center;
        }
        .footer-bottom p { font-size: 0.85rem; color: rgba(255,255,255,0.3); }

        /* RESPONSIVE */
        @media (max-width: 968px) {
            .page-hero h1 { font-size: 2.5rem; }
            .grid-3 { grid-template-columns: 1fr; max-width: 500px; margin-left: auto; margin-right: auto; }
            .grid-2 { grid-template-columns: 1fr; }
            .grid-4 { grid-template-columns: repeat(2, 1fr); }
            .footer-inner { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            nav { padding: 1rem 1.5rem; }
            .nav-links { display: none; }
            .page-hero { padding: 7rem 1.5rem 3rem; }
            .page-hero h1 { font-size: 2rem; }
            .section { padding: 3rem 1.5rem; }
            .grid-4 { grid-template-columns: 1fr; }
            .footer-inner { grid-template-columns: 1fr; }
        }

        @yield('extra-styles')
    </style>
</head>
<body>
    <nav id="navbar" class="@yield('nav-class')">
        <a href="/" class="nav-logo">PROJECT<span>NEMO</span></a>
        <ul class="nav-links">
            <li><a href="/about">About</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/wildlife">Wildlife</a></li>
            <li><a href="/resources">Resources</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/donate" class="nav-donate-btn">Donate</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="/" class="nav-logo">PROJECT<span>NEMO</span></a>
                <p class="footer-description">Educating the world about the natural wonders around us and the urgent need to protect them for future generations.</p>
                <div class="footer-social">
                    <a href="#" title="Instagram">IG</a>
                    <a href="#" title="Twitter/X">X</a>
                    <a href="#" title="YouTube">YT</a>
                    <a href="#" title="TikTok">TT</a>
                </div>
            </div>
            <div class="footer-column">
                <h4>Explore</h4>
                <ul>
                    <li><a href="/articles">Articles</a></li>
                    <li><a href="/gallery">Photos & Videos</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/resources">Resources</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>About</h4>
                <ul>
                    <li><a href="/about">Our Mission</a></li>
                    <li><a href="/wildlife">Wildlife Spotlight</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Support</h4>
                <ul>
                    <li><a href="/donate">Donate</a></li>
                    <li><a href="#">Volunteer</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 ProjectNEMO. All rights reserved.</p>
            <p>Built with &#128154; for the planet</p>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) { nav.classList.add('scrolled'); }
            else { nav.classList.remove('scrolled'); }
        });
    </script>
    @yield('scripts')
</body>
</html>
