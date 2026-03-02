@extends('layouts.app')
@section('title', 'News — ProjectNEMO')
@section('extra-styles')
.news-featured { display:grid;grid-template-columns:1.5fr 1fr;gap:2rem;margin-bottom:3rem; }
.news-featured-card { background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06); }
.news-featured-img { height:300px;background:linear-gradient(135deg,var(--forest-deep),#2d5a3f);display:flex;align-items:center;justify-content:center;font-size:5rem;position:relative; }
.news-featured-body { padding:2rem; }
.news-featured-body .card-date { margin-bottom:0.5rem; }
.news-featured-body h3 { font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--forest-deep);line-height:1.3;margin-bottom:0.8rem; }
.news-featured-body p { font-size:1rem;color:var(--text-muted);line-height:1.7; }
.news-sidebar { display:flex;flex-direction:column;gap:1.5rem; }
.news-sm-card { background:white;border-radius:12px;padding:1.3rem;box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:all 0.3s; }
.news-sm-card:hover { transform:translateY(-3px);box-shadow:0 8px 25px rgba(0,0,0,0.1); }
.news-sm-card .card-date { font-size:0.75rem; }
.news-sm-card h4 { font-family:'Playfair Display',serif;font-size:1.05rem;color:var(--forest-deep);line-height:1.3;margin:0.4rem 0; }
.news-sm-card p { font-size:0.85rem;color:var(--text-muted);line-height:1.5; }
@media(max-width:968px){ .news-featured{grid-template-columns:1fr} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">News & Updates</p><h1>What's Happening in the <em>Natural World</em></h1><p>Stay informed about the latest environmental news, conservation breakthroughs, and policy updates.</p></div>
<section class="section"><div class="container"><div class="news-featured"><div class="news-featured-card"><div class="news-featured-img">&#127758;<span class="card-category" style="position:absolute;top:1rem;left:1rem;">Breaking</span></div><div class="news-featured-body"><p class="card-date">Coming Soon</p><h3>Major Conservation Victory: New Marine Protected Area Established</h3><p>In a landmark decision, a new marine protected area spanning thousands of square miles has been established, offering crucial protection to endangered marine species and fragile coral reef ecosystems.</p><span class="card-link">Read Full Story &rarr;</span></div></div><div class="news-sidebar"><div class="news-sm-card"><p class="card-date">Coming Soon</p><h4>Global Leaders Pledge Increased Funding for Rainforest Protection</h4><p>New international commitments aim to slow deforestation rates worldwide.</p></div><div class="news-sm-card"><p class="card-date">Coming Soon</p><h4>Endangered Species Population Shows Signs of Recovery</h4><p>Conservation efforts are paying off for several critically endangered species.</p></div><div class="news-sm-card"><p class="card-date">Coming Soon</p><h4>New Study Reveals Alarming Rate of Biodiversity Loss</h4><p>Researchers warn that current extinction rates far exceed natural levels.</p></div><div class="news-sm-card"><p class="card-date">Coming Soon</p><h4>Community-Led Initiative Removes 50 Tons of Ocean Plastic</h4><p>Volunteers across 12 countries participate in record-breaking cleanup effort.</p></div></div></div></div></section>
<section class="section section-alt"><div class="container"><p class="section-label">More News</p><h2 class="section-title">Recent Updates</h2><div class="grid-3" style="margin-top:2rem;"><a href="#" class="card"><div class="card-img ocean" style="height:160px;"><span>&#128011;</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Ocean Temperatures Reach New Highs</h3><p>Climate scientists express concern over rising sea temperatures globally.</p></div></a><a href="#" class="card"><div class="card-img sustain" style="height:160px;"><span>&#127793;</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Sustainable Packaging Revolution Gains Momentum</h3><p>Major companies commit to eliminating single-use plastics by 2030.</p></div></a><a href="#" class="card"><div class="card-img wildlife" style="height:160px;"><span>&#129421;</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>New Wildlife Corridor Connects Fragmented Habitats</h3><p>Infrastructure project creates safe passage for migrating animals.</p></div></a></div></div></section>
@endsection
