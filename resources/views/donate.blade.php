@extends('layouts.app')
@section('title', 'Donate — ProjectNEMO')
@section('extra-styles')
.donate-hero-icon{font-size:4rem;margin-bottom:1rem;position:relative}
.org-month{background:white;border-radius:20px;overflow:hidden;box-shadow:0 8px 30px rgba(0,0,0,0.08);margin-bottom:4rem}
.org-month-header{background:var(--forest);padding:1rem 2rem;text-align:center}
.org-month-header p{font-size:0.75rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:var(--amber);margin-bottom:0.2rem}
.org-month-header h3{font-family:'Playfair Display',serif;font-size:1.5rem;color:white;font-weight:900}
.org-month-body{display:grid;grid-template-columns:1fr 1.5fr;gap:2rem;padding:2rem}
.org-month-img{border-radius:14px;background:linear-gradient(135deg,var(--forest-deep),var(--sage));display:flex;align-items:center;justify-content:center;font-size:5rem;min-height:250px}
.org-month-info h4{font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--forest-deep);margin-bottom:0.8rem}
.org-month-info p{font-size:0.95rem;color:var(--text-muted);line-height:1.7;margin-bottom:1rem}
.org-month-link{color:var(--amber);font-weight:700;text-decoration:underline}
.donate-amounts{display:flex;flex-direction:column;align-items:center;margin-top:1.5rem}
.donate-type-toggle{display:flex;gap:0.5rem;margin-bottom:1.2rem}
.donate-type-btn{padding:0.6rem 1.8rem;border-radius:50px;border:2px solid var(--forest);background:transparent;color:var(--forest);font-weight:700;font-size:0.85rem;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s}
.donate-type-btn.active{background:var(--forest);color:white}
.amount-grid{display:flex;gap:0.6rem;flex-wrap:wrap;justify-content:center;margin-bottom:1rem}
.amount-btn{width:70px;height:48px;border-radius:10px;border:2px solid #e0e0e0;background:white;font-size:1rem;font-weight:700;color:var(--forest-deep);cursor:pointer;transition:all 0.2s;font-family:'Source Sans 3',sans-serif;display:flex;align-items:center;justify-content:center}
.amount-btn:hover,.amount-btn.selected{border-color:var(--amber);background:var(--amber);color:var(--forest-deep)}
.amount-custom{padding:0.6rem 1rem;border:2px solid #e0e0e0;border-radius:10px;font-size:0.95rem;width:140px;text-align:center;font-family:'Source Sans 3',sans-serif}
.amount-custom:focus{outline:none;border-color:var(--amber)}
.org-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:2rem}
.org-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s}
.org-card:hover{transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1)}
.org-card-header{height:120px;display:flex;align-items:center;justify-content:center;font-size:3rem;position:relative}
.org-card-header.wwf{background:linear-gradient(135deg,#1a3c2a,#2d5a3f)}
.org-card-header.rainforest{background:linear-gradient(135deg,#2a4a2a,#5a8a5a)}
.org-card-header.ocean-c{background:linear-gradient(135deg,#1a4a5e,#3d8fa3)}
.org-card-header.wcs{background:linear-gradient(135deg,#4a3c1a,#8a7a4a)}
.org-card-header.ifaw{background:linear-gradient(135deg,#3c1a2a,#7a4a5a)}
.org-card-header.coral{background:linear-gradient(135deg,#0c2d3f,#2a6a8a)}
.org-card-body{padding:1.5rem}
.org-card-body h3{font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:0.4rem}
.org-card-body p{font-size:0.88rem;color:var(--text-muted);line-height:1.6;margin-bottom:1rem}
.org-card-body .btn-primary{font-size:0.8rem;padding:0.6rem 1.5rem}
.impact-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:2.5rem}
.impact-item{text-align:center;padding:2rem 1rem;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:14px}
.impact-item .icon{font-size:2.5rem;margin-bottom:0.8rem}
.impact-item h4{font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--amber);margin-bottom:0.3rem}
.impact-item p{font-size:0.85rem;color:rgba(255,255,255,0.6)}
@media(max-width:968px){.org-month-body{grid-template-columns:1fr}.org-grid{grid-template-columns:1fr}.impact-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.impact-grid{grid-template-columns:1fr}.amount-grid{gap:0.4rem}}
@endsection
@section('content')
<div class="page-hero"><div class="donate-hero-icon">&#128154;</div><p class="page-hero-label">Make a Difference</p><h1>Donate Through <em>ProjectNEMO</em></h1><p>All donations go through us to ensure 100% reaches the organizations doing the work. No hidden fees, no overhead. <a href="/transparency" style="color:var(--amber);text-decoration:underline;">See our transparency report &rarr;</a></p></div>

<!-- ORGANIZATION OF THE MONTH -->
<section class="section"><div class="container">
<div class="org-month">
    <div class="org-month-header">
        <p>Organization of the Month</p>
        <h3>Rescue Dogs for Wildlife</h3>
    </div>
    <div class="org-month-body">
        <div class="org-month-img">&#128054;</div>
        <div class="org-month-info">
            <h4>Rescue Dogs for Wildlife</h4>
            <p>Rescue Dogs for Wildlife is an organization based in Monde Village, Zimbabwe. Their mission is to rescue abused, neglected, and stray dogs, giving them a new purpose in life. These dogs are trained as tracking and medical alert dogs, helping protect wildlife by tracking poachers, finding snares, and saving endangered animals.</p>
            <p>Their next goal is to build an indoor, air-conditioned training facility so the dogs can train safely during the deadly dry-season heat. Donating helps care for the dogs, supports anti-poaching efforts, and funds this vital new facility.</p>
            <a href="#" class="org-month-link">Check out their website &rarr;</a>

            <div class="donate-amounts">
                <div class="donate-type-toggle">
                    <button class="donate-type-btn active">One-Time</button>
                    <button class="donate-type-btn">Monthly</button>
                </div>
                <div class="amount-grid">
                    <button class="amount-btn">$1</button>
                    <button class="amount-btn">$5</button>
                    <button class="amount-btn selected">$10</button>
                    <button class="amount-btn">$15</button>
                    <button class="amount-btn">$25</button>
                </div>
                <input type="text" class="amount-custom" placeholder="Custom: $">
                <div style="margin-top:1rem;"><a href="#" class="btn-primary">Donate Now &rarr;</a></div>
            </div>
        </div>
    </div>
</div>

<!-- ALL ORGANIZATIONS -->
<div style="text-align:center;margin-bottom:2.5rem;">
    <p class="section-label">Our Partners</p>
    <h2 class="section-title" style="text-align:center">More Organizations We Support</h2>
    <p class="section-subtitle" style="margin:0 auto;">All donations are processed through ProjectNEMO and distributed directly to these organizations. <a href="/transparency" style="color:var(--amber);">View our transparency report</a> for proof.</p>
</div>
<div class="org-grid">
    <div class="org-card"><div class="org-card-header wwf">&#128060;</div><div class="org-card-body"><h3>World Wildlife Fund</h3><p>Working in nearly 100 countries to protect wildlife and their habitats, focusing on the world's most ecologically important regions.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
    <div class="org-card"><div class="org-card-header rainforest">&#127795;</div><div class="org-card-body"><h3>Rainforest Alliance</h3><p>Working at the intersection of business, agriculture, and forests to create a better future for people and nature.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
    <div class="org-card"><div class="org-card-header ocean-c">&#128011;</div><div class="org-card-body"><h3>Ocean Conservancy</h3><p>Championing science-based solutions for a healthy ocean and the wildlife and communities that depend on it.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
    <div class="org-card"><div class="org-card-header wcs">&#129409;</div><div class="org-card-body"><h3>Wildlife Conservation Society</h3><p>Saving wildlife and wild places through science, conservation action, education, and inspiring people to value nature.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
    <div class="org-card"><div class="org-card-header ifaw">&#128062;</div><div class="org-card-body"><h3>IFAW</h3><p>International Fund for Animal Welfare rescues and protects animals around the world, from disaster response to habitat conservation.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
    <div class="org-card"><div class="org-card-header coral">&#129680;</div><div class="org-card-body"><h3>Coral Reef Alliance</h3><p>Uniting communities to save coral reefs through reducing direct threats and helping reefs adapt to climate change.</p><a href="#" class="btn-primary">Donate via NEMO Donate &rarr;rarr;</a></div></div>
</div>
</div></section>

<section class="section section-dark"><div class="container" style="text-align:center;">
<p class="section-label" style="color:var(--amber)">Why It Matters</p>
<h2 class="section-title">Your Impact in Numbers</h2>
<p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);">Every dollar donated makes a real, measurable difference.</p>
<div class="impact-grid">
    <div class="impact-item"><div class="icon">&#127795;</div><h4>1M+</h4><p>Trees planted by partner organizations</p></div>
    <div class="impact-item"><div class="icon">&#128011;</div><h4>500K</h4><p>Acres of ocean habitat protected</p></div>
    <div class="impact-item"><div class="icon">&#128062;</div><h4>10K+</h4><p>Animals rescued and rehabilitated</p></div>
    <div class="impact-item"><div class="icon">&#127758;</div><h4>100+</h4><p>Countries with active conservation projects</p></div>
</div>
</div></section>
@endsection
@section('scripts')
<script>
document.querySelectorAll('.donate-type-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.donate-type-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    });
});
document.querySelectorAll('.amount-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
    });
});
</script>
@endsection
