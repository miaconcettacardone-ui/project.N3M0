@extends('layouts.app')
@section('title', 'ProjectNEMO — Defending the Natural World Through Knowledge')
@section('nav-class', 'transparent')
@section('extra-styles')
.hero{position:relative;height:100vh;min-height:700px;display:flex;align-items:center;justify-content:center;text-align:center;overflow:hidden}
.hero-bg{position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,37,24,0.7) 0%,rgba(15,37,24,0.4) 40%,rgba(15,37,24,0.8) 100%),linear-gradient(135deg,var(--forest-deep) 0%,var(--forest) 30%,#2d5a3f 60%,var(--forest-deep) 100%);z-index:1}
.hero-particles{position:absolute;inset:0;z-index:2;overflow:hidden}
.particle{position:absolute;width:3px;height:3px;background:rgba(168,196,158,0.4);border-radius:50%;animation:float-up linear infinite}
.nemo-pin{width:13px;height:13px;border-radius:50%;border:2px solid white;transition:transform 0.3s ease;}
@keyframes float-up{0%{transform:translateY(100vh) scale(0);opacity:0}10%{opacity:1}90%{opacity:1}100%{transform:translateY(-10vh) scale(1);opacity:0}}
.hero-content{position:relative;z-index:3;max-width:850px;padding:0 2rem}
.hero-tagline{font-size:0.9rem;font-weight:600;letter-spacing:4px;text-transform:uppercase;color:var(--amber);margin-bottom:1.5rem;opacity:0;animation:fadeInUp 1s ease 0.3s forwards}
.hero-title{font-family:'Playfair Display',serif;font-size:5rem;font-weight:900;color:white;line-height:1.1;margin-bottom:1.5rem;opacity:0;animation:fadeInUp 1s ease 0.5s forwards}
.hero-title em{font-style:italic;color:var(--sage-light)}
.hero-subtitle{font-size:1.25rem;color:rgba(255,255,255,0.8);line-height:1.7;font-weight:300;max-width:600px;margin:0 auto 2.5rem;opacity:0;animation:fadeInUp 1s ease 0.7s forwards}
.hero-buttons{display:flex;gap:1.2rem;justify-content:center;opacity:0;animation:fadeInUp 1s ease 0.9s forwards}
.btn-outline{display:inline-block;padding:1rem 2.5rem;border:2px solid rgba(255,255,255,0.4);color:white;text-decoration:none;font-weight:600;font-size:1rem;letter-spacing:1px;border-radius:50px;transition:all 0.3s}
.btn-outline:hover{border-color:white;background:rgba(255,255,255,0.1);transform:translateY(-3px)}
.scroll-indicator{position:absolute;bottom:2rem;left:50%;transform:translateX(-50%);z-index:3;animation:bounce 2s ease infinite}
.scroll-indicator svg{width:30px;height:30px;stroke:rgba(255,255,255,0.5)}
@keyframes bounce{0%,100%{transform:translateX(-50%) translateY(0)}50%{transform:translateX(-50%) translateY(10px)}}
@keyframes fadeInUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.mission-inner{display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center}
.mission-visual{height:500px;border-radius:20px;overflow:hidden}
.mission-visual-bg{width:100%;height:100%;background:linear-gradient(145deg,var(--forest),var(--sage));border-radius:20px;display:flex;align-items:center;justify-content:center;position:relative}
.mission-icon{font-size:8rem;opacity:0.3}
.mission-visual-overlay{position:absolute;bottom:0;left:0;right:0;padding:2rem;background:linear-gradient(transparent,rgba(15,37,24,0.9));color:white}
.mission-visual-overlay p{font-family:'Playfair Display',serif;font-size:1.3rem;font-style:italic;line-height:1.6}
.mission-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2.5rem}
.stat-item{text-align:center;padding:1.5rem 1rem;background:white;border-radius:12px;box-shadow:0 2px 15px rgba(0,0,0,0.05)}
.stat-number{font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:var(--forest)}
.stat-label{font-size:0.8rem;font-weight:600;color:var(--text-muted);letter-spacing:1px;text-transform:uppercase;margin-top:0.3rem}

/* Spotlight */
.spotlight-inner{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.spotlight-visual{height:450px;border-radius:20px;background:linear-gradient(145deg,#1a3c2a,#4a7c5e);display:flex;align-items:center;justify-content:center;font-size:8rem;position:relative;overflow:hidden}
.spotlight-badge{position:absolute;top:1.5rem;left:1.5rem;background:var(--amber);color:var(--forest-deep);font-size:0.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:0.4rem 1rem;border-radius:50px}
.spotlight-tag{display:inline-block;font-size:0.75rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--sage);margin-bottom:0.8rem}

/* Map Teaser */
.map-teaser{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.map-teaser{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.map-preview-wrap{height:380px;border-radius:20px;overflow:hidden;position:relative;box-shadow:0 20px 60px rgba(0,0,0,0.3)}
.map-preview-wrap::after{content:'';position:absolute;inset:0;border-radius:20px;border:1px solid rgba(168,196,158,0.2);pointer-events:none;z-index:2}
.map-preview-label{position:absolute;bottom:1rem;left:50%;transform:translateX(-50%);z-index:3;background:rgba(15,37,24,0.85);color:rgba(168,196,158,0.8);font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;padding:0.4rem 1.2rem;border-radius:50px;backdrop-filter:blur(8px);white-space:nowrap}
#map-preview{width:100%;height:100%}

/* Journal Teaser */
.journal-teaser-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;max-width:900px;margin:0 auto 2.5rem}
.journal-teaser-card{background:white;border-radius:20px;padding:2rem;box-shadow:0 4px 20px rgba(0,0,0,0.06)}
.journal-teaser-card.quote{border-top:4px solid var(--forest)}
.journal-teaser-card.vocab{border-top:4px solid var(--amber)}

/* News */
.news-list{display:flex;flex-direction:column;gap:1.2rem;max-width:800px;margin:0 auto}
.news-item{display:flex;gap:1.5rem;align-items:flex-start;background:white;border-radius:14px;padding:1.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-decoration:none;transition:all 0.3s;border-left:4px solid transparent}
.news-item:hover{transform:translateX(5px);border-left-color:var(--sage)}
.news-icon{font-size:2rem;flex-shrink:0}
.news-content h4{font-family:'Playfair Display',serif;font-size:1.05rem;color:var(--forest-deep);margin-bottom:0.3rem}
.news-content p{font-size:0.88rem;color:var(--text-muted);line-height:1.6}
.news-date{font-size:0.75rem;font-weight:700;color:var(--sage);text-transform:uppercase;letter-spacing:1px;margin-top:0.4rem}

.donate-cta{position:relative;overflow:hidden}
.donate-bg-pattern{position:absolute;inset:0;opacity:0.05;background-image:radial-gradient(circle at 20% 50%,var(--sage) 1px,transparent 1px),radial-gradient(circle at 80% 20%,var(--sage) 1px,transparent 1px);background-size:60px 60px,80px 80px}
.donate-inner{position:relative;max-width:900px;margin:0 auto;text-align:center}
.donate-title{font-family:'Playfair Display',serif;font-size:3rem;font-weight:900;color:white;margin-bottom:1.2rem}
.donate-title em{color:var(--amber);font-style:italic}
.donate-text{font-size:1.15rem;color:rgba(255,255,255,0.7);line-height:1.8;max-width:650px;margin:0 auto 2.5rem}
.donate-buttons{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.donate-org-btn{display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 2rem;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);color:white;text-decoration:none;font-weight:600;font-size:0.95rem;border-radius:50px;transition:all 0.3s}
.donate-org-btn:hover{background:var(--amber);border-color:var(--amber);color:var(--forest-deep);transform:translateY(-2px)}

@media(max-width:968px){
    .hero-title{font-size:3.5rem}
    .mission-inner,.spotlight-inner,.map-teaser{grid-template-columns:1fr;gap:3rem}
    .mission-visual,.spotlight-visual{height:300px}
    .map-visual{height:250px}
    .journal-teaser-grid{grid-template-columns:1fr}
}
@media(max-width:600px){
    .hero-title{font-size:2.5rem}
    .hero-subtitle{font-size:1rem}
    .hero-buttons{flex-direction:column;align-items:center}
    .donate-title{font-size:2rem}
    .mission-stats{grid-template-columns:1fr}
}
@endsection

@section('content')

{{-- HERO --}}
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-particles" id="particles"></div>
    <div class="hero-content">
        <p class="hero-tagline">Educate &bull; Conserve &bull; Protect</p>
        <h1 class="hero-title">Defending the <em>Natural World</em> Through Knowledge</h1>
        <p class="hero-subtitle">Raising global awareness about wildlife conservation, environmental issues, and veterinary medicine through education, storytelling, and action.</p>
        <div class="hero-buttons">
            <a href="/articles" class="btn-primary" style="padding:1rem 2.5rem;font-size:1rem">Explore Our Work</a>
            <a href="/about" class="btn-outline">Our Mission</a>
        </div>
    </div>
    <div class="scroll-indicator"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></div>
</section>

{{-- MISSION --}}
<section class="section"><div class="container">
    <div class="mission-inner">
        <div>
            <p class="section-label">Our Mission</p>
            <h2 class="section-title">Nurturing Earth's Most Outstanding Ecosystems</h2>
            <p class="section-subtitle">ProjectNEMO exists to bridge the gap between scientific knowledge and public awareness. Through compelling educational content, investigative reporting, and community engagement, we illuminate the most pressing environmental and wildlife issues of our time.</p>
            <div class="mission-stats">
                <div class="stat-item"><div class="stat-number">50+</div><div class="stat-label">Articles</div></div>
                <div class="stat-item"><div class="stat-number">12</div><div class="stat-label">Partners</div></div>
                <div class="stat-item"><div class="stat-number">10K+</div><div class="stat-label">Readers</div></div>
            </div>
        </div>
        <div class="mission-visual"><div class="mission-visual-bg"><div class="mission-icon">&#127758;</div><div class="mission-visual-overlay"><p>"The greatness of a nation and its moral progress can be judged by the way its animals are treated."</p></div></div></div>
    </div>
</div></section>

{{-- WILDLIFE SPOTLIGHT --}}
<section class="section section-alt"><div class="container">
    <div class="spotlight-inner">
        <div class="spotlight-visual">
            <span class="spotlight-badge">🔦 This Week's Spotlight</span>
            <span style="position:relative;z-index:1">🐋</span>
        </div>
        <div>
            <p class="spotlight-tag">🔦 Wildlife Spotlight</p>
            <h2 class="section-title">This Week's Featured Species</h2>
            <p class="section-subtitle">Every week we shine a light on a fascinating species, ecosystem, or wildlife phenomenon from around the world. From the depths of the ocean to the canopy of the rainforest — there's always something extraordinary to discover.</p>
            <a href="/wildlife" class="btn-primary" style="margin-top:1rem;display:inline-block">See This Week's Spotlight →</a>
        </div>
    </div>
</div></section>

{{-- FEATURED ARTICLES --}}
<section class="section"><div class="container">
    <div style="text-align:center;max-width:700px;margin:0 auto 3rem">
        <p class="section-label">Featured Articles</p>
        <h2 class="section-title" style="text-align:center">Stories That Matter</h2>
        <p class="section-subtitle" style="margin:0 auto">Dive into our latest research, investigations, and educational pieces.</p>
    </div>
    <div class="grid-3">
        <a href="/articles" class="card"><div class="card-img ocean"><span>&#127754;</span><span class="card-category">Ocean</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>The Silent Crisis Beneath Our Waves</h3><p>Exploring the devastating impact of microplastics on marine ecosystems.</p><span class="card-link">Read More &rarr;</span></div></a>
        <a href="/articles" class="card"><div class="card-img wildlife"><span>&#129421;</span><span class="card-category">Wildlife</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Vanishing Habitats: A Global Emergency</h3><p>How deforestation and urban sprawl are pushing species to the brink.</p><span class="card-link">Read More &rarr;</span></div></a>
        <a href="/articles" class="card"><div class="card-img climate"><span>&#127777;&#65039;</span><span class="card-category">Climate</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Sustainability Starts at Home</h3><p>Practical steps every individual can take to reduce their footprint.</p><span class="card-link">Read More &rarr;</span></div></a>
    </div>
</div></section>

{{-- NEMO JOURNAL TEASER --}}
<section class="section section-alt"><div class="container">
    <div style="text-align:center;max-width:650px;margin:0 auto 3rem">
        <p class="section-label">Daily Inspiration</p>
        <h2 class="section-title" style="text-align:center">The NEMO Journal</h2>
        <p class="section-subtitle" style="margin:0 auto">A new quote and a new word every day — rooted in the natural world.</p>
    </div>
    <div class="journal-teaser-grid">
        <div class="journal-teaser-card quote">
            <p style="font-size:0.75rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--forest);margin-bottom:1rem">🌿 Quote of the Day</p>
            <p style="font-family:'Playfair Display',serif;font-size:1.1rem;font-style:italic;color:var(--forest-deep);line-height:1.6">Visit the NEMO Journal to discover today's featured quote from the world's greatest naturalists and conservationists.</p>
        </div>
        <div class="journal-teaser-card vocab">
            <p style="font-size:0.75rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--amber);margin-bottom:1rem">📖 Word of the Day</p>
            <p style="font-family:'Playfair Display',serif;font-size:1.1rem;font-style:italic;color:var(--forest-deep);line-height:1.6">Expand your wildlife vocabulary with a new conservation term, scientific word, or ecological concept every single day.</p>
        </div>
    </div>
    <div style="text-align:center">
        <a href="/journal" class="btn-primary" style="font-size:1rem;padding:1rem 2.5rem">Open the Journal →</a>
    </div>
</div></section>

{{-- WORLD MAP TEASER --}}
<section class="section"><div class="container">
    <div class="map-teaser">
        <div>
            <p class="section-label">Our Footprint</p>
            <h2 class="section-title">See Where We've Been</h2>
            <p class="section-subtitle">From fieldwork in East Africa to marine research in the Pacific — explore our interactive world map and see every location we've documented, studied, and protected.</p>
            <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.5rem">
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted)"><span style="width:12px;height:12px;border-radius:50%;background:#f97316;display:inline-block"></span>Fieldwork</div>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted)"><span style="width:12px;height:12px;border-radius:50%;background:#3b82f6;display:inline-block"></span>Partners</div>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted)"><span style="width:12px;height:12px;border-radius:50%;background:#22c55e;display:inline-block"></span>Volunteer</div>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted)"><span style="width:12px;height:12px;border-radius:50%;background:#ef4444;display:inline-block"></span>Wildlife</div>
            </div>
            <a href="/map" class="btn-primary" style="margin-top:1.5rem;display:inline-block">Explore the Map →</a>
        </div>
        <div class="map-preview-wrap" onclick="window.location='/map'" style="cursor:pointer">
            <div id="map-preview"></div>
            <div class="map-preview-label">🌍 ProjectNEMO Field Map</div>
        </div>
    </div>
</div></section>

{{-- LATEST NEWS --}}
<section class="section section-alt"><div class="container">
    <div style="text-align:center;max-width:650px;margin:0 auto 3rem">
        <p class="section-label">Stay Informed</p>
        <h2 class="section-title" style="text-align:center">Latest News</h2>
        <p class="section-subtitle" style="margin:0 auto">The latest from the world of wildlife conservation and environmental science.</p>
    </div>
    <div class="news-list">
        <a href="/news" class="news-item">
            <span class="news-icon">🌊</span>
            <div class="news-content">
                <h4>Ocean Temperatures Hit Record Highs for Third Consecutive Year</h4>
                <p>Scientists warn that prolonged marine heatwaves are causing unprecedented coral bleaching events across the Indo-Pacific region.</p>
                <p class="news-date">Coming Soon</p>
            </div>
        </a>
        <a href="/news" class="news-item">
            <span class="news-icon">🦁</span>
            <div class="news-content">
                <h4>African Lion Population Shows Signs of Recovery in Protected Zones</h4>
                <p>New census data reveals a modest but encouraging uptick in lion numbers across several national parks in Kenya and Tanzania.</p>
                <p class="news-date">Coming Soon</p>
            </div>
        </a>
        <a href="/news" class="news-item">
            <span class="news-icon">🌳</span>
            <div class="news-content">
                <h4>Global Reforestation Effort Plants One Billion Trees Milestone</h4>
                <p>A coalition of governments and NGOs celebrates a landmark achievement in the fight against deforestation and climate change.</p>
                <p class="news-date">Coming Soon</p>
            </div>
        </a>
    </div>
    <div style="text-align:center;margin-top:2rem">
        <a href="/news" class="btn-primary" style="padding:0.9rem 2.5rem">All News →</a>
    </div>
</div></section>

{{-- DONATE CTA --}}
<section class="section section-dark donate-cta">
    <div class="donate-bg-pattern"></div>
    <div class="donate-inner">
        <div style="font-size:3rem;margin-bottom:1.5rem">&#128154;</div>
        <h2 class="donate-title">Help Us Protect What <em>Matters</em></h2>
        <p class="donate-text">Every contribution makes a difference. Support the organizations on the frontlines of wildlife conservation and environmental research.</p>
        <div class="donate-buttons">
            <a href="/donate" class="donate-org-btn">&#127758; World Wildlife Fund</a>
            <a href="/donate" class="donate-org-btn">&#127795; Rainforest Alliance</a>
            <a href="/donate" class="donate-org-btn">&#128011; Ocean Conservancy</a>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script>const p=document.getElementById('particles');for(let i=0;i<30;i++){const d=document.createElement('div');d.className='particle';d.style.left=Math.random()*100+'%';d.style.animationDuration=(Math.random()*8+6)+'s';d.style.animationDelay=(Math.random()*5)+'s';d.style.width=(Math.random()*4+2)+'px';d.style.height=d.style.width;p.appendChild(d);}</script>
@endsection

<link href='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css' rel='stylesheet'/>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js'></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    mapboxgl.accessToken = '{{ env("MAPBOX_TOKEN") }}';

    const previewMap = new mapboxgl.Map({
        container: 'map-preview',
        style: 'mapbox://styles/mapbox/outdoors-v12',
        center: [20, 10],
        zoom: 1.0,
        interactive: false,
        attributionControl: false,
        projection: 'globe'
    });

    const pins = [
        { coords: [36.8, -1.3],   color: '#f97316', type: 'fact',      icon: '🔬', label: 'Kenya',        heading: 'Did You Know?',          body: 'Kenya\'s Maasai Mara hosts the largest animal migration on Earth — over 1.5 million wildebeest cross every year.' },
        { coords: [-84.0, 9.7],   color: '#22c55e', type: 'volunteer', icon: '🙋', label: 'Costa Rica',   heading: 'Volunteer Opportunity',  body: 'Sea Turtle Monitoring — join researchers protecting nesting leatherbacks on the Caribbean coast. Applications open.' },
        { coords: [133.7, -25.3], color: '#3b82f6', type: 'partner',   icon: '🤝', label: 'Australia',    heading: 'Our Partner',            body: 'Australian Wildlife Conservancy — protecting over 6.5 million hectares of habitat across the continent.' },
        { coords: [10.7, 59.9],   color: '#a855f7', type: 'fact',      icon: '🔬', label: 'Norway',       heading: 'Did You Know?',          body: 'Norway\'s arctic fox nearly went extinct with only 50 left — a 25-year recovery program has brought them back.' },
        { coords: [138.2, 36.2],  color: '#ef4444', type: 'volunteer', icon: '🙋', label: 'Japan',        heading: 'Volunteer Opportunity',  body: 'Snow Monkey Habitat Survey — assist field researchers tracking Japanese macaque populations in Nagano Prefecture.' },
        { coords: [-47.9, -15.7], color: '#f59e0b', type: 'partner',   icon: '🤝', label: 'Brazil',       heading: 'Our Partner',            body: 'Amazon Conservation Association — safeguarding over 1.6 million acres of pristine Amazon rainforest since 1999.' },
        { coords: [-74.0, 4.7],   color: '#10b981', type: 'fact',      icon: '🔬', label: 'Colombia',     heading: 'Did You Know?',          body: 'Colombia has more bird species than any other country on Earth — over 1,900 recorded species and counting.' },
        { coords: [18.4, -33.9],  color: '#ec4899', type: 'volunteer', icon: '🙋', label: 'South Africa', heading: 'Volunteer Opportunity',  body: 'Big Five Wildlife Census — help rangers conduct population surveys across Kruger National Park this season.' },
        { coords: [85.3, 27.7],   color: '#14b8a6', type: 'partner',   icon: '🤝', label: 'Nepal',        heading: 'Our Partner',            body: 'Snow Leopard Trust — community-based conservation protecting the world\'s most elusive big cat across 5 countries.' },
        { coords: [103.8, 1.4],   color: '#6366f1', type: 'fact',      icon: '🔬', label: 'Singapore',    heading: 'Did You Know?',          body: 'Singapore has documented over 400 bird species in an area smaller than New York City — a model for urban biodiversity.' },
    ];

    const typeColors = {
        fact:      { border: '#22c55e', accent: '#bbf7d0', bg: 'rgba(15,37,24,0.97)' },
        volunteer: { border: '#3b82f6', accent: '#bfdbfe', bg: 'rgba(10,20,40,0.97)' },
        partner:   { border: '#f59e0b', accent: '#fde68a', bg: 'rgba(30,20,5,0.97)'  },
    };

    let rotationFrame, isRotating = false, currentPin = 0;

    function startRotation() {
        isRotating = true;
        (function step() {
            if (!isRotating) return;
            previewMap.setCenter([previewMap.getCenter().lng + 0.07, previewMap.getCenter().lat]);
            rotationFrame = requestAnimationFrame(step);
        })();
    }

    function stopRotation() {
        isRotating = false;
        cancelAnimationFrame(rotationFrame);
    }

    function showCard(pin) {
        // Flash active pin via GeoJSON filter
        previewMap.setFilter('pins-active', ['==', ['get', 'label'], pin.label]);
        setTimeout(() => previewMap.setFilter('pins-active', ['==', ['get', 'label'], '']), 1200);

        const tc = typeColors[pin.type];
        let card = document.getElementById('map-info-card');
        if (!card) {
            card = document.createElement('div');
            card.id = 'map-info-card';
            card.style.cssText = 'position:absolute;bottom:3.5rem;left:50%;transform:translateX(-50%);z-index:10;min-width:260px;max-width:300px;border-radius:14px;padding:1rem 1.2rem;backdrop-filter:blur(14px);pointer-events:none;transition:opacity 0.5s ease;opacity:0;box-shadow:0 8px 32px rgba(0,0,0,0.4);';
            document.querySelector('.map-preview-wrap').appendChild(card);
        }
        card.style.background = tc.bg;
        card.style.border = `1px solid ${tc.border}55`;
        card.innerHTML = `
            <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem">
                <span style="font-size:1rem">${pin.icon}</span>
                <span style="font-size:0.65rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:${tc.accent}">${pin.heading}</span>
                <span style="margin-left:auto;font-size:0.65rem;color:rgba(255,255,255,0.4);letter-spacing:1px">📍 ${pin.label}</span>
            </div>
            <div style="width:100%;height:1px;background:${tc.border}33;margin-bottom:0.6rem"></div>
            <p style="font-size:0.78rem;color:rgba(255,255,255,0.85);line-height:1.55;margin:0">${pin.body}</p>
        `;
        card.style.opacity = '0';
        requestAnimationFrame(() => { card.style.opacity = '1'; });
        setTimeout(() => { card.style.opacity = '0'; }, 5800);
    }

    function runCycle() {
        stopRotation();
        const pin = pins[currentPin];
        previewMap.flyTo({ center: pin.coords, zoom: 3.8, duration: 2500, essential: true });
        setTimeout(() => showCard(pin), 2600);
        setTimeout(() => { previewMap.flyTo({ center: pin.coords, zoom: 1.0, duration: 2000, essential: true }); }, 6400);
        setTimeout(() => {
            currentPin = (currentPin + 1) % pins.length;
            startRotation();
            setTimeout(runCycle, 5000);
        }, 9000);
    }

    previewMap.on('load', () => {
        // Add all pins as a GeoJSON source — these never drift
        previewMap.addSource('pins', {
            type: 'geojson',
            data: {
                type: 'FeatureCollection',
                features: pins.map(p => ({
                    type: 'Feature',
                    properties: { color: p.color, label: p.label },
                    geometry: { type: 'Point', coordinates: p.coords }
                }))
            }
        });

        // Outer pulse ring layer
        previewMap.addLayer({
            id: 'pins-pulse',
            type: 'circle',
            source: 'pins',
            paint: {
                'circle-radius': 14,
                'circle-color': ['get', 'color'],
                'circle-opacity': 0.25,
                'circle-stroke-width': 0,
            }
        });

        // Main dot layer
        previewMap.addLayer({
            id: 'pins-dot',
            type: 'circle',
            source: 'pins',
            paint: {
                'circle-radius': 6,
                'circle-color': ['get', 'color'],
                'circle-stroke-width': 2,
                'circle-stroke-color': 'white',
            }
        });

        // Active/flash layer (hidden by default)
        previewMap.addLayer({
            id: 'pins-active',
            type: 'circle',
            source: 'pins',
            filter: ['==', ['get', 'label'], ''],
            paint: {
                'circle-radius': 18,
                'circle-color': ['get', 'color'],
                'circle-opacity': 0.6,
                'circle-stroke-width': 3,
                'circle-stroke-color': 'white',
            }
        });

        startRotation();
        setTimeout(runCycle, 4000);
    });
});
</script>