@extends('layouts.app')
@section('title', 'Shop — ProjectNEMO')
@section('extra-styles')
.shop-intro{text-align:center;max-width:700px;margin:0 auto 3rem}
.shop-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}
.shop-badge{display:inline-flex;align-items:center;gap:0.5rem;background:var(--sand-light);padding:0.5rem 1.2rem;border-radius:50px;font-size:0.82rem;font-weight:700;color:var(--forest);margin-bottom:1.2rem;letter-spacing:0.5px}
.shop-badge span{font-size:1.1rem}
.shop-tabs{display:flex;flex-wrap:wrap;justify-content:center;gap:0.5rem;margin-bottom:2.5rem}
.shop-tab{padding:0.55rem 1.4rem;border-radius:50px;border:2px solid var(--sage-light);background:transparent;color:var(--forest-deep);font-size:0.82rem;font-weight:700;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s}
.shop-tab:hover{border-color:var(--forest);background:var(--sand-light)}
.shop-tab.active{background:var(--forest);color:white;border-color:var(--forest)}
.product-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem}
.product-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.4s;text-decoration:none;color:inherit;display:flex;flex-direction:column}
.product-card:hover{transform:translateY(-6px);box-shadow:0 12px 40px rgba(0,0,0,0.12)}
.product-img{height:280px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.product-img .product-placeholder{width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:0.5rem;font-size:1rem;color:rgba(255,255,255,0.7);font-weight:600}
.product-placeholder span{font-size:4rem}
.product-img.apparel{background:linear-gradient(145deg,#1a3c2a,#3d6b4f)}
.product-img.accessories{background:linear-gradient(145deg,#2a4a5e,#4a8fa3)}
.product-img.eco{background:linear-gradient(145deg,#4a3c1a,#7a6a3a)}
.product-img.prints{background:linear-gradient(145deg,#3c2a4a,#6a4a8a)}
.product-tag{position:absolute;top:1rem;left:1rem;background:rgba(255,255,255,0.95);padding:0.25rem 0.7rem;border-radius:50px;font-size:0.68rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--forest)}
.product-tag.new{background:var(--amber);color:var(--forest-deep)}
.product-tag.eco-badge{background:#7c9a72;color:white}
.product-body{padding:1.5rem;flex:1;display:flex;flex-direction:column}
.product-category{font-size:0.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--sage);margin-bottom:0.4rem}
.product-body h3{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--forest-deep);line-height:1.3;margin-bottom:0.4rem}
.product-body p{font-size:0.88rem;color:var(--text-muted);line-height:1.55;margin-bottom:1rem;flex:1}
.product-footer{display:flex;justify-content:space-between;align-items:center;margin-top:auto}
.product-price{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:900;color:var(--forest-deep)}
.product-btn{padding:0.5rem 1.2rem;background:var(--amber);color:var(--forest-deep);border:none;border-radius:50px;font-weight:700;font-size:0.8rem;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s}
.product-btn:hover{background:var(--amber-glow);transform:translateY(-2px);box-shadow:0 4px 15px rgba(212,145,59,0.4)}
.shop-mission{background:var(--forest-deep);border-radius:20px;padding:3rem;display:flex;align-items:center;gap:3rem;margin:3.5rem 0;overflow:hidden;position:relative}
.shop-mission::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 80% 50%,rgba(168,196,158,0.08) 0%,transparent 50%)}
.shop-mission-text{position:relative;flex:1}
.shop-mission-text h3{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:white;margin-bottom:0.8rem;line-height:1.3}
.shop-mission-text p{font-size:1rem;color:rgba(255,255,255,0.65);line-height:1.7}
.mission-stats{display:flex;gap:2.5rem;margin-top:1.5rem}
.mission-stat{text-align:center}
.mission-stat-num{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--amber)}
.mission-stat-label{font-size:0.75rem;font-weight:600;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:1px;margin-top:0.2rem}
.shop-mission-icon{font-size:6rem;opacity:0.15;position:relative}
.how-it-works{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:2rem}
.how-step{text-align:center;padding:2rem 1.5rem;background:white;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06)}
.how-step-num{width:48px;height:48px;border-radius:50%;background:var(--forest);color:white;display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:900;margin:0 auto 1rem}
.how-step h4{font-family:'Playfair Display',serif;font-size:1.1rem;color:var(--forest-deep);margin-bottom:0.5rem}
.how-step p{font-size:0.88rem;color:var(--text-muted);line-height:1.6}
.faq-list{max-width:700px;margin:2rem auto 0}
.faq-item{border-bottom:1px solid #e0e0e0;padding:1.2rem 0}
.faq-item:last-child{border-bottom:none}
.faq-question{font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--forest-deep);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem}
.faq-question::after{content:'+';font-size:1.5rem;color:var(--sage);font-weight:300;transition:transform 0.3s}
.faq-item.open .faq-question::after{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease,padding 0.3s;font-size:0.92rem;color:var(--text-muted);line-height:1.7}
.faq-item.open .faq-answer{max-height:200px;padding-top:0.8rem}
@media(max-width:968px){.product-grid{grid-template-columns:1fr 1fr}.shop-mission{flex-direction:column;text-align:center;padding:2rem}.mission-stats{justify-content:center}.how-it-works{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto}}
@media(max-width:600px){.product-grid{grid-template-columns:1fr;max-width:400px;margin-left:auto;margin-right:auto}.shop-tabs{gap:0.3rem}.shop-tab{font-size:0.75rem;padding:0.45rem 1rem}.mission-stats{flex-direction:column;gap:1rem}}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">Support Our Mission</p>
    <h1>The NEMO <em>Shop</em></h1>
    <p>Every purchase supports wildlife conservation and environmental education. Wear your values, make a difference.</p>
</div>

<section class="section">
<div class="container">
    <div class="shop-intro">
        <div class="shop-badge"><span>&#127793;</span> Eco-Friendly &bull; Print-on-Demand &bull; Zero Waste</div>
        <p>All merch is printed on demand using eco-friendly inks and sustainable materials. No excess inventory, no waste — just gear that makes a statement for the planet.</p>
    </div>

    <!-- Category Tabs -->
    <div class="shop-tabs">
        <button class="shop-tab active" onclick="filterProducts('all',this)">All</button>
        <button class="shop-tab" onclick="filterProducts('apparel',this)">Apparel</button>
        <button class="shop-tab" onclick="filterProducts('accessories',this)">Accessories</button>
        <button class="shop-tab" onclick="filterProducts('eco',this)">Eco Goods</button>
        <button class="shop-tab" onclick="filterProducts('prints',this)">Art Prints</button>
    </div>

    <!-- Products -->
    <div class="product-grid" id="productGrid">
        <div class="product-card" data-category="apparel">
            <div class="product-img apparel"><span class="product-tag new">NEW</span><div class="product-placeholder"><span>&#128085;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Apparel</p><h3>NEMO Classic Tee</h3><p>Organic cotton t-shirt featuring the ProjectNEMO logo. Available in forest green, ocean blue, and sand.</p><div class="product-footer"><span class="product-price">$28</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="apparel">
            <div class="product-img apparel"><div class="product-placeholder"><span>&#129509;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Apparel</p><h3>Wildlife Defender Hoodie</h3><p>Cozy organic hoodie with nature-inspired artwork on the back. Perfect for chilly fieldwork mornings.</p><div class="product-footer"><span class="product-price">$52</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="apparel">
            <div class="product-img apparel"><span class="product-tag eco-badge">100% ORGANIC</span><div class="product-placeholder"><span>&#129506;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Apparel</p><h3>NEMO Dad Hat</h3><p>Embroidered cotton cap with the NEMO logo. Low-profile, adjustable — great for the field or everyday wear.</p><div class="product-footer"><span class="product-price">$24</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="accessories">
            <div class="product-img accessories"><div class="product-placeholder"><span>&#127890;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Accessories</p><h3>Field Pack Tote Bag</h3><p>Heavy-duty recycled canvas tote. Carry your groceries, gear, or books — and ditch the plastic bags.</p><div class="product-footer"><span class="product-price">$18</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="accessories">
            <div class="product-img accessories"><span class="product-tag new">NEW</span><div class="product-placeholder"><span>&#128241;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Accessories</p><h3>Wildlife Phone Case</h3><p>Biodegradable phone case featuring original wildlife illustrations. Available for most phone models.</p><div class="product-footer"><span class="product-price">$22</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="eco">
            <div class="product-img eco"><span class="product-tag eco-badge">ECO</span><div class="product-placeholder"><span>&#127862;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Eco Goods</p><h3>NEMO Water Bottle</h3><p>Insulated stainless steel water bottle with NEMO branding. Keeps drinks cold 24hrs, hot 12hrs.</p><div class="product-footer"><span class="product-price">$32</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="eco">
            <div class="product-img eco"><div class="product-placeholder"><span>&#127757;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Eco Goods</p><h3>Beeswax Wrap Set</h3><p>Set of 3 reusable beeswax food wraps with wildlife prints. Replace plastic wrap for good.</p><div class="product-footer"><span class="product-price">$16</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="prints">
            <div class="product-img prints"><div class="product-placeholder"><span>&#128444;&#65039;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Art Prints</p><h3>Wildlife Series Print</h3><p>Museum-quality art prints on recycled paper. Featuring original wildlife photography and illustrations.</p><div class="product-footer"><span class="product-price">$20</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
        <div class="product-card" data-category="accessories">
            <div class="product-img accessories"><div class="product-placeholder"><span>&#127991;&#65039;</span>Your Design Here</div></div>
            <div class="product-body"><p class="product-category">Accessories</p><h3>NEMO Sticker Pack</h3><p>Set of 8 vinyl stickers — wildlife, nature quotes, and the NEMO logo. Waterproof and durable.</p><div class="product-footer"><span class="product-price">$8</span><button class="product-btn" onclick="alert('Store coming soon! We\'ll connect this to a print-on-demand service.')">Coming Soon</button></div></div>
        </div>
    </div>

    <!-- Mission Banner -->
    <div class="shop-mission">
        <div class="shop-mission-text">
            <h3>Every Purchase Supports the Mission</h3>
            <p>A portion of all shop proceeds goes directly to the conservation organizations we partner with. When you wear NEMO gear, you're funding real change on the ground.</p>
            <div class="mission-stats">
                <div class="mission-stat"><div class="mission-stat-num">15%</div><div class="mission-stat-label">To Conservation</div></div>
                <div class="mission-stat"><div class="mission-stat-num">100%</div><div class="mission-stat-label">Eco-Friendly</div></div>
                <div class="mission-stat"><div class="mission-stat-num">0</div><div class="mission-stat-label">Waste Produced</div></div>
            </div>
        </div>
        <div class="shop-mission-icon">&#127757;</div>
    </div>
</div>
</section>

<!-- How It Works -->
<section class="section section-alt">
<div class="container">
    <div style="text-align:center;margin-bottom:2rem;"><p class="section-label">How It Works</p><h2 class="section-title" style="text-align:center">Print-on-Demand, Zero Waste</h2></div>
    <div class="how-it-works">
        <div class="how-step"><div class="how-step-num">1</div><h4>You Order</h4><p>Browse the shop and pick the gear you love. Your order is placed with our print-on-demand partner.</p></div>
        <div class="how-step"><div class="how-step-num">2</div><h4>We Print</h4><p>Your item is printed just for you using eco-friendly inks on sustainable materials. No excess inventory.</p></div>
        <div class="how-step"><div class="how-step-num">3</div><h4>It Ships</h4><p>Shipped directly to you in recycled packaging. A portion of the sale goes to wildlife conservation.</p></div>
    </div>
</div>
</section>

<!-- FAQ -->
<section class="section">
<div class="container">
    <div style="text-align:center;margin-bottom:1rem;"><p class="section-label">Questions?</p><h2 class="section-title" style="text-align:center">Frequently Asked</h2></div>
    <div class="faq-list">
        <div class="faq-item" onclick="this.classList.toggle('open')"><div class="faq-question">Where does the money go?</div><div class="faq-answer">15% of all proceeds go directly to our partner conservation organizations. The rest covers production costs, shipping, and helps fund ProjectNEMO's educational content and operations.</div></div>
        <div class="faq-item" onclick="this.classList.toggle('open')"><div class="faq-question">Are the products really eco-friendly?</div><div class="faq-answer">Yes! We use organic and recycled materials wherever possible, eco-friendly water-based inks, and recycled packaging. Our print-on-demand model means zero excess inventory and zero waste.</div></div>
        <div class="faq-item" onclick="this.classList.toggle('open')"><div class="faq-question">How long does shipping take?</div><div class="faq-answer">Since items are printed on demand, production takes 2-5 business days. Shipping typically takes 5-10 business days depending on your location.</div></div>
        <div class="faq-item" onclick="this.classList.toggle('open')"><div class="faq-question">Can I return or exchange items?</div><div class="faq-answer">Because items are made just for you, we can't accept returns for change of mind. However, if there's a defect or printing error, we'll replace it — just contact us within 14 days.</div></div>
        <div class="faq-item" onclick="this.classList.toggle('open')"><div class="faq-question">Do you ship internationally?</div><div class="faq-answer">Yes! We ship worldwide. Shipping costs and delivery times vary by location. International orders may be subject to local customs duties and taxes.</div></div>
    </div>
</div>
</section>
@endsection

@section('scripts')
<script>
function filterProducts(category, btn) {
    document.querySelectorAll('.shop-tab').forEach(function(t) { t.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelectorAll('.product-card').forEach(function(card) {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = '';
            setTimeout(function() { card.style.opacity = '1'; card.style.transform = 'translateY(0)'; }, 50);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
            setTimeout(function() { card.style.display = 'none'; }, 300);
        }
    });
}
</script>
@endsection
