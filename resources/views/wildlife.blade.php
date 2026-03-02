@extends('layouts.app')
@section('title', 'Wildlife Spotlight — ProjectNEMO')
@section('extra-styles')
.spotlight-featured { display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center;margin-bottom:4rem; }
.spotlight-img { height:450px;border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:8rem;position:relative;overflow:hidden; }
.spotlight-img.tiger { background:linear-gradient(145deg,#4a3c1a,#8a7a4a); }
.spotlight-badge { position:absolute;top:1.5rem;left:1.5rem;background:rgba(212,145,59,0.9);color:var(--forest-deep);padding:0.4rem 1rem;border-radius:50px;font-size:0.75rem;font-weight:700;letter-spacing:1px;text-transform:uppercase; }
.spotlight-info h3 { font-family:'Playfair Display',serif;font-size:2.2rem;color:var(--forest-deep);margin-bottom:0.5rem; }
.spotlight-info .species { font-size:1rem;color:var(--sage);font-style:italic;margin-bottom:1.5rem; }
.spotlight-info p { font-size:1.05rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem; }
.spotlight-stats { display:grid;grid-template-columns:repeat(2,1fr);gap:1rem;margin:1.5rem 0; }
.spotlight-stat { background:var(--sand-light);padding:1rem;border-radius:10px; }
.spotlight-stat strong { display:block;font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--forest); }
.spotlight-stat span { font-size:0.8rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;font-weight:600; }
.species-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem; }
.species-card { background:white;border-radius:14px;overflow:hidden;box-shadow:0 4px 15px rgba(0,0,0,0.06);transition:all 0.35s;text-align:center; }
.species-card:hover { transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1); }
.species-card-img { height:180px;display:flex;align-items:center;justify-content:center;font-size:4rem; }
.species-card-img.a { background:linear-gradient(135deg,#1a4a5e,#3d8fa3); }
.species-card-img.b { background:linear-gradient(135deg,#4a3c1a,#8a7a4a); }
.species-card-img.c { background:linear-gradient(135deg,#1a3c2a,#7c9a72); }
.species-card-img.d { background:linear-gradient(135deg,#3c1a2a,#7a4a5a); }
.species-card-body { padding:1.2rem; }
.species-card-body h4 { font-family:'Playfair Display',serif;font-size:1.05rem;color:var(--forest-deep);margin-bottom:0.3rem; }
.species-card-body .status { font-size:0.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:0.2rem 0.6rem;border-radius:50px;display:inline-block;margin-bottom:0.5rem; }
.status.critical { background:#fde8e8;color:#c53030; }
.status.endangered { background:#fefce8;color:#a16207; }
.status.vulnerable { background:#ecfdf5;color:#047857; }
.species-card-body p { font-size:0.82rem;color:var(--text-muted);line-height:1.5; }
@media(max-width:968px){ .spotlight-featured{grid-template-columns:1fr} .species-grid{grid-template-columns:repeat(2,1fr)} }
@media(max-width:600px){ .species-grid{grid-template-columns:1fr} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Wildlife Spotlight</p><h1>Meet the Species That <em>Need Us</em></h1><p>Learn about endangered and threatened species around the world and what's being done to protect them.</p></div>
<section class="section"><div class="container"><div class="spotlight-featured"><div class="spotlight-img tiger">&#128005;<span class="spotlight-badge">Featured Species</span></div><div class="spotlight-info"><h3>Bengal Tiger</h3><p class="species">Panthera tigris tigris</p><p>The Bengal tiger is one of the most iconic and endangered big cats on Earth. Once roaming across vast territories in South Asia, their population has declined dramatically due to habitat loss, poaching, and human-wildlife conflict.</p><p>Conservation efforts, including protected reserves and anti-poaching patrols, have shown promising results in recent years.</p><div class="spotlight-stats"><div class="spotlight-stat"><strong>~4,500</strong><span>Est. Population</span></div><div class="spotlight-stat"><strong>Endangered</strong><span>IUCN Status</span></div><div class="spotlight-stat"><strong>South Asia</strong><span>Habitat Range</span></div><div class="spotlight-stat"><strong>-96%</strong><span>Pop. Decline (100yr)</span></div></div></div></div></div></section>
<section class="section section-alt"><div class="container"><div style="text-align:center;margin-bottom:2.5rem;"><p class="section-label">Species Directory</p><h2 class="section-title" style="text-align:center">Explore More Species</h2></div><div class="species-grid"><div class="species-card"><div class="species-card-img a">&#128011;</div><div class="species-card-body"><span class="status critical">Critically Endangered</span><h4>Blue Whale</h4><p>The largest animal ever to live on Earth, slowly recovering from near-extinction.</p></div></div><div class="species-card"><div class="species-card-img b">&#129421;</div><div class="species-card-body"><span class="status endangered">Endangered</span><h4>Mountain Gorilla</h4><p>Fewer than 1,100 remain in the wild, found only in central Africa's mountains.</p></div></div><div class="species-card"><div class="species-card-img c">&#128058;</div><div class="species-card-body"><span class="status vulnerable">Vulnerable</span><h4>Giant Panda</h4><p>A conservation success story, with populations slowly increasing thanks to dedicated efforts.</p></div></div><div class="species-card"><div class="species-card-img d">&#129446;</div><div class="species-card-body"><span class="status critical">Critically Endangered</span><h4>Hawksbill Sea Turtle</h4><p>Vital to coral reef health, threatened by illegal trade and habitat destruction.</p></div></div></div></div></section>
@endsection
