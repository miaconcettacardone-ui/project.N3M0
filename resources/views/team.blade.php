@extends('layouts.app')
@section('title', 'Meet the Team — ProjectNEMO')
@section('extra-styles')
/* Team Hero */
.team-intro{text-align:center;max-width:650px;margin:0 auto 4rem}
.team-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}

/* Person Section */
.person-section{display:grid;grid-template-columns:320px 1fr;gap:4rem;align-items:start;margin-bottom:5rem;padding-bottom:5rem;border-bottom:1px solid var(--sage-light)}
.person-section:last-child{border-bottom:none;margin-bottom:0}
.person-section.reverse{grid-template-columns:1fr 320px}
.person-section.reverse .person-photo{order:2}
.person-section.reverse .person-bio{order:1}
.person-photo{border-radius:20px;overflow:hidden;background:linear-gradient(145deg,var(--forest),var(--sage));height:400px;display:flex;align-items:center;justify-content:center;font-size:6rem;position:relative}
.person-photo.mia{background:linear-gradient(145deg,#1a3c2a,#4a7c5e)}
.person-photo.britton{background:linear-gradient(145deg,#1a2c4a,#3d6a8a)}
.person-photo.kaleb{background:linear-gradient(145deg,#3c2a1a,#8a6a3d)}
.person-photo-placeholder{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;color:rgba(255,255,255,0.5);font-size:0.8rem;gap:0.5rem}
.person-bio .person-label{font-size:0.8rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--sage);margin-bottom:0.5rem}
.person-bio h2{font-family:'Playfair Display',serif;font-size:2.5rem;color:var(--forest-deep);margin-bottom:0.3rem;line-height:1.2}
.person-bio .person-role{font-size:1rem;color:var(--amber);font-weight:700;margin-bottom:1.5rem}
.person-bio p{font-size:1rem;color:var(--text-muted);line-height:1.85;margin-bottom:1rem}
.person-tags{display:flex;flex-wrap:wrap;gap:0.5rem;margin-top:1.5rem}
.person-tag{font-size:0.78rem;font-weight:700;padding:0.35rem 0.9rem;border-radius:50px;background:var(--sand-light);color:var(--forest-deep);border:1px solid var(--sage-light)}
.person-quote{margin:1.5rem 0;padding:1.2rem 1.5rem;border-left:3px solid var(--sage);background:var(--sand-light);border-radius:0 12px 12px 0}
.person-quote p{font-family:'Playfair Display',serif;font-style:italic;font-size:1.05rem;color:var(--forest-deep);margin:0;line-height:1.6}

/* Join CTA */
.join-cta{max-width:800px;margin:0 auto}
.join-cta-inner{background:white;border-radius:24px;padding:3rem;box-shadow:0 8px 40px rgba(0,0,0,0.08);border:1px solid var(--sage-light)}
.join-note{display:flex;gap:1rem;align-items:flex-start;background:var(--sand-light);border-radius:12px;padding:1.2rem 1.5rem;border-left:4px solid var(--amber);margin-top:1.5rem}
.join-note span{font-size:1.5rem;flex-shrink:0}
.join-note p{font-size:0.9rem;color:var(--text-muted);line-height:1.7;margin:0}
.join-note strong{color:var(--forest-deep)}

@media(max-width:968px){
    .person-section,.person-section.reverse{grid-template-columns:1fr}
    .person-section.reverse .person-photo,.person-section.reverse .person-bio{order:unset}
    .person-photo{height:280px}
    .person-bio h2{font-size:2rem}
}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">Our People</p>
    <h1>Meet the <em>Team</em></h1>
    <p>The people behind ProjectNEMO — united by a shared love for the natural world and a belief that education can change it.</p>
</div>

<section class="section"><div class="container">
    <div class="team-intro">
        <p>ProjectNEMO is built by a small, dedicated team who each bring something unique to the mission. Here's who we are, why we're here, and what drives us.</p>
    </div>

    <!-- MIA -->
    <div class="person-section">
        <div class="person-photo mia">
            <div class="person-photo-placeholder"><span style="font-size:4rem">📷</span>Photo coming soon</div>
        </div>
        <div class="person-bio">
            <p class="person-label">Founder & Creator</p>
            <h2>Mia Cardone</h2>
            <p class="person-role">Founder & Creator, ProjectNEMO</p>
            <p>Replace this with Mia's real bio — her background, where she grew up, what sparked her love for wildlife, her education, and the experiences that led her to start ProjectNEMO.</p>
            <p>Talk about fieldwork she's done, places she's been, animals she's worked with, and what she hopes ProjectNEMO will achieve in the world. Make it personal and specific.</p>
            <div class="person-quote">
                <p>"Add a personal quote from Mia here — something that captures her voice and her 'why' behind ProjectNEMO."</p>
            </div>
            <p>Beyond the project, share what Mia does when she's not working on NEMO — her interests, her studies, where she's headed next.</p>
            <div class="person-tags">
                <span class="person-tag">Wildlife Conservation</span>
                <span class="person-tag">Fieldwork</span>
                <span class="person-tag">Environmental Education</span>
                <span class="person-tag">Storytelling</span>
                <span class="person-tag">Founder</span>
            </div>
        </div>
    </div>

    <!-- BRITTON -->
    <div class="person-section reverse">
        <div class="person-photo britton">
            <div class="person-photo-placeholder"><span style="font-size:4rem">📷</span>Photo coming soon</div>
        </div>
        <div class="person-bio">
            <p class="person-label">CTO & Editing Chief</p>
            <h2>Britton Bolgen</h2>
            <p class="person-role">Chief Technology Officer & Editing Chief</p>
            <p>Britton is the technical backbone of ProjectNEMO. Replace this with his real bio — his background in technology, how he got involved with the project, and what he brings to the team.</p>
            <p>As Editing Chief, Britton also oversees the quality and consistency of everything published on the platform. Talk about his editorial philosophy, his approach to content, and what he looks for in a great story.</p>
            <div class="person-quote">
                <p>"Add a quote from Britton here — something that reflects his perspective on the intersection of technology and environmental storytelling."</p>
            </div>
            <p>Share what Britton is passionate about beyond his work on ProjectNEMO — his interests, his background, and what excites him about the future of the project.</p>
            <div class="person-tags">
                <span class="person-tag">Technology</span>
                <span class="person-tag">Editorial</span>
                <span class="person-tag">Web Development</span>
                <span class="person-tag">Content Strategy</span>
                <span class="person-tag">CTO</span>
            </div>
        </div>
    </div>


</div></section>

<!-- JOIN THE TEAM CTA -->
<section class="section section-alt"><div class="container">
    <div class="join-cta">
        <div class="join-cta-inner">
            <p class="section-label" style="text-align:center">We're Growing</p>
            <h2 style="text-align:center;font-family:'Playfair Display',serif;font-size:2.5rem;color:var(--forest-deep);margin-bottom:1rem">Join the <em>Team</em></h2>
            <p style="text-align:center;color:var(--text-muted);max-width:600px;margin:0 auto 1.5rem;line-height:1.7">We're looking for passionate people to help tell the story of the natural world. Whether you're a wildlife photographer, videographer, media producer, or just someone who cares deeply about conservation — we want to hear from you.</p>
            <div class="join-note">
                <span>📋</span>
                <p>Please note: these are currently <strong>minimum to no-pay positions</strong>. Compensation may include a title within the organization and/or volunteer hours, subject to further discussion. Roles are focused on wildlife photography & videography, media production, content creation, and related fields.</p>
            </div>
            <div style="text-align:center;margin-top:2rem">
                <a href="/join" class="btn-primary" style="font-size:1rem;padding:1rem 2.5rem">Apply to Join the Team →</a>
            </div>
        </div>
    </div>
</div></section>
@endsection