@extends('layouts.app')
@section('title', 'About — ProjectNEMO')
@section('extra-styles')
.about-me { display:grid;grid-template-columns:300px 1fr;gap:3rem;align-items:start;margin-bottom:4rem; }
.about-photo { width:300px;height:380px;border-radius:20px;background:linear-gradient(145deg,var(--forest),var(--sage));display:flex;align-items:center;justify-content:center;font-size:5rem;position:relative;overflow:hidden; }
.about-photo-placeholder { position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;color:rgba(255,255,255,0.6);font-size:0.85rem; }
.about-photo-placeholder span { font-size:4rem;margin-bottom:0.5rem; }
.about-bio h3 { font-family:'Playfair Display',serif;font-size:2.2rem;color:var(--forest-deep);margin-bottom:0.2rem; }
.about-bio .role { font-size:1rem;color:var(--sage);font-weight:600;margin-bottom:1.2rem; }
.about-bio p { font-size:1.05rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem; }
.mission-quote { text-align:center;padding:3rem 2rem;margin:2rem 0; }
.mission-quote blockquote { font-family:'Playfair Display',serif;font-size:2rem;font-style:italic;color:var(--forest-deep);line-height:1.4;max-width:700px;margin:0 auto;position:relative; }
.mission-quote blockquote::before { content:'\201C';font-size:5rem;color:var(--sage-light);position:absolute;top:-1.5rem;left:-2rem;line-height:1; }
.highlights-section { margin-top:3rem; }
.highlights-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2rem; }
.highlight-card { border-radius:14px;overflow:hidden;background:white;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s; }
.highlight-card:hover { transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1); }
.highlight-img { height:180px;display:flex;align-items:center;justify-content:center;font-size:3rem; }
.highlight-img.a { background:linear-gradient(135deg,#1a4a5e,#3d8fa3); }
.highlight-img.b { background:linear-gradient(135deg,#1a3c2a,#7c9a72); }
.highlight-img.c { background:linear-gradient(135deg,#4a3c1a,#8a7a4a); }
.highlight-body { padding:1.2rem; }
.highlight-body h4 { font-family:'Playfair Display',serif;font-size:1.05rem;color:var(--forest-deep);margin-bottom:0.3rem; }
.highlight-body p { font-size:0.85rem;color:var(--text-muted);line-height:1.5; }
.values-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:2rem; }
.value-card { background:white;padding:2rem;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-align:center; }
.value-icon { font-size:3rem;margin-bottom:1rem; }
.value-card h4 { font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:0.6rem; }
.value-card p { font-size:0.9rem;color:var(--text-muted);line-height:1.6; }
.where-section { margin-top:2rem; }
.where-map-placeholder { width:100%;height:400px;border-radius:16px;background:linear-gradient(135deg,var(--forest-deep),#2d5a3f);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.5);font-size:1.2rem;margin-top:1.5rem; }
@media(max-width:968px){ .about-me{grid-template-columns:1fr;justify-items:center} .about-photo{width:250px;height:300px} .highlights-grid,.values-grid{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">About</p><h1>Meet <em>Mia Cardone</em></h1><p>The person behind ProjectNEMO and the mission to educate the world about our natural environment.</p></div>

<section class="section"><div class="container">
<div class="about-me">
    <div class="about-photo"><div class="about-photo-placeholder"><span>&#128247;</span>Your photo here</div></div>
    <div class="about-bio">
        <h3>Mia Cardone</h3>
        <p class="role">Founder & Creator, ProjectNEMO</p>
        <p>Hello! My name is Mia and I'm the founder of ProjectNEMO. This is where your personal story goes — how you got interested in wildlife conservation, what drives you, your background, and why you started this project.</p>
        <p>Replace this placeholder text with your real bio. Talk about your education, your experiences in the field, what inspires you, and what you hope to achieve with ProjectNEMO.</p>
        <p>Nature. Education. Mission. Outreach. — these four words guide everything we do.</p>
    </div>
</div>

<div class="mission-quote">
    <blockquote>"Your mission statement goes here — something powerful and personal about why ProjectNEMO exists and what you're fighting for."</blockquote>
</div>

<div class="highlights-section">
    <p class="section-label">Highlights</p>
    <h2 class="section-title">What I've Been Up To</h2>
    <p class="section-subtitle">Events, speaking, volunteering, fieldwork, and more.</p>
    <div class="highlights-grid">
        <div class="highlight-card"><div class="highlight-img a">&#127758;</div><div class="highlight-body"><h4>Placeholder Highlight</h4><p>Add your real highlights here — field work, events, speaking engagements, etc.</p></div></div>
        <div class="highlight-card"><div class="highlight-img b">&#127793;</div><div class="highlight-body"><h4>Placeholder Highlight</h4><p>Photos and descriptions of things you've done and places you've been.</p></div></div>
        <div class="highlight-card"><div class="highlight-img c">&#128062;</div><div class="highlight-body"><h4>Placeholder Highlight</h4><p>Your experiences working with animals, organizations, or communities.</p></div></div>
    </div>
</div>
</div></section>

<section class="section section-alt"><div class="container">
<div style="text-align:center;margin-bottom:2rem;">
    <p class="section-label">Our Values</p>
    <h2 class="section-title" style="text-align:center">What Drives ProjectNEMO</h2>
</div>
<div class="values-grid">
    <div class="value-card"><div class="value-icon">&#128218;</div><h4>Education First</h4><p>We believe informed communities make better decisions for the planet. Knowledge is the foundation of change.</p></div>
    <div class="value-card"><div class="value-icon">&#127758;</div><h4>Global Perspective</h4><p>Environmental issues don't respect borders. We cover stories from every corner of the globe.</p></div>
    <div class="value-card"><div class="value-icon">&#128154;</div><h4>Action-Oriented</h4><p>We don't just raise awareness — we connect people with tangible ways to make a difference.</p></div>
</div>
</div></section>

<section class="section"><div class="container">
<div class="where-section">
    <p class="section-label">Where?</p>
    <h2 class="section-title">Where I've Been & Where NEMO Works</h2>
    <p class="section-subtitle">An interactive map is coming soon! It will show everywhere I've traveled, done fieldwork, and where our partner programs operate.</p>
    <div class="where-map-placeholder">&#127758; Interactive Map Coming Soon</div>
</div>
</div></section>
@endsection
