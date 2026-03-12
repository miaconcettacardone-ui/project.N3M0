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
        body.translated-ltr { top: 0 !important; }
        .goog-te-banner-frame { display: none !important; }
        .skiptranslate { display: none !important; }
        body { top: 0 !important; }
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
        /* Language switcher */
        .lang-switcher { position:relative; }
        .lang-btn { background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);color:white;padding:0.4rem 0.8rem;border-radius:8px;font-size:0.8rem;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:0.4rem;font-family:'Source Sans 3',sans-serif;transition:all 0.3s; }
        .lang-btn:hover { background:rgba(255,255,255,0.2); }
        .lang-dropdown { position:absolute;top:calc(100% + 0.5rem);right:0;background:white;border-radius:12px;box-shadow:0 10px 40px rgba(0,0,0,0.15);padding:0.5rem;min-width:180px;display:none;z-index:200;max-height:350px;overflow-y:auto; }
        .lang-dropdown::-webkit-scrollbar{width:5px}
        .lang-dropdown::-webkit-scrollbar-track{background:transparent}
        .lang-dropdown::-webkit-scrollbar-thumb{background:#ccc;border-radius:10px}
        .lang-dropdown.show { display:block; }
        .lang-option { display:flex;align-items:center;gap:0.6rem;padding:0.6rem 0.8rem;border-radius:8px;cursor:pointer;transition:background 0.2s;text-decoration:none !important;color:#1a1a1a !important;font-size:0.85rem !important;font-weight:400 !important;letter-spacing:0 !important;text-transform:none !important; }
        .lang-option::after { display:none !important; }
        .lang-option:hover { background:var(--sand-light);color:#1a1a1a !important;font-weight:400 !important; }
        .lang-option.active { background:var(--sand-light);font-weight:600 !important; }
        .lang-option.hidden { display:none; }
        .lang-search { width:100%;padding:0.5rem 0.7rem;border:1.5px solid #e0e0e0;border-radius:8px;font-size:0.8rem;font-family:'Source Sans 3',sans-serif;outline:none;margin-bottom:0.4rem;color:#1a1a1a; }
        .lang-search:focus { border-color:var(--sage); }
        .lang-search::placeholder { color:#aaa; }
        /* Nav dropdowns */
        .nav-dropdown { position:relative; }
        .nav-dropdown > a { cursor:pointer; }
        .nav-dropdown-menu { position:absolute;top:100%;left:50%;transform:translateX(-50%);background:white;border-radius:12px;box-shadow:0 10px 40px rgba(0,0,0,0.15);padding:0.5rem;min-width:200px;display:none;z-index:200;padding-top:0.8rem;margin-top:0; }
        .nav-dropdown-menu::before { content:'';position:absolute;top:-10px;left:0;right:0;height:15px;background:transparent; }
        .nav-dropdown:hover .nav-dropdown-menu { display:block; }
        .nav-dropdown-menu a { display:block;padding:0.6rem 1rem;border-radius:8px;color:var(--text-dark) !important;font-size:0.85rem !important;font-weight:500 !important;letter-spacing:0 !important;text-transform:none !important;transition:background 0.2s; }
        .nav-dropdown-menu a::after { display:none !important; }
        .nav-dropdown-menu a:hover { background:var(--sand-light);color:var(--forest-deep) !important; }
        .nav-dropdown-menu .dd-divider { height:1px;background:#eee;margin:0.3rem 0.5rem; }
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
        .newsletter-section { background:var(--forest);padding:3.5rem 3rem; }
        .newsletter-inner { max-width:900px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:2rem; }
        .newsletter-title { font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:900;color:white;margin-bottom:0.3rem; }
        .newsletter-desc { font-size:0.9rem;color:rgba(255,255,255,0.7);max-width:350px;line-height:1.5; }
        .newsletter-form { display:flex;gap:0.5rem; }
        .newsletter-input { padding:0.8rem 1.2rem;border:2px solid rgba(255,255,255,0.2);border-radius:50px;background:rgba(255,255,255,0.1);color:white;font-size:0.9rem;font-family:'Source Sans 3',sans-serif;width:260px;outline:none;transition:border-color 0.3s; }
        .newsletter-input::placeholder { color:rgba(255,255,255,0.4); }
        .newsletter-input:focus { border-color:var(--amber); }
        .newsletter-btn { padding:0.8rem 1.8rem;background:var(--amber);color:var(--forest-deep);border:none;border-radius:50px;font-weight:700;font-size:0.9rem;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s; }
        .newsletter-btn:hover { background:var(--amber-glow);transform:translateY(-2px);box-shadow:0 4px 15px rgba(212,145,59,0.4); }
        .footer-byline { font-size:0.8rem;color:rgba(255,255,255,0.4);margin-top:0.3rem;font-style:italic; }
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
            .newsletter-inner { flex-direction:column;text-align:center; }
            .newsletter-desc { margin:0 auto; }
            .newsletter-form { flex-direction:column;width:100%; }
            .newsletter-input { width:100%; }
        }

        @yield('extra-styles')
    </style>
</head>
<body>
    <nav id="navbar" class="@yield('nav-class')">
        <a href="/" class="nav-logo">PROJECT<span>NEMO</span></a>
        <ul class="nav-links">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li class="nav-dropdown">
                <a href="/about" class="{{ request()->is('about') || request()->is('team') ? 'active' : '' }}">About &#9662;</a>
                    <div class="nav-dropdown-menu">
                    <a href="/team">Meet the Team</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="/explore" class="{{ request()->is('explore') || request()->is('articles') || request()->is('news') || request()->is('gallery') || request()->is('discovery') || request()->is('resources') || request()->is('wildlife') ? 'active' : '' }}">Explore &#9662;</a>
                <div class="nav-dropdown-menu">
                    <a href="/articles">Articles</a>
                    <a href="/news">News</a>
                    <a href="/gallery">Gallery</a>
                    <a href="/discovery">Discovery Log</a>
                    <a href="/wildlife">Wildlife Spotlight</a>
                    <a href="/journal">The NEMO Journal</a>
                    <a href="/map">World Map</a>
                    <div class="dd-divider"></div>
                    <a href="/resources">Resources</a>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="/take-action" class="{{ request()->is('take-action') || request()->is('donate') || request()->is('transparency') || request()->is('volunteer') || request()->is('contact') ? 'active' : '' }}">Take Action &#9662;</a>
                <div class="nav-dropdown-menu">
                    <a href="/donate">Donate</a>
                    <a href="/transparency">Transparency Report</a>
                    <div class="dd-divider"></div>
                    <a href="/volunteer">Vetted Organizations</a>
                    <a href="/shop">Shop</a>
                    <a href="/contact">Contact Us</a>
                    <a href="/join">Join Our Team</a>
                </div>
            </li>
            <li><a href="/donate" class="nav-donate-btn">Donate</a></li>
            <li class="lang-switcher">
                <button class="lang-btn" onclick="document.querySelector('.lang-dropdown').classList.toggle('show')">&#127760; EN &#9662;</button>
                <div class="lang-dropdown">
                    <input type="text" class="lang-search" placeholder="Search language..." oninput="filterLangs(this.value)">
                    <a href="#" class="lang-option active" data-name="english" onclick="translatePage('en',this)">&#127482;&#127480; English</a>
                    <a href="#" class="lang-option" data-name="arabic" onclick="translatePage('ar',this)">&#127480;&#127462; &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; (Arabic)</a>
                    <a href="#" class="lang-option" data-name="bahasa indonesian" onclick="translatePage('id',this)">&#127470;&#127465; Bahasa Indonesia</a>
                    <a href="#" class="lang-option" data-name="chinese mandarin" onclick="translatePage('zh-CN',this)">&#127464;&#127475; &#20013;&#25991; (Chinese)</a>
                    <a href="#" class="lang-option" data-name="dutch nederlands" onclick="translatePage('nl',this)">&#127475;&#127473; Nederlands (Dutch)</a>
                    <a href="#" class="lang-option" data-name="farsi persian" onclick="translatePage('fa',this)">&#127470;&#127479; &#1601;&#1575;&#1585;&#1587;&#1740; (Farsi)</a>
                    <a href="#" class="lang-option" data-name="french francais" onclick="translatePage('fr',this)">&#127467;&#127479; Fran&ccedil;ais (French)</a>
                    <a href="#" class="lang-option" data-name="german deutsch" onclick="translatePage('de',this)">&#127465;&#127466; Deutsch (German)</a>
                    <a href="#" class="lang-option" data-name="hindi" onclick="translatePage('hi',this)">&#127470;&#127475; &#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (Hindi)</a>
                    <a href="#" class="lang-option" data-name="italian italiano" onclick="translatePage('it',this)">&#127470;&#127481; Italiano (Italian)</a>
                    <a href="#" class="lang-option" data-name="japanese" onclick="translatePage('ja',this)">&#127471;&#127477; &#26085;&#26412;&#35486; (Japanese)</a>
                    <a href="#" class="lang-option" data-name="korean" onclick="translatePage('ko',this)">&#127472;&#127479; &#54620;&#44397;&#50612; (Korean)</a>
                    <a href="#" class="lang-option" data-name="malagasy madagascar" onclick="translatePage('mg',this)">&#127474;&#127468; Malagasy</a>
                    <a href="#" class="lang-option" data-name="portuguese portugues" onclick="translatePage('pt',this)">&#127463;&#127479; Portugu&ecirc;s (Portuguese)</a>
                    <a href="#" class="lang-option" data-name="russian" onclick="translatePage('ru',this)">&#127479;&#127482; &#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russian)</a>
                    <a href="#" class="lang-option" data-name="spanish espanol" onclick="translatePage('es',this)">&#127466;&#127480; Espa&ntilde;ol (Spanish)</a>
                    <a href="#" class="lang-option" data-name="swahili kiswahili" onclick="translatePage('sw',this)">&#127472;&#127466; Kiswahili (Swahili)</a>
                    <a href="#" class="lang-option" data-name="thai" onclick="translatePage('th',this)">&#127481;&#127469; &#3616;&#3634;&#3625;&#3634;&#3652;&#3607;&#3618; (Thai)</a>
                    <a href="#" class="lang-option" data-name="tok pisin papua new guinea" onclick="translatePage('tpi',this)">&#127477;&#127468; Tok Pisin</a>
                    <a href="#" class="lang-option" data-name="turkish turkce" onclick="translatePage('tr',this)">&#127481;&#127479; T&uuml;rk&ccedil;e (Turkish)</a>
                    <a href="#" class="lang-option" data-name="vietnamese" onclick="translatePage('vi',this)">&#127483;&#127475; Ti&#7871;ng Vi&#7879;t (Vietnamese)</a>
                    <a href="#" class="lang-option" data-name="zulu south africa" onclick="translatePage('zu',this)">&#127487;&#127462; isiZulu (Zulu)</a>
                </div>
            </li>
        </ul>
    </nav>

    @yield('content')

    <!-- NEWSLETTER SIGNUP -->
    <section class="newsletter-section">
        <div class="newsletter-inner">
            <div class="newsletter-text">
                <h3 class="newsletter-title">Join the NEMO Newsletter</h3>
                <p class="newsletter-desc">Get monthly updates on wildlife stories, conservation wins, and ways you can make a difference. No spam, ever.</p>
            </div>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email...">
                <button class="newsletter-btn">Sign Up</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="/" class="nav-logo">PROJECT<span>NEMO</span></a>
                <p class="footer-description">Educating the world about the natural wonders around us and the urgent need to protect them for future generations.</p>
                <p class="footer-byline">by Mia Cardone</p>
                <div class="footer-social">
                    <a href="#" title="YouTube">&#9654;</a>
                    <a href="#" title="Instagram">IG</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="TikTok">TT</a>
                    <a href="#" title="Facebook">fb</a>
                    <a href="#" title="Twitter/X">X</a>
                </div>
            </div>
            <div class="footer-column">
                <h4>Explore</h4>
                <ul>
                    <li><a href="/articles">Articles</a></li>
                    <li><a href="/gallery">Photos & Videos</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/resources">Resources</a></li>
                    <li><a href="/discovery">Discovery Log</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>About</h4>
                <ul>
                    <li><a href="/about">Our Mission</a></li>
                    <li><a href="/team">Meet the Team</a></li>
                    <li><a href="/wildlife">Wildlife Spotlight</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Support</h4>
                <li><a href="/shop">Shop</a></li>
                <ul>
                    <li><a href="/donate">Donate</a></li>
                    <li><a href="#">Volunteer</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
                <h4 style="margin-top:1.2rem;">Contact</h4>
                <ul>
                    <li><a href="mailto:helpnemo@gmail.com">helpnemo@gmail.com</a></li>
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
        document.addEventListener('click', function(e) {
            const dd = document.querySelector('.lang-dropdown');
            if (dd && !e.target.closest('.lang-switcher')) { dd.classList.remove('show'); }
        });
        function filterLangs(val) {
            const q = val.toLowerCase();
            document.querySelectorAll('.lang-option').forEach(opt => {
                const name = opt.getAttribute('data-name') || '';
                opt.style.display = name.includes(q) ? 'flex' : 'none';
            });
        }
        function translatePage(lang, el) {
            // Update active state
            document.querySelectorAll('.lang-option').forEach(o => o.classList.remove('active'));
            el.classList.add('active');
            // Update button label
            const code = lang === 'zh-CN' ? 'ZH' : lang.toUpperCase().substring(0,2);
            document.querySelector('.lang-btn').innerHTML = '&#127760; ' + code + ' &#9662;';
            // Close dropdown
            document.querySelector('.lang-dropdown').classList.remove('show');
            // Trigger Google Translate
            var gtCombo = document.querySelector('.goog-te-combo');
            if (gtCombo) {
                gtCombo.value = lang;
                gtCombo.dispatchEvent(new Event('change'));
            }
        }
        // Hide Google Translate default bar
        function hideGoogleBar() {
            var bar = document.querySelector('.goog-te-banner-frame');
            if (bar) bar.style.display = 'none';
            document.body.style.top = '0px';
        }
        setInterval(hideGoogleBar, 500);
    </script>
    <!-- Google Translate (hidden, controlled by our custom UI) -->
    <div id="google_translate_element" style="display:none;"></div>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'ar,de,en,es,fa,fr,hi,id,it,ja,ko,mg,nl,pt,ru,sw,th,tr,vi,zh-CN,zu',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @yield('scripts')
</body>
</html>