@extends('layouts.app')
@section('title', 'Join the Team — ProjectNEMO')
@section('extra-styles')
.join-intro{text-align:center;max-width:650px;margin:0 auto 3rem}
.join-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}

/* Compensation Note */
.comp-note{background:var(--sand-light);border-left:4px solid var(--amber);border-radius:0 16px 16px 0;padding:1.5rem 2rem;margin-bottom:3rem;max-width:750px;margin-left:auto;margin-right:auto}
.comp-note h4{font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep);margin-bottom:0.5rem}
.comp-note p{font-size:0.9rem;color:var(--text-muted);line-height:1.7;margin:0}

/* Roles We're Looking For */
.roles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem;margin-bottom:3rem}
.role-card{background:white;border-radius:14px;padding:1.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);border:1.5px solid transparent;transition:all 0.3s}
.role-card:hover{border-color:var(--sage);transform:translateY(-3px)}
.role-icon{font-size:2rem;margin-bottom:0.8rem}
.role-card h4{font-family:'Playfair Display',serif;font-size:1rem;color:var(--forest-deep);margin-bottom:0.3rem}
.role-card p{font-size:0.82rem;color:var(--text-muted);line-height:1.5}

/* Form */
.join-form-wrap{max-width:750px;margin:0 auto}
.form-section-title{font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--forest-deep);margin-bottom:1.2rem;padding-bottom:0.5rem;border-bottom:2px solid var(--sage-light)}
.form-group{margin-bottom:1.5rem}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.form-group label{display:block;font-size:0.85rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.4rem;letter-spacing:0.3px}
.form-group label span{color:var(--amber)}
.form-control{width:100%;padding:0.75rem 1rem;border:1.5px solid #e0e0e0;border-radius:10px;font-size:0.95rem;font-family:'Source Sans 3',sans-serif;color:var(--text-dark);background:white;transition:border-color 0.2s;outline:none}
.form-control:focus{border-color:var(--sage)}
textarea.form-control{resize:vertical;min-height:120px}
.form-control::placeholder{color:#aaa}
.file-upload{width:100%;padding:1.5rem;border:2px dashed #d0d0d0;border-radius:10px;text-align:center;cursor:pointer;transition:all 0.2s;background:var(--sand-light)}
.file-upload:hover{border-color:var(--sage);background:white}
.file-upload p{font-size:0.85rem;color:var(--text-muted);margin:0.3rem 0 0}
.file-upload span{font-size:1.5rem}
.checkbox-group{display:flex;flex-direction:column;gap:0.6rem}
.checkbox-item{display:flex;align-items:center;gap:0.7rem;cursor:pointer}
.checkbox-item input{width:16px;height:16px;accent-color:var(--forest);cursor:pointer;flex-shrink:0}
.checkbox-item span{font-size:0.9rem;color:var(--text-muted)}
.form-submit{text-align:center;margin-top:2.5rem}
.form-submit p{font-size:0.85rem;color:var(--text-muted);margin-top:1rem}

@media(max-width:968px){
    .roles-grid{grid-template-columns:1fr 1fr}
    .form-row{grid-template-columns:1fr}
}
@media(max-width:600px){
    .roles-grid{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto}
}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">We're Hiring</p>
    <h1>Join the <em>Team</em></h1>
    <p>Help us tell the story of the natural world. We're looking for passionate creatives who care about conservation.</p>
</div>

<section class="section"><div class="container">
    <div class="join-intro">
        <p>ProjectNEMO is a growing platform dedicated to wildlife education and conservation storytelling. We're looking for talented, mission-driven people to join us — whether as contributors, collaborators, or core team members.</p>
    </div>

    <!-- Compensation Note -->
    <div class="comp-note">
        <h4>📋 Please Read Before Applying</h4>
        <p>These are currently <strong>minimum to no-pay positions</strong>. Compensation may include a title within the organization and/or documented volunteer hours, subject to further discussion on a case-by-case basis. We believe in being fully transparent about this — we're a mission-driven project and we deeply value every person who contributes their time and talent.</p>
    </div>

    <!-- Roles -->
    <div style="text-align:center;margin-bottom:2rem;">
        <p class="section-label">What We're Looking For</p>
        <h2 class="section-title" style="text-align:center">Open Roles</h2>
    </div>
    <div class="roles-grid">
        <div class="role-card"><div class="role-icon">📸</div><h4>Wildlife Photographer</h4><p>Capture stunning imagery of animals and ecosystems for use across our platform and social channels.</p></div>
        <div class="role-card"><div class="role-icon">🎥</div><h4>Wildlife Videographer</h4><p>Produce compelling video content from the field — documentaries, reels, educational clips, and more.</p></div>
        <div class="role-card"><div class="role-icon">🎬</div><h4>Media Producer</h4><p>Edit, produce, and publish multimedia content that brings conservation stories to life.</p></div>
        <div class="role-card"><div class="role-icon">✍️</div><h4>Content Creator</h4><p>Write articles, scripts, captions, and social content that educates and inspires our audience.</p></div>
        <div class="role-card"><div class="role-icon">📱</div><h4>Social Media</h4><p>Grow and manage ProjectNEMO's presence across Instagram, TikTok, YouTube, and beyond.</p></div>
        <div class="role-card"><div class="role-icon">🌿</div><h4>Other / General</h4><p>Have a skill that doesn't fit neatly above? Tell us — we're open to hearing from all kinds of contributors.</p></div>
    </div>

    <!-- Form -->
    <div class="join-form-wrap">
        <p class="section-label" style="text-align:center">Apply Now</p>
        <h2 class="section-title" style="text-align:center;margin-bottom:2.5rem">Tell Us About Yourself</h2>

        <form action="/join" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Contact Info -->
            <h3 class="form-section-title">Contact Information</h3>
            <div class="form-row">
                <div class="form-group">
                    <label>First Name <span>*</span></label>
                    <input type="text" class="form-control" name="first_name" placeholder="Project" required>
                </div>
                <div class="form-group">
                    <label>Last Name <span>*</span></label>
                    <input type="text" class="form-control" name="last_name" placeholder="Nemo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Email Address <span>*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="projectnemo@example.com" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="+506 8000 0000">
                </div>
            </div>
            <div class="form-group">
                <label>Location (City, Country)</label>
                <input type="text" class="form-control" name="location" placeholder="e.g. San José, Costa Rica">
            </div>
            <div class="form-group">
                <label>Portfolio / Website / Social Media</label>
                <input type="url" class="form-control" name="portfolio" placeholder="https://yourportfolio.com">
            </div>

            <!-- Role -->
            <h3 class="form-section-title" style="margin-top:2rem">Role & Interest</h3>
            <div class="form-group">
                <label>Which role(s) are you interested in? <span>*</span></label>
                <div class="checkbox-group">
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="photographer"><span>Wildlife Photographer</span></label>
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="videographer"><span>Wildlife Videographer</span></label>
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="producer"><span>Media Producer</span></label>
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="content"><span>Content Creator / Writer</span></label>
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="social"><span>Social Media</span></label>
                    <label class="checkbox-item"><input type="checkbox" name="roles[]" value="other"><span>Other</span></label>
                </div>
            </div>
            <div class="form-group">
                <label>Why are you interested in joining ProjectNEMO? <span>*</span></label>
                <textarea class="form-control" name="interest" placeholder="Tell us what draws you to our mission and why you want to be part of the team..." required></textarea>
            </div>
            <div class="form-group">
                <label>What do you hope to contribute? <span>*</span></label>
                <textarea class="form-control" name="contribution" placeholder="Describe what you'd bring to the team — your skills, your ideas, your vision..."></textarea>
            </div>

            <!-- Background -->
            <h3 class="form-section-title" style="margin-top:2rem">Your Background</h3>
            <div class="form-group">
                <label>Tell us about your relevant experience</label>
                <textarea class="form-control" name="experience" placeholder="Previous work, projects, education, or anything else that's relevant to the role you're applying for..."></textarea>
            </div>
            <div class="form-group">
                <label>Availability</label>
                <select class="form-control" name="availability">
                    <option value="" disabled selected>Select your availability</option>
                    <option>A few hours per week</option>
                    <option>Part-time (10-20 hrs/week)</option>
                    <option>Full-time (20+ hrs/week)</option>
                    <option>Project-based / flexible</option>
                </select>
            </div>
            <div class="form-group">
                <label>Resume / CV (optional)</label>
                <div class="file-upload" onclick="document.getElementById('resume-input').click()">
                    <span>📄</span>
                    <p id="file-label">Click to upload your resume or CV</p>
                    <p style="font-size:0.75rem;color:#bbb">PDF, DOC, or DOCX — max 5MB</p>
                </div>
                <input type="file" id="resume-input" name="resume" accept=".pdf,.doc,.docx" style="display:none" onchange="document.getElementById('file-label').textContent = this.files[0]?.name || 'Click to upload your resume or CV'">
            </div>
            <div class="form-group">
                <label>Anything else you'd like us to know?</label>
                <textarea class="form-control" name="other" placeholder="Links to specific work samples, questions, special circumstances, etc."></textarea>
            </div>

            <div class="form-submit">
                <button type="submit" class="btn-primary" style="font-size:1rem;padding:1rem 3rem;border:none;cursor:pointer">Submit Application →</button>
                <p>We review all applications personally and will be in touch within 1-2 weeks.</p>
            </div>
        </form>
    </div>
</div></section>
@endsection