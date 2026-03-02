@extends('layouts.app')
@section('title', 'ProjectNEMO — Defending the Natural World Through Knowledge')
@section('nav-class', 'transparent')
@section('extra-styles')
.hero { position:relative;height:100vh;min-height:700px;display:flex;align-items:center;justify-content:center;text-align:center;overflow:hidden; }
.hero-bg { position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,37,24,0.7) 0%,rgba(15,37,24,0.4) 40%,rgba(15,37,24,0.8) 100%),linear-gradient(135deg,var(--forest-deep) 0%,var(--forest) 30%,#2d5a3f 60%,var(--forest-deep) 100%);z-index:1; }
.hero-particles { position:absolute;inset:0;z-index:2;overflow:hidden; }
.particle { position:absolute;width:3px;height:3px;background:rgba(168,196,158,0.4);border-radius:50%;animation:float-up linear infinite; }
@keyframes float-up { 0%{transform:translateY(100vh) scale(0);opacity:0}10%{opacity:1}90%{opacity:1}100%{transform:translateY(-10vh) scale(1);opacity:0} }
.hero-content { position:relative;z-index:3;max-width:850px;padding:0 2rem; }
.hero-tagline { font-size:0.9rem;font-weight:600;letter-spacing:4px;text-transform:uppercase;color:var(--amber);margin-bottom:1.5rem;opacity:0;animation:fadeInUp 1s ease 0.3s forwards; }
.hero-title { font-family:'Playfair Display',serif;font-size:5rem;font-weight:900;color:white;line-height:1.1;margin-bottom:1.5rem;opacity:0;animation:fadeInUp 1s ease 0.5s forwards; }
.hero-title em { font-style:italic;color:var(--sage-light); }
.hero-subtitle { font-size:1.25rem;color:rgba(255,255,255,0.8);line-height:1.7;font-weight:300;max-width:600px;margin:0 auto 2.5rem;opacity:0;animation:fadeInUp 1s ease 0.7s forwards; }
.hero-buttons { display:flex;gap:1.2rem;justify-content:center;opacity:0;animation:fadeInUp 1s ease 0.9s forwards; }
.btn-outline { display:inline-block;padding:1rem 2.5rem;border:2px solid rgba(255,255,255,0.4);color:white;text-decoration:none;font-weight:600;font-size:1rem;letter-spacing:1px;border-radius:50px;transition:all 0.3s; }
.btn-outline:hover { border-color:white;background:rgba(255,255,255,0.1);transform:translateY(-3px); }
.scroll-indicator { position:absolute;bottom:2rem;left:50%;transform:translateX(-50%);z-index:3;animation:bounce 2s ease infinite; }
.scroll-indicator svg { width:30px;height:30px;stroke:rgba(255,255,255,0.5); }
@keyframes bounce { 0%,100%{transform:translateX(-50%) translateY(0)}50%{transform:translateX(-50%) translateY(10px)} }
@keyframes fadeInUp { from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)} }
.mission-inner { display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center; }
.mission-visual { height:500px;border-radius:20px;overflow:hidden; }
.mission-visual-bg { width:100%;height:100%;background:linear-gradient(145deg,var(--forest),var(--sage));border-radius:20px;display:flex;align-items:center;justify-content:center;position:relative; }
.mission-icon { font-size:8rem;opacity:0.3; }
.mission-visual-overlay { position:absolute;bottom:0;left:0;right:0;padding:2rem;background:linear-gradient(transparent,rgba(15,37,24,0.9));color:white; }
.mission-visual-overlay p { font-family:'Playfair Display',serif;font-size:1.3rem;font-style:italic;line-height:1.6; }
.mission-stats { display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2.5rem; }
.stat-item { text-align:center;padding:1.5rem 1rem;background:white;border-radius:12px;box-shadow:0 2px 15px rgba(0,0,0,0.05); }
.stat-number { font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:var(--forest); }
.stat-label { font-size:0.8rem;font-weight:600;color:var(--text-muted);letter-spacing:1px;text-transform:uppercase;margin-top:0.3rem; }
.donate-cta { position:relative;overflow:hidden; }
.donate-bg-pattern { position:absolute;inset:0;opacity:0.05;background-image:radial-gradient(circle at 20% 50%,var(--sage) 1px,transparent 1px),radial-gradient(circle at 80% 20%,var(--sage) 1px,transparent 1px);background-size:60px 60px,80px 80px; }
.donate-inner { position:relative;max-width:900px;margin:0 auto;text-align:center; }
.donate-title { font-family:'Playfair Display',serif;font-size:3rem;font-weight:900;color:white;margin-bottom:1.2rem; }
.donate-title em { color:var(--amber);font-style:italic; }
.donate-text { font-size:1.15rem;color:rgba(255,255,255,0.7);line-height:1.8;max-width:650px;margin:0 auto 2.5rem; }
.donate-buttons { display:flex;gap:1rem;justify-content:center;flex-wrap:wrap; }
.donate-org-btn { display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 2rem;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);color:white;text-decoration:none;font-weight:600;font-size:0.95rem;border-radius:50px;transition:all 0.3s; }
.donate-org-btn:hover { background:var(--amber);border-color:var(--amber);color:var(--forest-deep);transform:translateY(-2px); }
@media(max-width:968px){ .hero-title{font-size:3.5rem} .mission-inner{grid-template-columns:1fr;gap:3rem} .mission-visual{height:350px} }
@media(max-width:600px){ .hero-title{font-size:2.5rem} .hero-subtitle{font-size:1rem} .hero-buttons{flex-direction:column;align-items:center} .donate-title{font-size:2rem} .mission-stats{grid-template-columns:1fr} }
@endsection
@section('content')
<section class="hero"><div class="hero-bg"></div><div class="hero-particles" id="particles"></div><div class="hero-content"><p class="hero-tagline">Educate &bull; Conserve &bull; Protect</p><h1 class="hero-title">Defending the <em>Natural World</em> Through Knowledge</h1><p class="hero-subtitle">Raising global awareness about wildlife conservation, environmental issues, and veterinary medicine through education, storytelling, and action.</p><div class="hero-buttons"><a href="/articles" class="btn-primary" style="padding:1rem 2.5rem;font-size:1rem;">Explore Our Work</a><a href="/about" class="btn-outline">Our Mission</a></div></div><div class="scroll-indicator"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></div></section>
<section class="section"><div class="container"><div class="mission-inner"><div><p class="section-label">Our Mission</p><h2 class="section-title">Nurturing Earth's Most Outstanding Ecosystems</h2><p class="section-subtitle">ProjectNEMO exists to bridge the gap between scientific knowledge and public awareness. Through compelling educational content, investigative reporting, and community engagement, we illuminate the most pressing environmental and wildlife issues of our time.</p><div class="mission-stats"><div class="stat-item"><div class="stat-number">50+</div><div class="stat-label">Articles</div></div><div class="stat-item"><div class="stat-number">12</div><div class="stat-label">Partners</div></div><div class="stat-item"><div class="stat-number">10K+</div><div class="stat-label">Readers</div></div></div></div><div class="mission-visual"><div class="mission-visual-bg"><div class="mission-icon">&#127758;</div><div class="mission-visual-overlay"><p>"The greatness of a nation and its moral progress can be judged by the way its animals are treated."</p></div></div></div></div></div></section>
<section class="section section-alt"><div class="container"><div style="text-align:center;max-width:700px;margin:0 auto 3rem;"><p class="section-label">Featured Articles</p><h2 class="section-title" style="text-align:center">Stories That Matter</h2><p class="section-subtitle" style="margin:0 auto">Dive into our latest research, investigations, and educational pieces.</p></div><div class="grid-3"><a href="/articles" class="card"><div class="card-img ocean"><span>&#127754;</span><span class="card-category">Ocean</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>The Silent Crisis Beneath Our Waves</h3><p>Exploring the devastating impact of microplastics on marine ecosystems.</p><span class="card-link">Read More &rarr;</span></div></a><a href="/articles" class="card"><div class="card-img wildlife"><span>&#129421;</span><span class="card-category">Wildlife</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Vanishing Habitats: A Global Emergency</h3><p>How deforestation and urban sprawl are pushing species to the brink.</p><span class="card-link">Read More &rarr;</span></div></a><a href="/articles" class="card"><div class="card-img climate"><span>&#127777;&#65039;</span><span class="card-category">Climate</span></div><div class="card-body"><p class="card-date">Coming Soon</p><h3>Sustainability Starts at Home</h3><p>Practical steps every individual can take to reduce their footprint.</p><span class="card-link">Read More &rarr;</span></div></a></div></div></section>
<section class="section section-dark donate-cta"><div class="donate-bg-pattern"></div><div class="donate-inner"><div style="font-size:3rem;margin-bottom:1.5rem;">&#128154;</div><h2 class="donate-title">Help Us Protect What <em>Matters</em></h2><p class="donate-text">Every contribution makes a difference. Support the organizations on the frontlines of wildlife conservation and environmental research.</p><div class="donate-buttons"><a href="/donate" class="donate-org-btn">&#127758; World Wildlife Fund</a><a href="/donate" class="donate-org-btn">&#127795; Rainforest Alliance</a><a href="/donate" class="donate-org-btn">&#128011; Ocean Conservancy</a></div></div></section>
@endsection
@section('scripts')
<script>const p=document.getElementById('particles');for(let i=0;i<30;i++){const d=document.createElement('div');d.className='particle';d.style.left=Math.random()*100+'%';d.style.animationDuration=(Math.random()*8+6)+'s';d.style.animationDelay=(Math.random()*5)+'s';d.style.width=(Math.random()*4+2)+'px';d.style.height=d.style.width;p.appendChild(d);}</script>
@endsection
