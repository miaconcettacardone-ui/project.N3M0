@extends('layouts.app')
@section('title', 'Transparency Report — ProjectNEMO')
@section('extra-styles')
.transparency-intro{max-width:700px;margin:0 auto 3rem;text-align:center}
.transparency-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.promise-box{background:white;border-radius:16px;padding:2.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);max-width:800px;margin:0 auto 3rem;text-align:center;border-left:4px solid var(--amber)}
.promise-box h3{font-family:'Playfair Display',serif;font-size:1.6rem;color:var(--forest-deep);margin-bottom:0.8rem}
.promise-box p{font-size:1rem;color:var(--text-muted);line-height:1.7}
.promise-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:1.5rem}
.promise-stat{text-align:center;padding:1rem;background:var(--sand-light);border-radius:12px}
.promise-stat .big{font-family:'Playfair Display',serif;font-size:2.5rem;font-weight:900;color:var(--forest)}
.promise-stat .label{font-size:0.8rem;color:var(--text-muted);font-weight:600;margin-top:0.2rem}
.totals-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-bottom:4rem}
.total-card{background:white;border-radius:16px;padding:2rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);text-align:center}
.total-card .icon{font-size:2.5rem;margin-bottom:0.8rem}
.total-card h4{font-family:'Playfair Display',serif;font-size:2rem;color:var(--forest-deep);margin-bottom:0.2rem}
.total-card p{font-size:0.85rem;color:var(--text-muted)}
.org-breakdown{margin-bottom:3rem}
.org-breakdown h3{font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--forest-deep);margin-bottom:0.5rem}
.org-breakdown>p{font-size:0.95rem;color:var(--text-muted);margin-bottom:2rem}
.org-row{background:white;border-radius:14px;padding:1.5rem 2rem;margin-bottom:1rem;box-shadow:0 2px 10px rgba(0,0,0,0.04);display:grid;grid-template-columns:2fr 1fr 1fr 3fr;gap:1.5rem;align-items:center}
.org-row-name{display:flex;align-items:center;gap:0.8rem}
.org-row-icon{width:45px;height:45px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0}
.org-row-icon.green{background:linear-gradient(135deg,#1a3c2a,#2d5a3f)}
.org-row-icon.blue{background:linear-gradient(135deg,#1a4a5e,#3d8fa3)}
.org-row-icon.brown{background:linear-gradient(135deg,#4a3c1a,#8a7a4a)}
.org-row-icon.red{background:linear-gradient(135deg,#3c1a2a,#7a4a5a)}
.org-row-icon.teal{background:linear-gradient(135deg,#0c2d3f,#2a6a8a)}
.org-row-icon.olive{background:linear-gradient(135deg,#2a4a2a,#5a8a5a)}
.org-row h4{font-size:1rem;font-weight:700;color:var(--forest-deep)}
.org-row .raised{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--forest)}
.org-row .distributed{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--amber)}
.progress-wrap{display:flex;flex-direction:column;gap:0.3rem}
.progress-bar-outer{width:100%;height:10px;background:var(--sand-light);border-radius:10px;overflow:hidden}
.progress-bar-inner{height:100%;border-radius:10px;transition:width 0.5s}
.progress-bar-inner.green{background:linear-gradient(90deg,var(--forest),var(--sage))}
.progress-label{display:flex;justify-content:space-between;font-size:0.7rem;color:var(--text-muted);font-weight:600}
.quarter-section{margin-top:3rem}
.quarter-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem}
.quarter-header h3{font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--forest-deep)}
.quarter-tabs{display:flex;gap:0.4rem}
.quarter-tab{padding:0.4rem 1rem;border-radius:50px;border:2px solid var(--sand);background:transparent;color:var(--text-muted);font-weight:600;font-size:0.8rem;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s}
.quarter-tab.active{background:var(--forest);color:white;border-color:var(--forest)}
.report-cards{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}
.report-card{background:white;border-radius:14px;padding:1.8rem;box-shadow:0 3px 15px rgba(0,0,0,0.05)}
.report-card h4{font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep);margin-bottom:0.5rem}
.report-card p{font-size:0.88rem;color:var(--text-muted);line-height:1.6;margin-bottom:1rem}
.report-card .download-btn{display:inline-flex;align-items:center;gap:0.4rem;padding:0.5rem 1.2rem;background:var(--sand-light);border-radius:8px;color:var(--forest-deep);font-weight:600;font-size:0.8rem;text-decoration:none;transition:all 0.3s}
.report-card .download-btn:hover{background:var(--sand)}
.cta-banner{background:linear-gradient(135deg,var(--forest),#2d5a3f);border-radius:20px;padding:3rem;text-align:center;margin-top:3rem}
.cta-banner h3{font-family:'Playfair Display',serif;font-size:1.8rem;color:white;margin-bottom:0.5rem}
.cta-banner p{color:rgba(255,255,255,0.7);margin-bottom:1.5rem;font-size:0.95rem}
@media(max-width:968px){.totals-grid{grid-template-columns:1fr}.org-row{grid-template-columns:1fr;gap:0.8rem;text-align:center}.org-row-name{justify-content:center}.promise-stats{grid-template-columns:1fr}.report-cards{grid-template-columns:1fr}}
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Transparency</p><h1>Where Your <em>Money Goes</em></h1><p>We believe in full transparency. Every dollar you donate goes directly to conservation — here's the proof.</p></div>

<section class="section"><div class="container">
<div class="transparency-intro">
    <p>Too many organizations take a huge cut of donations for "administrative costs." ProjectNEMO is different. We track every dollar and show you exactly where it ends up.</p>
</div>

<div class="promise-box">
    <h3>Our Promise</h3>
    <p>100% of your donation goes to conservation organizations. ProjectNEMO does not take any administrative fees or overhead from donations. We fund our operations separately.</p>
    <div class="promise-stats">
        <div class="promise-stat"><div class="big">100%</div><div class="label">Goes to Conservation</div></div>
        <div class="promise-stat"><div class="big">0%</div><div class="label">Administrative Fees</div></div>
        <div class="promise-stat"><div class="big">100%</div><div class="label">Accountable</div></div>
    </div>
</div>

<div class="totals-grid">
    <div class="total-card"><div class="icon">&#128176;</div><h4>$0.00</h4><p>Total Raised</p></div>
    <div class="total-card"><div class="icon">&#128154;</div><h4>$0.00</h4><p>Total Distributed</p></div>
    <div class="total-card"><div class="icon">&#127758;</div><h4>0</h4><p>Organizations Supported</p></div>
</div>

<div class="org-breakdown">
    <p class="section-label">Breakdown by Organization</p>
    <h3>Where the Money Went</h3>
    <p>Detailed breakdown of donations received and distributed to each partner organization. Numbers will update as donations come in.</p>

    <div class="org-row">
        <div class="org-row-name"><div class="org-row-icon olive">&#128054;</div><h4>Rescue Dogs for Wildlife</h4></div>
        <div class="raised">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">raised</span></div>
        <div class="distributed">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">distributed</span></div>
        <div class="progress-wrap"><div class="progress-bar-outer"><div class="progress-bar-inner green" style="width:0%"></div></div><div class="progress-label"><span>$0 distributed</span><span>Goal: $500</span></div></div>
    </div>
    <div class="org-row">
        <div class="org-row-name"><div class="org-row-icon green">&#128060;</div><h4>World Wildlife Fund</h4></div>
        <div class="raised">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">raised</span></div>
        <div class="distributed">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">distributed</span></div>
        <div class="progress-wrap"><div class="progress-bar-outer"><div class="progress-bar-inner green" style="width:0%"></div></div><div class="progress-label"><span>$0 distributed</span><span>Goal: $500</span></div></div>
    </div>
    <div class="org-row">
        <div class="org-row-name"><div class="org-row-icon blue">&#128011;</div><h4>Ocean Conservancy</h4></div>
        <div class="raised">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">raised</span></div>
        <div class="distributed">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">distributed</span></div>
        <div class="progress-wrap"><div class="progress-bar-outer"><div class="progress-bar-inner green" style="width:0%"></div></div><div class="progress-label"><span>$0 distributed</span><span>Goal: $500</span></div></div>
    </div>
    <div class="org-row">
        <div class="org-row-name"><div class="org-row-icon olive">&#127795;</div><h4>Rainforest Alliance</h4></div>
        <div class="raised">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">raised</span></div>
        <div class="distributed">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">distributed</span></div>
        <div class="progress-wrap"><div class="progress-bar-outer"><div class="progress-bar-inner green" style="width:0%"></div></div><div class="progress-label"><span>$0 distributed</span><span>Goal: $500</span></div></div>
    </div>
    <div class="org-row">
        <div class="org-row-name"><div class="org-row-icon brown">&#129409;</div><h4>Wildlife Conservation Society</h4></div>
        <div class="raised">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">raised</span></div>
        <div class="distributed">$0.00<br><span style="font-size:0.7rem;color:var(--text-muted);font-family:'Source Sans 3',sans-serif;">distributed</span></div>
        <div class="progress-wrap"><div class="progress-bar-outer"><div class="progress-bar-inner green" style="width:0%"></div></div><div class="progress-label"><span>$0 distributed</span><span>Goal: $500</span></div></div>
    </div>
</div>

<div class="quarter-section">
    <div class="quarter-header">
        <div><p class="section-label">Reports</p><h3>Quarterly Reports</h3></div>
        <div class="quarter-tabs">
            <button class="quarter-tab active">2026</button>
            <button class="quarter-tab">2025</button>
        </div>
    </div>
    <div class="report-cards">
        <div class="report-card">
            <h4>Q1 2026 — January to March</h4>
            <p>Report will be available at the end of Q1 2026. It will include total donations received, distributions made, and proof of transfers to each organization.</p>
            <span class="download-btn">&#128196; Coming Soon</span>
        </div>
        <div class="report-card">
            <h4>Q2 2026 — April to June</h4>
            <p>Report will be available at the end of Q2 2026.</p>
            <span class="download-btn">&#128196; Coming Soon</span>
        </div>
    </div>
</div>

<div class="cta-banner">
    <h3>Ready to Make a Difference?</h3>
    <p>Every dollar goes directly to the organizations doing the work. No middlemen, no hidden fees.</p>
    <a href="/donate" class="btn-primary" style="padding:1rem 2.5rem;font-size:1rem;">Donate Now &rarr;</a>
</div>
</div></section>
@endsection
