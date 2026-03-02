@extends('layouts.app')
@section('title', 'Contact — ProjectNEMO')
@section('extra-styles')
.contact-grid { display:grid;grid-template-columns:1fr 1fr;gap:4rem; }
.contact-info h3 { font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--forest-deep);margin-bottom:1rem; }
.contact-info p { font-size:1.05rem;color:var(--text-muted);line-height:1.8;margin-bottom:2rem; }
.contact-methods { display:flex;flex-direction:column;gap:1.5rem; }
.contact-method { display:flex;align-items:flex-start;gap:1rem; }
.contact-method-icon { width:50px;height:50px;border-radius:12px;background:var(--sand-light);display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0; }
.contact-method-text h4 { font-size:1rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.2rem; }
.contact-method-text p { font-size:0.9rem;color:var(--text-muted);margin:0; }
.contact-form { background:white;padding:2.5rem;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06); }
.contact-form h3 { font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--forest-deep);margin-bottom:1.5rem; }
.form-group { margin-bottom:1.2rem; }
.form-group label { display:block;font-size:0.85rem;font-weight:600;color:var(--text-dark);margin-bottom:0.4rem; }
.form-group input,.form-group textarea,.form-group select { width:100%;padding:0.8rem 1rem;border:2px solid #e5e5e5;border-radius:10px;font-size:0.95rem;font-family:'Source Sans 3',sans-serif;transition:border-color 0.3s;background:var(--cream); }
.form-group input:focus,.form-group textarea:focus,.form-group select:focus { outline:none;border-color:var(--sage); }
.form-group textarea { height:120px;resize:vertical; }
.form-row { display:grid;grid-template-columns:1fr 1fr;gap:1rem; }
.social-section { text-align:center; }
.social-grid { display:flex;gap:1.5rem;justify-content:center;margin-top:2rem; }
.social-item { width:70px;height:70px;border-radius:16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);display:flex;flex-direction:column;align-items:center;justify-content:center;color:white;text-decoration:none;font-size:0.7rem;font-weight:600;letter-spacing:1px;transition:all 0.3s; }
.social-item:hover { background:var(--amber);border-color:var(--amber);color:var(--forest-deep);transform:translateY(-3px); }
.social-item span { font-size:1.5rem;margin-bottom:0.2rem; }
@media(max-width:968px){ .contact-grid{grid-template-columns:1fr} .form-row{grid-template-columns:1fr} }
@endsection
@section('content')
<div class="page-hero"><p class="page-hero-label">Get in Touch</p><h1>We'd Love to <em>Hear From You</em></h1><p>Have a question, story tip, or want to collaborate? Reach out to the ProjectNEMO team.</p></div>
<section class="section"><div class="container"><div class="contact-grid"><div class="contact-info"><h3>Let's Connect</h3><p>Whether you're a fellow conservationist, a journalist, a student, or simply someone who cares about the planet — we want to hear from you.</p><div class="contact-methods"><div class="contact-method"><div class="contact-method-icon">&#128231;</div><div class="contact-method-text"><h4>Email Us</h4><p>hello@projectnemo.org</p></div></div><div class="contact-method"><div class="contact-method-icon">&#128205;</div><div class="contact-method-text"><h4>Location</h4><p>Placeholder — Add your location</p></div></div><div class="contact-method"><div class="contact-method-icon">&#128246;</div><div class="contact-method-text"><h4>Follow Us</h4><p>@projectnemo on all platforms</p></div></div></div></div><div class="contact-form"><h3>Send Us a Message</h3><div class="form-row"><div class="form-group"><label>First Name</label><input type="text" placeholder="Your first name"></div><div class="form-group"><label>Last Name</label><input type="text" placeholder="Your last name"></div></div><div class="form-group"><label>Email</label><input type="email" placeholder="your@email.com"></div><div class="form-group"><label>Subject</label><select><option>General Inquiry</option><option>Story Tip</option><option>Partnership</option><option>Volunteering</option><option>Other</option></select></div><div class="form-group"><label>Message</label><textarea placeholder="Tell us what's on your mind..."></textarea></div><button class="btn-primary" style="width:100%;">Send Message</button></div></div></div></section>
<section class="section section-dark social-section"><div class="container"><p class="section-label" style="color:var(--amber)">Follow Us</p><h2 class="section-title">Join the Conversation</h2><p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);">Stay connected and help spread awareness.</p><div class="social-grid"><a href="#" class="social-item"><span>&#128247;</span>IG</a><a href="#" class="social-item"><span>&#128038;</span>X</a><a href="#" class="social-item"><span>&#127909;</span>YT</a><a href="#" class="social-item"><span>&#127925;</span>TT</a><a href="#" class="social-item"><span>&#128101;</span>FB</a></div></div></section>
@endsection
