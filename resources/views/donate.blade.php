@extends('layouts.app')
@section('title', 'Donate — ProjectNEMO')
@section('extra-styles')
.donate-hero-icon { font-size:4rem;margin-bottom:1rem;position:relative; }
.org-grid { display:grid;grid-template-columns:repeat(2,1fr);gap:2rem; }
.org-card { background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s; }
.org-card:hover { transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1); }
.org-card-header { height:140px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;position:relative; }
.org-card-header.wwf { background:linear-gradient(135deg,#1a3c2a,#2d5a3f); }
.org-card-header.rainforest { background:linear-gradient(135deg,#2a4a2a,#5a8a5a); }
.org-card-header.ocean-c { background:linear-gradient(135deg,#1a4a5e,#3d8fa3); }
.org-card-header.wcs { background:linear-gradient(135deg,#4a3c1a,#8a7a4a); }
.org-card-header.ifaw { background:linear-gradient(135deg,#3c1a2a,#7a4a5a); }
.org-card-header.coral { background:linear-gradient(135deg,#0c2d3f,#2a6a8a); }
.org-card-body { padding:1.8rem; }
.org-card-body h3 { font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--forest-deep);margin-bottom:0.5rem; }
.org-card-body p { font-size:0.92rem;color:var(--text-muted);line-height:1.6;margin-bottom:1.2rem; }
.org-card-body .btn-primary { font-size:0.85rem;padding:0.7rem 1.8rem; }
.impact-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:2.5rem; }
.impact-item { text-align:center;padding:2rem 1rem;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:14px; }
.impact-item .icon { font-size:2.5rem;margin-bottom:0.8rem; }
.impact-item h4 { font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--amber);margin-bottom:0.3rem; }
.impact-item p { font-size:0.85rem;color:rgba(255,255,255,0.6); }
@media(max-width:968px){ .org-grid{grid-template-columns:1fr} .impact-grid{grid-template-columns:repeat(2,1fr)} }
@media(max-width:600px){ .impact-grid{grid-template-columns:1fr} }
@endsection
@section('content')
<div class="page-hero"><div class="donate-hero-icon">&#128154;</div><p class="page-hero-label">Make a Difference</p><h1>Support the <em>Organizations</em> That Protect Our Planet</h1><p>100% of donations go directly to conservation organizations. We don't take a cut.</p></div>
<section class="section"><div class="container"><div style="text-align:center;margin-bottom:3rem;"><p class="section-label">Our Partners</p><h2 class="section-title" style="text-align:center">Organizations We Support</h2><p class="section-subtitle" style="margin:0 auto;">These are the organizations doing incredible work on the frontlines of conservation. Click to donate directly to them.</p></div><div class="org-grid"><div class="org-card"><div class="org-card-header wwf">&#128060;</div><div class="org-card-body"><h3>World Wildlife Fund</h3><p>WWF works in nearly 100 countries to protect wildlife and their habitats. They focus on conserving the world's most ecologically important regions.</p><a href="#" class="btn-primary">Donate to WWF &rarr;</a></div></div><div class="org-card"><div class="org-card-header rainforest">&#127795;</div><div class="org-card-body"><h3>Rainforest Alliance</h3><p>Working at the intersection of business, agriculture, and forests to create a better future for people and nature.</p><a href="#" class="btn-primary">Donate to Rainforest Alliance &rarr;</a></div></div><div class="org-card"><div class="org-card-header ocean-c">&#128011;</div><div class="org-card-body"><h3>Ocean Conservancy</h3><p>Championing science-based solutions for a healthy ocean and the wildlife and communities that depend on it.</p><a href="#" class="btn-primary">Donate to Ocean Conservancy &rarr;</a></div></div><div class="org-card"><div class="org-card-header wcs">&#129409;</div><div class="org-card-body"><h3>Wildlife Conservation Society</h3><p>Saving wildlife and wild places through science, conservation action, education, and inspiring people to value nature.</p><a href="#" class="btn-primary">Donate to WCS &rarr;</a></div></div><div class="org-card"><div class="org-card-header ifaw">&#128062;</div><div class="org-card-body"><h3>IFAW</h3><p>International Fund for Animal Welfare rescues and protects animals around the world, from disaster response to habitat conservation.</p><a href="#" class="btn-primary">Donate to IFAW &rarr;</a></div></div><div class="org-card"><div class="org-card-header coral">&#129680;</div><div class="org-card-body"><h3>Coral Reef Alliance</h3><p>Uniting communities to save coral reefs through reducing direct threats and helping reefs adapt to climate change.</p><a href="#" class="btn-primary">Donate to CORAL &rarr;</a></div></div></div></div></section>
<section class="section section-dark"><div class="container" style="text-align:center;"><p class="section-label" style="color:var(--amber)">Why It Matters</p><h2 class="section-title">Your Impact in Numbers</h2><p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);">Every dollar donated makes a real, measurable difference.</p><div class="impact-grid"><div class="impact-item"><div class="icon">&#127795;</div><h4>1M+</h4><p>Trees planted by partner organizations</p></div><div class="impact-item"><div class="icon">&#128011;</div><h4>500K</h4><p>Acres of ocean habitat protected</p></div><div class="impact-item"><div class="icon">&#128062;</div><h4>10K+</h4><p>Animals rescued and rehabilitated</p></div><div class="impact-item"><div class="icon">&#127758;</div><h4>100+</h4><p>Countries with active conservation projects</p></div></div></div></section>
@endsection
