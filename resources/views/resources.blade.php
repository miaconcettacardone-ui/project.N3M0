@extends('layouts.app')
@section('title', 'Resources — ProjectNEMO')
@section('extra-styles')
.resource-category{margin-bottom:3rem}.resource-category h3{font-family:'Playfair Display',serif;font-size:1.6rem;color:var(--forest-deep);margin-bottom:1.5rem;padding-bottom:0.8rem;border-bottom:2px solid var(--sand)}.resource-list{display:grid;grid-template-columns:repeat(2,1fr);gap:1.2rem}.resource-item{background:white;padding:1.5rem;border-radius:12px;box-shadow:0 3px 15px rgba(0,0,0,0.05);display:flex;gap:1rem;align-items:flex-start;transition:all 0.3s;text-decoration:none;color:inherit}.resource-item:hover{transform:translateY(-3px);box-shadow:0 8px 25px rgba(0,0,0,0.1)}.resource-icon{width:50px;height:50px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0}.resource-icon.book{background:#ecfdf5}.resource-icon.video{background:#eff6ff}.resource-icon.link{background:#fefce8}.resource-text h4{font-size:1rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.3rem}.resource-text p{font-size:0.85rem;color:var(--text-muted);line-height:1.5}.resource-text .tag{font-size:0.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--sage);margin-top:0.4rem;display:inline-block}@media(max-width:968px){.resource-list{grid-template-columns:1fr}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Learn More</p><h1>Resources & <em>Education</em></h1><p>Expand your knowledge with curated books, documentaries, and educational materials.</p></div>
<section class="section"><div class="container">
<div class="resource-category"><h3>Recommended Reading</h3><div class="resource-list">
<a href="#" class="resource-item"><div class="resource-icon book">&#128214;</div><div class="resource-text"><h4>Silent Spring — Rachel Carson</h4><p>The groundbreaking book that launched the modern environmental movement.</p><span class="tag">Classic</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon book">&#128214;</div><div class="resource-text"><h4>The Sixth Extinction — Elizabeth Kolbert</h4><p>A Pulitzer Prize-winning exploration of the current mass extinction event.</p><span class="tag">Biodiversity</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon book">&#128214;</div><div class="resource-text"><h4>Braiding Sweetgrass — Robin Wall Kimmerer</h4><p>Indigenous wisdom, scientific knowledge, and the teachings of plants.</p><span class="tag">Ecology</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon book">&#128214;</div><div class="resource-text"><h4>The Hidden Life of Trees — Peter Wohlleben</h4><p>Discover the extraordinary secret life of trees.</p><span class="tag">Nature</span></div></a>
</div></div>
<div class="resource-category"><h3>Documentaries and Films</h3><div class="resource-list">
<a href="#" class="resource-item"><div class="resource-icon video">&#127916;</div><div class="resource-text"><h4>Our Planet — Netflix</h4><p>A stunning exploration of the world's natural wonders.</p><span class="tag">Series</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon video">&#127916;</div><div class="resource-text"><h4>Chasing Coral — Netflix</h4><p>Revealing the disappearance of coral reefs around the world.</p><span class="tag">Ocean</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon video">&#127916;</div><div class="resource-text"><h4>Before the Flood — Nat Geo</h4><p>Exploring the impact of climate change around the world.</p><span class="tag">Climate</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon video">&#127916;</div><div class="resource-text"><h4>The Ivory Game — Netflix</h4><p>An undercover investigation into the illegal ivory trade.</p><span class="tag">Conservation</span></div></a>
</div></div>
<div class="resource-category"><h3>Organizations to Follow</h3><div class="resource-list">
<a href="#" class="resource-item"><div class="resource-icon link">&#128279;</div><div class="resource-text"><h4>IUCN Red List</h4><p>Comprehensive source on conservation status of species.</p><span class="tag">Database</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon link">&#128279;</div><div class="resource-text"><h4>NASA Climate</h4><p>The latest climate science, data, and visualizations.</p><span class="tag">Climate</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon link">&#128279;</div><div class="resource-text"><h4>National Geographic Education</h4><p>Free educational resources about wildlife and conservation.</p><span class="tag">Education</span></div></a>
<a href="#" class="resource-item"><div class="resource-icon link">&#128279;</div><div class="resource-text"><h4>World Wildlife Fund</h4><p>Leading conservation organization protecting wildlife worldwide.</p><span class="tag">Conservation</span></div></a>
</div></div>
</div></section>
@endsection
