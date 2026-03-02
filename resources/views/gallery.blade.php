@extends('layouts.app')
@section('title', 'Photos & Videos — ProjectNEMO')
@section('extra-styles')
.gallery-tabs { display:flex;gap:0.5rem;justify-content:center;margin-bottom:3rem; }
.gallery-tab { padding:0.6rem 1.8rem;border-radius:50px;border:none;background:rgba(26,60,42,0.08);color:var(--text-muted);font-weight:600;font-size:0.9rem;cursor:pointer;transition:all 0.3s;font-family:'Source Sans 3',sans-serif; }
.gallery-tab:hover,.gallery-tab.active { background:var(--forest);color:white; }
.gallery-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem; }
.gallery-item { border-radius:14px;overflow:hidden;position:relative;cursor:pointer;transition:all 0.3s; }
.gallery-item:hover { transform:scale(1.02);box-shadow:0 10px 30px rgba(0,0,0,0.15); }
.gallery-item-img { height:250px;display:flex;align-items:center;justify-content:center;font-size:4rem; }
.gallery-item-img.a { background:linear-gradient(135deg,#1a4a5e,#3d8fa3); }
.gallery-item-img.b { background:linear-gradient(135deg,#1a3c2a,#7c9a72); }
.gallery-item-img.c { background:linear-gradient(135deg,#4a3c1a,#8a7a4a); }
.gallery-item-img.d { background:linear-gradient(135deg,#2a3c4a,#5a7a8a); }
.gallery-item-img.e { background:linear-gradient(135deg,#3c1a2a,#7a4a5a); }
.gallery-item-img.f { background:linear-gradient(135deg,#2a4a2a,#5a8a5a); }
.gallery-item.tall .gallery-item-img { height:520px; }
.gallery-item-overlay { position:absolute;bottom:0;left:0;right:0;padding:1.2rem;background:linear-gradient(transparent,rgba(0,0,0,0.7));color:white; }
.gallery-item-overlay h4 { font-family:'Playfair Display',serif;font-size:1rem;margin-bottom:0.2rem; }
.gallery-item-overlay p { font-size:0.8rem;opacity:0.7; }
.gallery-item .play-btn { position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:60px;height:60px;background:rgba(255,255,255,0.9);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.5rem;transition:all 0.3s; }
.gallery-item:hover .play-btn { background:var(--amber);transform:translate(-50%,-50%) scale(1.1); }
.masonry { display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem; }
@media(max-width:968px){ .gallery-grid,.masonry{grid-template-columns:repeat(2,1fr)} }
@media(max-width:600px){ .gallery-grid,.masonry{grid-template-columns:1fr} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Photos & Videos</p><h1>Seeing Is <em>Believing</em></h1><p>Explore our collection of photos and educational videos from around the natural world.</p></div>
<section class="section"><div class="container"><div class="gallery-tabs"><button class="gallery-tab active">All</button><button class="gallery-tab">Photos</button><button class="gallery-tab">Videos</button></div><div class="gallery-grid"><div class="gallery-item"><div class="gallery-item-img a">&#128011;</div><div class="gallery-item-overlay"><h4>Coral Reef Ecosystem</h4><p>Photo — Ocean</p></div></div><div class="gallery-item"><div class="gallery-item-img b">&#127795;</div><div class="gallery-item-overlay"><h4>Ancient Rainforest Canopy</h4><p>Photo — Forest</p></div><div class="play-btn">&#9654;</div></div><div class="gallery-item"><div class="gallery-item-img c">&#129409;</div><div class="gallery-item-overlay"><h4>African Wildlife Migration</h4><p>Video — Wildlife</p></div><div class="play-btn">&#9654;</div></div><div class="gallery-item"><div class="gallery-item-img d">&#128039;</div><div class="gallery-item-overlay"><h4>Antarctic Penguin Colony</h4><p>Photo — Wildlife</p></div></div><div class="gallery-item"><div class="gallery-item-img e">&#127773;</div><div class="gallery-item-overlay"><h4>Northern Lights Over Glacier</h4><p>Photo — Landscape</p></div></div><div class="gallery-item"><div class="gallery-item-img f">&#129446;</div><div class="gallery-item-overlay"><h4>Sea Turtle Conservation</h4><p>Video — Conservation</p></div><div class="play-btn">&#9654;</div></div><div class="gallery-item"><div class="gallery-item-img a" style="background:linear-gradient(135deg,#0c2d3f,#2a6a8a);">&#127754;</div><div class="gallery-item-overlay"><h4>Deep Ocean Exploration</h4><p>Video — Marine Science</p></div><div class="play-btn">&#9654;</div></div><div class="gallery-item"><div class="gallery-item-img b">&#128038;</div><div class="gallery-item-overlay"><h4>Tropical Bird Species</h4><p>Photo — Wildlife</p></div></div><div class="gallery-item"><div class="gallery-item-img c" style="background:linear-gradient(135deg,#3a5a30,#6a8a48);">&#127807;</div><div class="gallery-item-overlay"><h4>Reforestation Progress</h4><p>Photo — Conservation</p></div></div></div></div></section>
@endsection
