@extends('layouts.app')
@section('title', 'Discovery Log — ProjectNEMO')
@section('extra-styles')
.discovery-intro{max-width:700px;margin:0 auto 3rem;text-align:center}
.discovery-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.newest-discovery{display:grid;grid-template-columns:1.2fr 1fr;gap:3rem;align-items:start;margin-bottom:4rem}
.newest-badge{display:inline-block;background:var(--amber);color:var(--forest-deep);padding:0.3rem 1rem;border-radius:50px;font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem}
.newest-discovery h3{font-family:'Playfair Display',serif;font-size:2rem;color:var(--forest-deep);line-height:1.25;margin-bottom:0.8rem}
.newest-discovery .meta{font-size:0.85rem;color:var(--sage);font-weight:600;margin-bottom:1rem}
.newest-discovery p{font-size:1rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem}
.newest-images{display:grid;grid-template-columns:1fr 1fr;gap:0.8rem}
.newest-img{border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:2.5rem;min-height:160px}
.newest-img.a{background:linear-gradient(135deg,#1a3c2a,#7c9a72)}
.newest-img.b{background:linear-gradient(135deg,#1a4a5e,#3d8fa3)}
.newest-img.c{background:linear-gradient(135deg,#4a3c1a,#8a7a4a)}
.newest-img.d{background:linear-gradient(135deg,#2a4a2a,#5a8a5a)}
.read-more-link{display:inline-flex;align-items:center;gap:0.4rem;color:var(--amber);font-weight:700;font-size:0.9rem;text-decoration:none;margin-top:0.5rem}
.read-more-link:hover{text-decoration:underline}
.prev-discoveries-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:2rem}
.prev-discoveries-header h2{font-family:'Playfair Display',serif;font-size:2rem;color:var(--forest-deep)}
.prev-nav{display:flex;gap:0.5rem}
.prev-nav button{width:40px;height:40px;border-radius:50%;border:2px solid var(--forest);background:transparent;color:var(--forest);font-size:1.2rem;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s;font-family:'Source Sans 3',sans-serif}
.prev-nav button:hover{background:var(--forest);color:white}
.prev-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem}
.prev-card{background:white;border-radius:14px;overflow:hidden;box-shadow:0 4px 15px rgba(0,0,0,0.06);transition:all 0.35s;text-decoration:none;color:inherit;display:block}
.prev-card:hover{transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1)}
.prev-card-img{height:160px;display:flex;align-items:center;justify-content:center;font-size:3rem;position:relative}
.prev-card-img .date-badge{position:absolute;bottom:0.8rem;left:0.8rem;background:rgba(0,0,0,0.6);color:white;padding:0.2rem 0.6rem;border-radius:6px;font-size:0.65rem;font-weight:600}
.prev-card-body{padding:1.2rem}
.prev-card-body h4{font-family:'Playfair Display',serif;font-size:1rem;color:var(--forest-deep);line-height:1.3;margin-bottom:0.3rem}
.prev-card-body p{font-size:0.8rem;color:var(--text-muted);line-height:1.5}
.prev-card-body .location{font-size:0.7rem;color:var(--sage);font-weight:600;margin-top:0.4rem}
.timeline-section{position:relative}
.timeline-line{position:absolute;left:50%;top:0;bottom:0;width:2px;background:var(--sand);transform:translateX(-50%)}
.timeline-item{display:grid;grid-template-columns:1fr 1fr;gap:3rem;margin-bottom:3rem;position:relative}
.timeline-item:nth-child(even) .timeline-content{grid-column:2}
.timeline-item:nth-child(even) .timeline-img{grid-column:1;grid-row:1}
.timeline-dot{position:absolute;left:50%;top:1.5rem;width:16px;height:16px;background:var(--amber);border:3px solid var(--cream);border-radius:50%;transform:translateX(-50%);z-index:2}
.timeline-content h4{font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--forest-deep);margin-bottom:0.3rem}
.timeline-content .date{font-size:0.8rem;color:var(--sage);font-weight:600;margin-bottom:0.6rem}
.timeline-content p{font-size:0.92rem;color:var(--text-muted);line-height:1.7}
.timeline-img{height:200px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:3rem}
@media(max-width:968px){.newest-discovery{grid-template-columns:1fr}.prev-grid{grid-template-columns:repeat(2,1fr)}.timeline-line{display:none}.timeline-item{grid-template-columns:1fr;gap:1.5rem}.timeline-item:nth-child(even) .timeline-content{grid-column:1}.timeline-item:nth-child(even) .timeline-img{grid-column:1;grid-row:auto}.timeline-dot{display:none}}
@media(max-width:600px){.prev-grid{grid-template-columns:1fr;max-width:400px;margin:0 auto}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Discovery Log</p><h1>My Journey Through the <em>Natural World</em></h1><p>A personal journal of the animals, ecosystems, cultures, and discoveries I've encountered around the globe.</p></div>

<!-- NEWEST DISCOVERY -->
<section class="section"><div class="container">
<div class="discovery-intro">
    <p>Every place I visit teaches me something new about our planet. This log documents my discoveries — from the wildlife I've encountered to the ecosystems I've explored and the communities working to protect them.</p>
</div>

<div class="newest-badge">Newest Discovery</div>
<div class="newest-discovery">
    <div>
        <h3>Placeholder: Your Latest Discovery Title Goes Here</h3>
        <p class="meta">&#128205; Location &bull; Month 2026</p>
        <p>This is where you'll write about your most recent discovery. What did you find? What did you learn? What was the experience like? Replace this with your real story.</p>
        <p>Talk about the wildlife, the ecosystem, the people you met, the conservation efforts you witnessed. Make it personal and vivid — this is YOUR journal.</p>
        <a href="#" class="read-more-link">Read Full Entry &rarr;</a>
    </div>
    <div class="newest-images">
        <div class="newest-img a">&#127758;</div>
        <div class="newest-img b">&#128011;</div>
        <div class="newest-img c">&#129421;</div>
        <div class="newest-img d">&#127795;</div>
    </div>
</div>
</div></section>

<!-- PREVIOUS DISCOVERIES -->
<section class="section section-alt"><div class="container">
<div class="prev-discoveries-header">
    <div>
        <p class="section-label">Previous Entries</p>
        <h2>Previous Discoveries</h2>
    </div>
    <div class="prev-nav">
        <button>&#8249;</button>
        <button>&#8250;</button>
    </div>
</div>
<div class="prev-grid">
    <a href="#" class="prev-card">
        <div class="prev-card-img" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127795;<span class="date-badge">Feb 2026</span></div>
        <div class="prev-card-body"><h4>Placeholder Discovery</h4><p>Short description of what you discovered and where.</p><span class="location">&#128205; Location</span></div>
    </a>
    <a href="#" class="prev-card">
        <div class="prev-card-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128011;<span class="date-badge">Jan 2026</span></div>
        <div class="prev-card-body"><h4>Placeholder Discovery</h4><p>Short description of what you discovered and where.</p><span class="location">&#128205; Location</span></div>
    </a>
    <a href="#" class="prev-card">
        <div class="prev-card-img" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129409;<span class="date-badge">Dec 2025</span></div>
        <div class="prev-card-body"><h4>Placeholder Discovery</h4><p>Short description of what you discovered and where.</p><span class="location">&#128205; Location</span></div>
    </a>
    <a href="#" class="prev-card">
        <div class="prev-card-img" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#128038;<span class="date-badge">Nov 2025</span></div>
        <div class="prev-card-body"><h4>Placeholder Discovery</h4><p>Short description of what you discovered and where.</p><span class="location">&#128205; Location</span></div>
    </a>
</div>
</div></section>

<!-- DISCOVERY TIMELINE -->
<section class="section"><div class="container">
<div style="text-align:center;margin-bottom:3rem;">
    <p class="section-label">My Journey</p>
    <h2 class="section-title" style="text-align:center">Discovery Timeline</h2>
    <p class="section-subtitle" style="margin:0 auto;text-align:center;">A chronological look at my adventures and what I've learned along the way.</p>
</div>
<div class="timeline-section">
    <div class="timeline-line"></div>
    <div class="timeline-item">
        <div class="timeline-content">
            <h4>Placeholder Entry</h4>
            <p class="date">&#128205; Location &bull; Month 2026</p>
            <p>Describe your experience here. What did you see? What did you learn? How did it change your perspective on conservation?</p>
        </div>
        <div class="timeline-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128011;</div>
        <div class="timeline-dot"></div>
    </div>
    <div class="timeline-item">
        <div class="timeline-content">
            <h4>Placeholder Entry</h4>
            <p class="date">&#128205; Location &bull; Month 2025</p>
            <p>Another discovery entry. Talk about the animals, plants, ecosystems, or communities you encountered during this trip.</p>
        </div>
        <div class="timeline-img" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127795;</div>
        <div class="timeline-dot"></div>
    </div>
    <div class="timeline-item">
        <div class="timeline-content">
            <h4>Placeholder Entry</h4>
            <p class="date">&#128205; Location &bull; Month 2025</p>
            <p>Share what inspired you, what challenged you, and what you want others to know about this place and its wildlife.</p>
        </div>
        <div class="timeline-img" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129421;</div>
        <div class="timeline-dot"></div>
    </div>
</div>
</div></section>
@endsection
