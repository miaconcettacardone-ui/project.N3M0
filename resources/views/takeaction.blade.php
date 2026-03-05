@extends('layouts.app')
@section('title', 'Take Action — ProjectNEMO')
@section('extra-styles')
.action-intro{max-width:700px;margin:0 auto 3rem;text-align:center}
.action-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.action-hero-cards{display:grid;grid-template-columns:repeat(2,1fr);gap:2rem;margin-bottom:4rem}
.action-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.35s;text-decoration:none;color:inherit;display:block}
.action-card:hover{transform:translateY(-6px);box-shadow:0 12px 35px rgba(0,0,0,0.12)}
.action-card-icon{height:180px;display:flex;align-items:center;justify-content:center;font-size:4.5rem;position:relative}
.action-card-body{padding:1.8rem}
.action-card-body h3{font-family:'Playfair Display',serif;font-size:1.4rem;color:var(--forest-deep);margin-bottom:0.5rem}
.action-card-body p{font-size:0.92rem;color:var(--text-muted);line-height:1.6;margin-bottom:1rem}
.action-card-link{color:var(--amber);font-weight:700;font-size:0.9rem}
.org-month-banner{display:grid;grid-template-columns:1fr 1.2fr;gap:2.5rem;align-items:center;margin-bottom:3rem}
.org-month-banner-img{height:300px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:6rem;background:linear-gradient(135deg,var(--forest-deep),var(--sage))}
.org-month-banner-text .tag{display:inline-block;background:var(--amber);color:var(--forest-deep);padding:0.3rem 1rem;border-radius:50px;font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem}
.org-month-banner-text h3{font-family:'Playfair Display',serif;font-size:2rem;color:var(--forest-deep);margin-bottom:0.8rem;line-height:1.25}
.org-month-banner-text p{font-size:1rem;color:var(--text-muted);line-height:1.7;margin-bottom:1.2rem}
.impact-banner{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:2rem}
.impact-stat{text-align:center;padding:1.5rem 1rem;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:12px}
.impact-stat .num{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--amber)}
.impact-stat p{font-size:0.8rem;color:rgba(255,255,255,0.6);margin-top:0.2rem}
.ways-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2rem}
.way-card{background:white;border-radius:14px;padding:2rem;text-align:center;box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:all 0.3s}
.way-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,0.1)}
.way-card .icon{font-size:2.5rem;margin-bottom:0.8rem}
.way-card h4{font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep);margin-bottom:0.4rem}
.way-card p{font-size:0.85rem;color:var(--text-muted);line-height:1.5}
@media(max-width:968px){.action-hero-cards{grid-template-columns:1fr}.org-month-banner{grid-template-columns:1fr}.impact-banner{grid-template-columns:repeat(2,1fr)}.ways-grid{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto}}
@media(max-width:600px){.impact-banner{grid-template-columns:1fr}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Take Action</p><h1>Your Actions <em>Matter</em></h1><p>Every donation, every volunteer hour, every share — it all adds up to real change for the natural world.</p></div>

<section class="section"><div class="container">
<div class="action-intro">
    <p>ProjectNEMO isn't just about raising awareness — it's about turning knowledge into action. Here's how you can be part of the solution.</p>
</div>

<div class="action-hero-cards">
    <a href="/donate" class="action-card">
        <div class="action-card-icon" style="background:linear-gradient(135deg,var(--forest-deep),#2d5a3f);">&#128154;</div>
        <div class="action-card-body">
            <h3>Donate</h3>
            <p>100% of your donation goes directly to conservation organizations. We take zero administrative fees. Choose from our vetted partner organizations or support our featured Organization of the Month.</p>
            <span class="action-card-link">Make a Donation &rarr;</span>
        </div>
    </a>
    <a href="/transparency" class="action-card">
        <div class="action-card-icon" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128200;</div>
        <div class="action-card-body">
            <h3>Transparency Report</h3>
            <p>We believe in full accountability. See exactly where every dollar goes — with breakdowns by organization, progress bars, and quarterly reports you can download.</p>
            <span class="action-card-link">View Transparency Report &rarr;</span>
        </div>
    </a>
    <a href="/volunteer" class="action-card">
        <div class="action-card-icon" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129309;</div>
        <div class="action-card-body">
            <h3>Vetted Organizations</h3>
            <p>Not all "ethical" organizations are truly ethical. We've done the research so you don't have to. Browse our list of vetted, trustworthy conservation organizations.</p>
            <span class="action-card-link">View Organizations &rarr;</span>
        </div>
    </a>
    <a href="/contact" class="action-card">
        <div class="action-card-icon" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#128172;</div>
        <div class="action-card-body">
            <h3>Get in Touch</h3>
            <p>Have a story tip? Want to collaborate or partner? Just have a question? We'd love to hear from you. Reach out anytime.</p>
            <span class="action-card-link">Contact Us &rarr;</span>
        </div>
    </a>
</div>
</div></section>

<!-- ORG OF THE MONTH SPOTLIGHT -->
<section class="section section-alt"><div class="container">
<div class="org-month-banner">
    <div class="org-month-banner-img">&#128054;</div>
    <div class="org-month-banner-text">
        <span class="tag">Organization of the Month</span>
        <h3>Rescue Dogs for Wildlife</h3>
        <p>Based in Monde Village, Zimbabwe, this organization rescues abused and stray dogs and trains them as anti-poaching tracking dogs. They protect wildlife while giving dogs a second chance at life.</p>
        <a href="/donate" class="btn-primary">Donate to This Month's Org &rarr;</a>
    </div>
</div>
</div></section>

<!-- IMPACT NUMBERS -->
<section class="section section-dark"><div class="container" style="text-align:center;">
<p class="section-label" style="color:var(--amber);">Our Collective Impact</p>
<h2 class="section-title">Together, We're Making a Difference</h2>
<p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);">These numbers grow every day thanks to people like you.</p>
<div class="impact-banner">
    <div class="impact-stat"><div class="num">$0</div><p>Total Raised</p></div>
    <div class="impact-stat"><div class="num">0</div><p>Organizations Funded</p></div>
    <div class="impact-stat"><div class="num">0</div><p>Volunteers</p></div>
    <div class="impact-stat"><div class="num">0</div><p>Countries Reached</p></div>
</div>
</div></section>

<!-- OTHER WAYS TO HELP -->
<section class="section"><div class="container">
<div style="text-align:center;margin-bottom:1rem;">
    <p class="section-label">Every Bit Helps</p>
    <h2 class="section-title" style="text-align:center;">Other Ways to Support</h2>
</div>
<div class="ways-grid">
    <div class="way-card"><div class="icon">&#128226;</div><h4>Spread the Word</h4><p>Share our articles and videos on social media. Awareness is the first step to action.</p></div>
    <div class="way-card"><div class="icon">&#128231;</div><h4>Join the Newsletter</h4><p>Stay informed with monthly updates on conservation news, stories, and ways to help.</p></div>
    <div class="way-card"><div class="icon">&#127891;</div><h4>Educate Others</h4><p>Use our resources in classrooms, presentations, and community groups to spread knowledge.</p></div>
</div>
</div></section>
@endsection
