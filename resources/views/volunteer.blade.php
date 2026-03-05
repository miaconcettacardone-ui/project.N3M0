@extends('layouts.app')
@section('title', 'Vetted Organizations — ProjectNEMO')
@section('extra-styles')
.vet-intro{max-width:750px;margin:0 auto 3rem;text-align:center}
.vet-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.vet-process{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin:2rem 0 3rem}
.vet-step{text-align:center;padding:1.5rem 1rem;background:white;border-radius:14px;box-shadow:0 3px 15px rgba(0,0,0,0.05)}
.vet-step-num{width:40px;height:40px;border-radius:50%;background:var(--amber);color:var(--forest-deep);display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:900;margin:0 auto 0.8rem}
.vet-step h4{font-size:0.95rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.3rem}
.vet-step p{font-size:0.8rem;color:var(--text-muted);line-height:1.5}
.trust-badge{display:inline-flex;align-items:center;gap:0.4rem;padding:0.3rem 0.8rem;border-radius:50px;font-size:0.65rem;font-weight:700;letter-spacing:1px;text-transform:uppercase}
.trust-badge.verified{background:#ecfdf5;color:#047857}
.trust-badge.top{background:#fefce8;color:#a16207}
.trust-badge.new{background:#eff6ff;color:#1d4ed8}
.org-list{display:flex;flex-direction:column;gap:1.5rem}
.org-list-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);display:grid;grid-template-columns:160px 1fr auto;align-items:center;transition:all 0.3s}
.org-list-card:hover{box-shadow:0 10px 30px rgba(0,0,0,0.1);transform:translateY(-3px)}
.org-list-img{height:100%;min-height:160px;display:flex;align-items:center;justify-content:center;font-size:3rem}
.org-list-body{padding:1.5rem}
.org-list-body h3{font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:0.3rem}
.org-list-body .org-location{font-size:0.8rem;color:var(--sage);font-weight:600;margin-bottom:0.5rem}
.org-list-body p{font-size:0.9rem;color:var(--text-muted);line-height:1.6}
.org-list-body .org-tags{display:flex;gap:0.4rem;margin-top:0.6rem;flex-wrap:wrap}
.org-list-body .org-tag{font-size:0.65rem;font-weight:600;padding:0.2rem 0.6rem;border-radius:4px;background:var(--sand-light);color:var(--text-muted)}
.org-list-actions{padding:1.5rem;display:flex;flex-direction:column;gap:0.6rem;align-items:center}
.org-list-actions .btn-primary{font-size:0.8rem;padding:0.6rem 1.5rem;white-space:nowrap}
.org-list-actions a.website-link{font-size:0.8rem;color:var(--sage);text-decoration:none;font-weight:600}
.org-list-actions a.website-link:hover{color:var(--amber)}
.why-box{background:var(--forest);border-radius:16px;padding:2.5rem;margin-top:3rem}
.why-box h3{font-family:'Playfair Display',serif;font-size:1.5rem;color:white;margin-bottom:1rem}
.why-box p{font-size:0.95rem;color:rgba(255,255,255,0.7);line-height:1.7;margin-bottom:0.8rem}
.why-box .highlight{color:var(--amber);font-weight:700}
.suggest-box{background:white;border-radius:16px;padding:2.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);max-width:600px;margin:3rem auto 0;text-align:center}
.suggest-box h3{font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--forest-deep);margin-bottom:0.5rem}
.suggest-box p{font-size:0.9rem;color:var(--text-muted);line-height:1.6;margin-bottom:1.2rem}
@media(max-width:968px){.vet-process{grid-template-columns:repeat(2,1fr)}.org-list-card{grid-template-columns:1fr}.org-list-img{height:140px}.org-list-actions{flex-direction:row;padding:0 1.5rem 1.5rem}}
@media(max-width:600px){.vet-process{grid-template-columns:1fr}.org-list-actions{flex-direction:column}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Vetted Organizations</p><h1>Truly <em>Ethical</em> Organizations</h1><p>Not every "ethical" organization is what it seems. We've done the research so you can give with confidence.</p></div>

<section class="section"><div class="container">
<div class="vet-intro">
    <p>A lot of organizations claim to be ethical and transparent, but the reality is many take a huge percentage of donations for administrative costs. We've personally researched, visited, and vetted these organizations to make sure your support actually reaches the animals and ecosystems that need it.</p>
</div>

<!-- VETTING PROCESS -->
<div style="text-align:center;margin-bottom:1rem;">
    <p class="section-label">Our Process</p>
    <h2 class="section-title" style="text-align:center">How We Vet Organizations</h2>
</div>
<div class="vet-process">
    <div class="vet-step"><div class="vet-step-num">1</div><h4>Research</h4><p>We investigate their financials, leadership, and track record thoroughly.</p></div>
    <div class="vet-step"><div class="vet-step-num">2</div><h4>Verify</h4><p>We confirm their claims through independent sources and on-the-ground contacts.</p></div>
    <div class="vet-step"><div class="vet-step-num">3</div><h4>Visit</h4><p>When possible, we visit in person to see their operations firsthand.</p></div>
    <div class="vet-step"><div class="vet-step-num">4</div><h4>Monitor</h4><p>We continuously monitor and re-evaluate to ensure standards are maintained.</p></div>
</div>

<!-- ORGANIZATION LIST -->
<div style="margin-bottom:1.5rem;">
    <p class="section-label">Our Vetted Partners</p>
    <h2 class="section-title">Organizations We Trust</h2>
</div>

<div class="org-list">
    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#128054;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span><span class="trust-badge top">Org of the Month</span></div>
            <h3>Rescue Dogs for Wildlife</h3>
            <p class="org-location">&#128205; Monde Village, Zimbabwe</p>
            <p>Rescues abused and stray dogs and trains them as anti-poaching tracking dogs. They protect wildlife while giving dogs a second chance at life.</p>
            <div class="org-tags"><span class="org-tag">Anti-Poaching</span><span class="org-tag">Animal Rescue</span><span class="org-tag">Africa</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>

    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#1a3c2a,#2d5a3f);">&#128060;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span></div>
            <h3>World Wildlife Fund</h3>
            <p class="org-location">&#128205; Global</p>
            <p>Works in nearly 100 countries to protect wildlife and their habitats, focusing on the world's most ecologically important regions.</p>
            <div class="org-tags"><span class="org-tag">Wildlife</span><span class="org-tag">Habitat</span><span class="org-tag">Global</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>

    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128011;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span></div>
            <h3>Ocean Conservancy</h3>
            <p class="org-location">&#128205; Global</p>
            <p>Champions science-based solutions for a healthy ocean and the wildlife and communities that depend on it.</p>
            <div class="org-tags"><span class="org-tag">Ocean</span><span class="org-tag">Marine Life</span><span class="org-tag">Cleanup</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>

    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#127795;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span></div>
            <h3>Rainforest Alliance</h3>
            <p class="org-location">&#128205; Global</p>
            <p>Working at the intersection of business, agriculture, and forests to create a better future for people and nature.</p>
            <div class="org-tags"><span class="org-tag">Rainforest</span><span class="org-tag">Agriculture</span><span class="org-tag">Sustainability</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>

    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129409;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span></div>
            <h3>Wildlife Conservation Society</h3>
            <p class="org-location">&#128205; Global</p>
            <p>Saving wildlife and wild places through science, conservation action, education, and inspiring people to value nature.</p>
            <div class="org-tags"><span class="org-tag">Wildlife</span><span class="org-tag">Science</span><span class="org-tag">Education</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>

    <div class="org-list-card">
        <div class="org-list-img" style="background:linear-gradient(135deg,#0c2d3f,#2a6a8a);">&#129680;</div>
        <div class="org-list-body">
            <div style="display:flex;gap:0.5rem;margin-bottom:0.5rem;"><span class="trust-badge verified">&#10003; Verified</span></div>
            <h3>Coral Reef Alliance</h3>
            <p class="org-location">&#128205; Global</p>
            <p>Uniting communities to save coral reefs by reducing direct threats and helping reefs adapt to climate change.</p>
            <div class="org-tags"><span class="org-tag">Coral</span><span class="org-tag">Marine</span><span class="org-tag">Community</span></div>
        </div>
        <div class="org-list-actions"><a href="/donate" class="btn-primary">Donate via NEMO &rarr;</a><a href="#" class="website-link">Visit Website &rarr;</a></div>
    </div>
</div>

<!-- WHY THIS MATTERS -->
<div class="why-box">
    <h3>Why Does Vetting Matter?</h3>
    <p>Many well-known NGOs spend <span class="highlight">40-60% of donations on administrative costs</span>, executive salaries, and marketing. That means less than half of your dollar actually reaches the cause you're trying to support.</p>
    <p>At ProjectNEMO, we believe <span class="highlight">100% of your donation</span> should go to conservation. That's why we only partner with organizations we've thoroughly vetted. <a href="/transparency" style="color:var(--amber);">See our transparency report</a> for proof.</p>
</div>

<!-- SUGGEST AN ORG -->
<div class="suggest-box">
    <h3>Know an Ethical Organization?</h3>
    <p>If you know of a conservation organization that deserves to be on this list, let us know! We'll run it through our vetting process.</p>
    <a href="/contact" class="btn-primary">Suggest an Organization</a>
</div>

</div></section>
@endsection
