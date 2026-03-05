@extends('layouts.app')
@section('title', 'About Us — ProjectNEMO')
@section('extra-styles')
.about-grid { display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-bottom:4rem; }
.about-img { height:400px;border-radius:20px;background:linear-gradient(145deg,var(--forest),var(--sage));display:flex;align-items:center;justify-content:center;font-size:6rem;position:relative;overflow:hidden; }
.about-img-overlay { position:absolute;inset:0;background:linear-gradient(transparent 60%,rgba(15,37,24,0.6));  }
.about-text h3 { font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--forest-deep);margin-bottom:1rem; }
.about-text p { font-size:1.05rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem; }
.values-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3rem; }
.value-card { background:white;padding:2rem;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-align:center; }
.value-icon { font-size:3rem;margin-bottom:1rem; }
.value-card h4 { font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:0.6rem; }
.value-card p { font-size:0.9rem;color:var(--text-muted);line-height:1.6; }
.team-section { text-align:center; }
.team-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:2rem; }
.team-card { background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06); }
.team-photo { height:220px;background:linear-gradient(135deg,var(--forest-deep),var(--sage));display:flex;align-items:center;justify-content:center;font-size:4rem; }
.team-info { padding:1.5rem;text-align:center; }
.team-info h4 { font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep); }
.team-info p { font-size:0.85rem;color:var(--text-muted);margin-top:0.3rem; }
@media(max-width:968px){ .about-grid{grid-template-columns:1fr} .values-grid{grid-template-columns:1fr} .team-grid{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">About Us</p><h1>Our Story & <em>Purpose</em></h1><p>Meet the team behind ProjectNEMO and discover why we're passionate about protecting the natural world.</p></div>
<section class="section"><div class="container"><div class="about-grid"><div class="about-img">&#127758;<div class="about-img-overlay"></div></div><div class="about-text"><h3>Why ProjectNEMO?</h3><p>ProjectNEMO was born from a simple belief: that education is the most powerful tool we have to protect the natural world. Every day, ecosystems are threatened, species disappear, and environmental crises deepen — often because people simply don't know.</p><p>We're here to change that. Through compelling storytelling, rigorous research, and accessible educational content, we bridge the gap between science and the public.</p><p>Our name stands for <strong>Nurturing Earth's Most Outstanding</strong> — because every ecosystem, every species, and every corner of our planet deserves a voice.</p></div></div><div class="about-grid"><div class="about-text"><h3>What We Do</h3><p>We create original articles, educational videos, and investigative reports covering wildlife conservation, environmental science, veterinary medicine, and sustainability.</p><p>We also partner with organizations on the frontlines of conservation to amplify their work and connect them with people who want to help.</p></div><div class="about-img" style="background:linear-gradient(145deg,#1a4a5e,#3d8fa3);">&#127795;<div class="about-img-overlay"></div></div></div></div></section>
<section class="section section-alt"><div class="container"><div style="text-align:center;margin-bottom:2rem;"><p class="section-label">Our Values</p><h2 class="section-title" style="text-align:center">What Drives Us</h2></div><div class="values-grid"><div class="value-card"><div class="value-icon">&#128218;</div><h4>Education First</h4><p>We believe informed communities make better decisions for the planet. Knowledge is the foundation of change.</p></div><div class="value-card"><div class="value-icon">&#127758;</div><h4>Global Perspective</h4><p>Environmental issues don't respect borders. We cover stories from every corner of the globe.</p></div><div class="value-card"><div class="value-icon">&#128154;</div><h4>Action-Oriented</h4><p>We don't just raise awareness — we connect people with tangible ways to make a difference.</p></div></div></div></section>
<section class="section"><div class="container team-section"><p class="section-label">Our Team</p><h2 class="section-title" style="text-align:center">The People Behind NEMO</h2><p class="section-subtitle" style="margin:0 auto 2rem;text-align:center;">Placeholder — add your real team members here later.</p><div class="team-grid"><div class="team-card"><div class="team-photo">&#128100;</div><div class="team-info"><h4>Britton Bolgen</h4><p>Chief Technical Officer</p></div></div><div class="team-card"><div class="team-photo">&#128100;</div><div class="team-info"><h4>Mia Cardone</h4><p>Founder & CEO</p></div></div><div class="team-card"><div class="team-photo">&#128100;</div><div class="team-info"><h4>Kaleb Watson</h4><p>Chief Marketing Officer</p></div></div></div></div></section>
@endsection
