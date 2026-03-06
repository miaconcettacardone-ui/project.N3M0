@extends('layouts.app')
@section('title', 'About — ProjectNEMO')
@section('extra-styles')
/* Mission Statement */
.mission-quote{text-align:center;padding:3rem 2rem;margin:2rem 0}
.mission-quote blockquote{font-family:'Playfair Display',serif;font-size:2rem;font-style:italic;color:var(--forest-deep);line-height:1.4;max-width:700px;margin:0 auto;position:relative}
.mission-quote blockquote::before{content:'\201C';font-size:5rem;color:var(--sage-light);position:absolute;top:-1.5rem;left:-2rem;line-height:1}

/* What We Do */
.what-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:2rem}
.what-card{background:white;padding:2rem;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-align:center}
.what-icon{font-size:3rem;margin-bottom:1rem}
.what-card h4{font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:0.6rem}
.what-card p{font-size:0.9rem;color:var(--text-muted);line-height:1.6}

/* Inspiration */
.inspiration{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.inspiration-text h2{font-family:'Playfair Display',serif;font-size:2.2rem;color:var(--forest-deep);margin-bottom:1rem}
.inspiration-text p{font-size:1rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem}
.inspiration-visual{background:linear-gradient(145deg,var(--forest),var(--sage));border-radius:20px;height:380px;display:flex;align-items:center;justify-content:center;font-size:5rem}

/* Where We've Been */
.map-cta-box{background:linear-gradient(135deg,var(--forest-deep),#2d5a3f);border-radius:20px;padding:3rem;text-align:center;color:white;margin-top:1.5rem}
.map-cta-box h3{font-family:'Playfair Display',serif;font-size:1.8rem;margin-bottom:0.8rem}
.map-cta-box p{opacity:0.8;margin-bottom:1.5rem;font-size:1rem}
.btn-light{background:white;color:var(--forest-deep);padding:0.8rem 2rem;border-radius:50px;font-weight:700;text-decoration:none;font-size:0.9rem;transition:all 0.3s;display:inline-block}
.btn-light:hover{background:var(--sand-light);transform:translateY(-2px)}

/* Team Preview */
.team-preview{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:2rem}
.team-preview-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-align:center;padding-bottom:1.5rem;transition:all 0.3s}
.team-preview-card:hover{transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1)}
.team-preview-photo{height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem}
.team-preview-photo.mia{background:linear-gradient(135deg,#1a3c2a,#4a7c5e)}
.team-preview-photo.britton{background:linear-gradient(135deg,#1a2c4a,#3d6a8a)}
.team-preview-photo.kaleb{background:linear-gradient(135deg,#3c2a1a,#8a6a3d)}
.team-preview-card h4{font-family:'Playfair Display',serif;font-size:1.05rem;color:var(--forest-deep);margin:1rem 0 0.3rem}
.team-preview-card p{font-size:0.82rem;color:var(--sage);font-weight:600;text-transform:uppercase;letter-spacing:0.5px}
.team-cta{text-align:center;margin-top:2rem}

@media(max-width:968px){
    .what-grid,.team-preview{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto}
    .inspiration{grid-template-columns:1fr}
    .inspiration-visual{height:250px}
}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">About</p>
    <h1>About <em>ProjectNEMO</em></h1>
    <p>Nature. Education. Mission. Outreach. — learn about who we are, what we do, and why it matters.</p>
</div>

<!-- MISSION -->
<section class="section"><div class="container">
    <div class="mission-quote">
        <blockquote>"Your mission statement goes here — something powerful and personal about why ProjectNEMO exists and what you're fighting for."</blockquote>
    </div>

    <!-- WHAT WE DO -->
    <div style="margin-top:1rem;">
        <p class="section-label">What We Do</p>
        <h2 class="section-title">Our Work</h2>
        <p class="section-subtitle">ProjectNEMO exists at the intersection of wildlife science, storytelling, and action.</p>
        <div class="what-grid">
            <div class="what-card"><div class="what-icon">📚</div><h4>Educate</h4><p>We translate complex environmental science into accessible stories that inspire curiosity and understanding in people of all ages.</p></div>
            <div class="what-card"><div class="what-icon">🌍</div><h4>Document</h4><p>Through fieldwork, research, and partnerships, we document wildlife and ecosystems from around the world before it's too late.</p></div>
            <div class="what-card"><div class="what-icon">💚</div><h4>Mobilize</h4><p>We connect our community with vetted organizations, volunteer opportunities, and ways to take real action for the planet.</p></div>
        </div>
    </div>
</div></section>

<!-- INSPIRATION -->
<section class="section section-alt"><div class="container">
    <div class="inspiration">
        <div class="inspiration-text">
            <p class="section-label">Our Story</p>
            <h2>Where It All Began</h2>
            <p>Replace this with the real story of how ProjectNEMO was born — the moment, the place, the animal, or the experience that made you realize this had to exist.</p>
            <p>Talk about what NEMO stands for, why those four words matter, and how that vision has evolved into what the project is today.</p>
            <p>This is the section that makes people feel connected to the mission on a human level — be honest, specific, and personal.</p>
        </div>
        <div class="inspiration-visual">🌿</div>
    </div>
</div></section>

<!-- WHERE WE'VE BEEN -->
<section class="section"><div class="container">
    <p class="section-label">Where?</p>
    <h2 class="section-title">Where We've Been</h2>
    <p class="section-subtitle">From fieldwork in Zimbabwe to puffin monitoring in Iceland — explore every location that has shaped ProjectNEMO's story.</p>
    <div class="map-cta-box">
        <h3>🌍 Explore Our Interactive World Map</h3>
        <p>Click pins to discover fieldwork locations, partner organizations, volunteer opportunities, wildlife hotspots, and fun facts from around the globe.</p>
        <a href="/map" class="btn-light">Open the Map →</a>
    </div>
</div></section>

<!-- TEAM PREVIEW -->
<section class="section section-alt"><div class="container">
    <div style="text-align:center;margin-bottom:2rem;">
        <p class="section-label">Our People</p>
        <h2 class="section-title" style="text-align:center">The Team Behind NEMO</h2>
        <p class="section-subtitle" style="text-align:center;margin:0 auto;">A small but passionate group of people united by a love for the natural world.</p>
    </div>
    <div class="team-preview">
        <div class="team-preview-card">
            <div class="team-preview-photo mia">👩</div>
            <h4>Mia Cardone</h4>
            <p>Founder & Creator</p>
        </div>
        <div class="team-preview-card">
            <div class="team-preview-photo britton">👨‍💻</div>
            <h4>Britton Bolgen</h4>
            <p>CTO & Editing Chief</p>
        </div>
        <div class="team-preview-card">
            <div class="team-preview-photo kaleb">👨</div>
            <h4>Kaleb Watson</h4>
            <p>CMO</p>
        </div>
    </div>
    <div class="team-cta">
        <a href="/team" class="btn-primary">Meet the Full Team →</a>
    </div>
</div></section>
@endsection
