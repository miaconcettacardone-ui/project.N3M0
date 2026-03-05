@extends('layouts.app')
@section('title', 'Explore — ProjectNEMO')
@section('extra-styles')
.explore-intro{max-width:700px;margin:0 auto 3rem;text-align:center}
.explore-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.explore-section{margin-bottom:4rem}
.explore-section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem}
.explore-section-header h3{font-family:'Playfair Display',serif;font-size:1.6rem;color:var(--forest-deep)}
.explore-section-header a{color:var(--amber);font-weight:700;font-size:0.9rem;text-decoration:none}
.explore-section-header a:hover{text-decoration:underline}
.explore-featured{display:grid;grid-template-columns:1.5fr 1fr;gap:2rem;margin-bottom:4rem}
.featured-main{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s;text-decoration:none;color:inherit;display:block}
.featured-main:hover{transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.1)}
.featured-main-img{height:280px;display:flex;align-items:center;justify-content:center;font-size:5rem;position:relative}
.featured-main-body{padding:1.8rem}
.featured-main-body .cat{font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--amber);margin-bottom:0.5rem}
.featured-main-body h3{font-family:'Playfair Display',serif;font-size:1.6rem;color:var(--forest-deep);line-height:1.3;margin-bottom:0.6rem}
.featured-main-body p{font-size:0.95rem;color:var(--text-muted);line-height:1.6}
.featured-sidebar{display:flex;flex-direction:column;gap:1rem}
.featured-sm{background:white;border-radius:12px;padding:1.2rem;box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:all 0.3s;text-decoration:none;color:inherit;display:flex;gap:1rem;align-items:center}
.featured-sm:hover{transform:translateY(-3px);box-shadow:0 8px 25px rgba(0,0,0,0.1)}
.featured-sm-icon{width:60px;height:60px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;flex-shrink:0}
.featured-sm h4{font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--forest-deep);line-height:1.3;margin-bottom:0.2rem}
.featured-sm p{font-size:0.78rem;color:var(--text-muted)}
.featured-sm .cat{font-size:0.6rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--sage);margin-bottom:0.2rem}
.mini-grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.mini-card{background:white;border-radius:14px;overflow:hidden;box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:all 0.3s;text-decoration:none;color:inherit;display:block}
.mini-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,0.1)}
.mini-card-img{height:140px;display:flex;align-items:center;justify-content:center;font-size:2.5rem;position:relative}
.mini-card-body{padding:1.2rem}
.mini-card-body .cat{font-size:0.6rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--sage);margin-bottom:0.3rem}
.mini-card-body h4{font-family:'Playfair Display',serif;font-size:1rem;color:var(--forest-deep);line-height:1.3;margin-bottom:0.3rem}
.mini-card-body p{font-size:0.8rem;color:var(--text-muted);line-height:1.5}
.gallery-preview{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem}
.gallery-thumb{border-radius:12px;height:150px;display:flex;align-items:center;justify-content:center;font-size:2rem;position:relative;overflow:hidden;transition:all 0.3s;cursor:pointer}
.gallery-thumb:hover{transform:scale(1.03);box-shadow:0 8px 25px rgba(0,0,0,0.15)}
.gallery-thumb-overlay{position:absolute;inset:0;background:linear-gradient(transparent 50%,rgba(0,0,0,0.5));display:flex;align-items:flex-end;padding:0.6rem;color:white;font-size:0.7rem;font-weight:600}
.discovery-preview{display:grid;grid-template-columns:1fr 1fr;gap:2rem}
.discovery-card{background:white;border-radius:14px;overflow:hidden;box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:all 0.3s;text-decoration:none;color:inherit;display:block}
.discovery-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,0.1)}
.discovery-card-img{height:180px;display:flex;align-items:center;justify-content:center;font-size:3rem;position:relative}
.discovery-card-img .date-tag{position:absolute;top:0.8rem;right:0.8rem;background:rgba(0,0,0,0.6);color:white;padding:0.2rem 0.7rem;border-radius:6px;font-size:0.65rem;font-weight:600}
.discovery-card-body{padding:1.3rem}
.discovery-card-body h4{font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep);margin-bottom:0.3rem}
.discovery-card-body p{font-size:0.85rem;color:var(--text-muted);line-height:1.5}
.discovery-card-body .location{font-size:0.75rem;color:var(--sage);font-weight:600;margin-top:0.4rem}
@media(max-width:968px){.explore-featured{grid-template-columns:1fr}.mini-grid-3{grid-template-columns:1fr;max-width:400px;margin:0 auto}.gallery-preview{grid-template-columns:repeat(2,1fr)}.discovery-preview{grid-template-columns:1fr}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Explore</p><h1>Discover the <em>Natural World</em></h1><p>Articles, news, photos, videos, and discoveries — everything ProjectNEMO has to offer, all in one place.</p></div>

<!-- FEATURED / LATEST CONTENT -->
<section class="section"><div class="container">
<div class="explore-intro">
    <p>From in-depth articles to breaking news, from stunning photography to personal discovery journals — explore everything ProjectNEMO creates to educate and inspire.</p>
</div>

<div class="explore-featured">
    <a href="/articles" class="featured-main">
        <div class="featured-main-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#127754;</div>
        <div class="featured-main-body">
            <p class="cat">Featured Article</p>
            <h3>The Silent Crisis Beneath Our Waves</h3>
            <p>Exploring the devastating impact of microplastics on marine ecosystems and what we can do to turn the tide.</p>
        </div>
    </a>
    <div class="featured-sidebar">
        <a href="/news" class="featured-sm">
            <div class="featured-sm-icon" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127758;</div>
            <div><p class="cat">Latest News</p><h4>Marine Protected Area Established</h4><p>A landmark conservation victory.</p></div>
        </a>
        <a href="/discovery" class="featured-sm">
            <div class="featured-sm-icon" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#128205;</div>
            <div><p class="cat">Discovery Log</p><h4>Latest Discovery Entry</h4><p>New adventures from the field.</p></div>
        </a>
        <a href="/gallery" class="featured-sm">
            <div class="featured-sm-icon" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#128247;</div>
            <div><p class="cat">Gallery</p><h4>New Photos Added</h4><p>Stunning wildlife photography.</p></div>
        </a>
        <a href="/resources" class="featured-sm">
            <div class="featured-sm-icon" style="background:linear-gradient(135deg,#3c1a2a,#7a4a5a);">&#128218;</div>
            <div><p class="cat">Resources</p><h4>Books, Docs & More</h4><p>Curated learning materials.</p></div>
        </a>
    </div>
</div>
</div></section>

<!-- ARTICLES -->
<section class="section section-alt"><div class="container">
<div class="explore-section">
    <div class="explore-section-header"><h3>&#128221; Latest Articles</h3><a href="/articles">View All Articles &rarr;</a></div>
    <div class="mini-grid-3">
        <a href="/articles" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#127754;</div><div class="mini-card-body"><p class="cat">Ocean</p><h4>The Silent Crisis Beneath Our Waves</h4><p>Microplastics and marine ecosystems.</p></div></a>
        <a href="/articles" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129421;</div><div class="mini-card-body"><p class="cat">Wildlife</p><h4>Vanishing Habitats</h4><p>Species pushed to the brink.</p></div></a>
        <a href="/articles" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#2a4a2a,#5a8a5a);">&#127793;</div><div class="mini-card-body"><p class="cat">Sustainability</p><h4>Regenerative Agriculture</h4><p>Farming for the future.</p></div></a>
    </div>
</div>
</div></section>

<!-- NEWS -->
<section class="section"><div class="container">
<div class="explore-section">
    <div class="explore-section-header"><h3>&#128240; Latest News</h3><a href="/news">View All News &rarr;</a></div>
    <div class="mini-grid-3">
        <a href="/news" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#0F2518,#2d5a3f);">&#127758;</div><div class="mini-card-body"><p class="cat">Breaking</p><h4>New Marine Protected Area</h4><p>Landmark conservation decision.</p></div></a>
        <a href="/news" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127795;</div><div class="mini-card-body"><p class="cat">Policy</p><h4>Rainforest Protection Funding</h4><p>Global leaders increase pledges.</p></div></a>
        <a href="/news" class="mini-card"><div class="mini-card-img" style="background:linear-gradient(135deg,#2a3c4a,#5a7a8a);">&#128062;</div><div class="mini-card-body"><p class="cat">Wildlife</p><h4>Species Recovery Signs</h4><p>Conservation efforts paying off.</p></div></a>
    </div>
</div>
</div></section>

<!-- GALLERY PREVIEW -->
<section class="section section-alt"><div class="container">
<div class="explore-section">
    <div class="explore-section-header"><h3>&#128247; Photos & Videos</h3><a href="/gallery">View Full Gallery &rarr;</a></div>
    <div class="gallery-preview">
        <div class="gallery-thumb" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128011;<div class="gallery-thumb-overlay">Coral Reef</div></div>
        <div class="gallery-thumb" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127795;<div class="gallery-thumb-overlay">Rainforest</div></div>
        <div class="gallery-thumb" style="background:linear-gradient(135deg,#4a3c1a,#8a7a4a);">&#129409;<div class="gallery-thumb-overlay">Wildlife</div></div>
        <div class="gallery-thumb" style="background:linear-gradient(135deg,#2a3c4a,#5a7a8a);">&#128039;<div class="gallery-thumb-overlay">Antarctic</div></div>
    </div>
</div>
</div></section>

<!-- DISCOVERY LOG PREVIEW -->
<section class="section"><div class="container">
<div class="explore-section">
    <div class="explore-section-header"><h3>&#128205; Discovery Log</h3><a href="/discovery">View All Entries &rarr;</a></div>
    <div class="discovery-preview">
        <a href="/discovery" class="discovery-card"><div class="discovery-card-img" style="background:linear-gradient(135deg,#1a3c2a,#7c9a72);">&#127795;<span class="date-tag">Feb 2026</span></div><div class="discovery-card-body"><h4>Placeholder Discovery</h4><p>Short description of the latest discovery entry and what was found.</p><span class="location">&#128205; Location</span></div></a>
        <a href="/discovery" class="discovery-card"><div class="discovery-card-img" style="background:linear-gradient(135deg,#1a4a5e,#3d8fa3);">&#128011;<span class="date-tag">Jan 2026</span></div><div class="discovery-card-body"><h4>Placeholder Discovery</h4><p>Short description of another discovery entry from the field.</p><span class="location">&#128205; Location</span></div></a>
    </div>
</div>
</div></section>
@endsection
