@extends('layouts.app')
@section('title', 'World Map — ProjectNEMO')
@section('extra-styles')
.map-intro{text-align:center;max-width:700px;margin:0 auto 2.5rem}
.map-intro p{font-size:1.05rem;color:var(--text-muted);line-height:1.7}

/* Filter Controls */
.map-filters{display:flex;flex-wrap:wrap;justify-content:center;gap:0.6rem;margin-bottom:2rem}
.filter-btn{padding:0.5rem 1.2rem;border-radius:50px;border:2px solid var(--sage-light);background:transparent;color:var(--forest-deep);font-size:0.8rem;font-weight:700;letter-spacing:0.5px;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s;display:flex;align-items:center;gap:0.4rem}
.filter-btn:hover{border-color:var(--forest);background:var(--sand-light)}
.filter-btn.active{background:var(--forest);color:white;border-color:var(--forest)}
.filter-dot{width:8px;height:8px;border-radius:50%;display:inline-block}
.filter-dot.fieldwork{background:#d4913b}
.filter-dot.partners{background:#3d8fa3}
.filter-dot.volunteer{background:#7c9a72}
.filter-dot.wildlife{background:#c0392b}
.filter-dot.funfacts{background:#8e44ad}

/* Map Container */
.map-container{position:relative;width:100%;border-radius:20px;overflow:hidden;box-shadow:0 12px 50px rgba(0,0,0,0.15);background:var(--forest-deep)}
#world-map{width:100%;height:550px}

/* Map Legend */
.map-legend{display:flex;flex-wrap:wrap;justify-content:center;gap:1.5rem;margin-top:1.5rem;padding:1rem;background:white;border-radius:12px;box-shadow:0 4px 20px rgba(0,0,0,0.06)}
.legend-item{display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;font-weight:600;color:var(--text-muted)}
.legend-dot{width:10px;height:10px;border-radius:50%}

/* Info Panel (popup) */
.map-popup{display:none;position:absolute;z-index:50;background:white;border-radius:16px;box-shadow:0 15px 50px rgba(0,0,0,0.2);max-width:340px;width:90%;overflow:hidden;animation:popupIn 0.3s ease}
@keyframes popupIn{from{opacity:0;transform:translate(-50%,-50%) scale(0.95)}to{opacity:1;transform:translate(-50%,-50%) scale(1)}}
.map-popup.show{display:block}
.popup-header{padding:1rem 1.2rem 0.8rem;border-bottom:1px solid #eee;display:flex;justify-content:space-between;align-items:start;gap:0.8rem}
.popup-header h3{font-family:'Playfair Display',serif;font-size:1.15rem;color:var(--forest-deep);line-height:1.3}
.popup-header .popup-tag{font-size:0.65rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:0.2rem 0.6rem;border-radius:50px;white-space:nowrap}
.popup-tag.fieldwork{background:#fef0db;color:#b5751a}
.popup-tag.partners{background:#dff0f7;color:#1a6a8a}
.popup-tag.volunteer{background:#e5f2e0;color:#3a6b2a}
.popup-tag.wildlife{background:#fde8e8;color:#922b2b}
.popup-tag.funfacts{background:#f0e6f6;color:#6a2d8a}
.popup-close{background:none;border:none;font-size:1.4rem;cursor:pointer;color:var(--text-muted);padding:0;line-height:1;transition:color 0.2s;flex-shrink:0}
.popup-close:hover{color:var(--forest-deep)}
.popup-body{padding:1rem 1.2rem}
.popup-body p{font-size:0.9rem;color:var(--text-muted);line-height:1.65;margin-bottom:0.8rem}
.popup-body .popup-location{font-size:0.78rem;font-weight:600;color:var(--sage);margin-bottom:0.5rem;display:flex;align-items:center;gap:0.3rem}
.popup-images{display:flex;gap:0.5rem;margin-bottom:0.8rem}
.popup-img-placeholder{width:80px;height:60px;border-radius:8px;background:linear-gradient(135deg,var(--sage),var(--forest));display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:rgba(255,255,255,0.8)}
.popup-links{display:flex;gap:0.5rem;flex-wrap:wrap}
.popup-link{font-size:0.78rem;font-weight:700;color:var(--amber);text-decoration:none;padding:0.3rem 0.8rem;border:1.5px solid var(--amber);border-radius:50px;transition:all 0.2s}
.popup-link:hover{background:var(--amber);color:var(--forest-deep)}

/* Stats Bar */
.map-stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem}
.stat-card{text-align:center;background:white;padding:2rem 1rem;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.06)}
.stat-number{font-family:'Playfair Display',serif;font-size:2.5rem;font-weight:900;color:var(--forest-deep);line-height:1}
.stat-label{font-size:0.82rem;color:var(--text-muted);font-weight:600;margin-top:0.4rem;letter-spacing:0.5px;text-transform:uppercase}

/* CTA */
.map-cta{text-align:center;margin-top:3rem}
.map-cta p{font-size:1rem;color:var(--text-muted);margin-bottom:1.2rem}

/* Leaflet overrides */
.leaflet-control-zoom a{background:var(--forest) !important;color:white !important;border:none !important}
.leaflet-control-zoom a:hover{background:var(--forest-deep) !important}
.custom-pin{background:transparent !important;border:none !important}

@media(max-width:968px){
    #world-map{height:380px}
    .map-stats{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:600px){
    #world-map{height:300px}
    .map-filters{gap:0.4rem}
    .filter-btn{font-size:0.72rem;padding:0.4rem 0.9rem}
    .map-stats{grid-template-columns:1fr 1fr}
}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">Explore the Globe</p>
    <h1>Our <em>World Map</em></h1>
    <p>Discover where ProjectNEMO operates, where I've done fieldwork, and the incredible wildlife and organizations that inspire our mission.</p>
</div>

<section class="section">
<div class="container">
    <div class="map-intro">
        <p>Click on any pin to learn more — from the wildlife I've encountered to the organizations making a real difference on the ground. Each location tells a story.</p>
    </div>

    <!-- Filters -->
    <div class="map-filters">
        <button class="filter-btn active" onclick="filterPins('all',this)">All Pins</button>
        <button class="filter-btn" onclick="filterPins('fieldwork',this)"><span class="filter-dot fieldwork"></span> Fieldwork</button>
        <button class="filter-btn" onclick="filterPins('partners',this)"><span class="filter-dot partners"></span> Partners</button>
        <button class="filter-btn" onclick="filterPins('volunteer',this)"><span class="filter-dot volunteer"></span> Volunteer</button>
        <button class="filter-btn" onclick="filterPins('wildlife',this)"><span class="filter-dot wildlife"></span> Wildlife Hotspots</button>
        <button class="filter-btn" onclick="filterPins('funfacts',this)"><span class="filter-dot funfacts"></span> Fun Facts</button>
    </div>

    <!-- Map -->
    <div class="map-container" id="mapContainer">
        <div id="world-map"></div>

        <!-- Popup -->
        <div class="map-popup" id="mapPopup">
            <div class="popup-header">
                <div>
                    <span class="popup-tag" id="popupTag">FIELDWORK</span>
                    <h3 id="popupTitle">Location Name</h3>
                </div>
                <button class="popup-close" onclick="closePopup()">&times;</button>
            </div>
            <div class="popup-body">
                <p class="popup-location" id="popupLocation">&#128205; Location</p>
                <div class="popup-images" id="popupImages"></div>
                <p id="popupDesc">Description goes here.</p>
                <div class="popup-links" id="popupLinks"></div>
            </div>
        </div>
    </div>

    <!-- Legend -->
    <div class="map-legend">
        <div class="legend-item"><div class="legend-dot" style="background:#d4913b"></div> Fieldwork</div>
        <div class="legend-item"><div class="legend-dot" style="background:#3d8fa3"></div> Partner Organizations</div>
        <div class="legend-item"><div class="legend-dot" style="background:#7c9a72"></div> Volunteer Opportunities</div>
        <div class="legend-item"><div class="legend-dot" style="background:#c0392b"></div> Wildlife Hotspots</div>
        <div class="legend-item"><div class="legend-dot" style="background:#8e44ad"></div> Fun Facts</div>
    </div>

    <!-- Stats -->
    <div class="map-stats">
        <div class="stat-card"><div class="stat-number">12</div><div class="stat-label">Countries Visited</div></div>
        <div class="stat-card"><div class="stat-number">8</div><div class="stat-label">Partner Orgs</div></div>
        <div class="stat-card"><div class="stat-number">25+</div><div class="stat-label">Species Documented</div></div>
        <div class="stat-card"><div class="stat-number">5</div><div class="stat-label">Volunteer Programs</div></div>
    </div>

    <!-- CTA -->
    <div class="map-cta">
        <p>Know of an organization or wildlife hotspot we should feature? Let us know!</p>
        <a href="/contact" class="btn-primary">Suggest a Location</a>
    </div>
</div>
</section>
@endsection

@section('scripts')
<!-- Leaflet CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
// ============================
// MAP PIN DATA
// Edit this array to add/remove/change pins!
// Categories: fieldwork, partners, volunteer, wildlife, funfacts
// ============================
const mapPins = [
    {
        lat: -23.5505, lng: -46.6333,
        title: "Atlantic Forest Research",
        location: "São Paulo, Brazil",
        category: "fieldwork",
        description: "Home to over 500 bird species. The Atlantic Forest is one of the most threatened biomes in the world, with only 12% of its original cover remaining.",
        images: ["🦜","🌳"],
        links: [{label:"Read Article", url:"/articles"},{label:"Volunteer", url:"/volunteer"}]
    },
    {
        lat: -19.8, lng: 29.85,
        title: "Rescue Dogs for Wildlife",
        location: "Monde Village, Zimbabwe",
        category: "partners",
        description: "Rescuing abused and stray dogs and training them as tracking and medical alert dogs to help protect wildlife by finding poachers and saving endangered animals.",
        images: ["🐕","🦏"],
        links: [{label:"Donate", url:"/donate"},{label:"Learn More", url:"/resources"}]
    },
    {
        lat: 1.3521, lng: 103.8198,
        title: "Singapore Wildlife Reserves",
        location: "Singapore",
        category: "wildlife",
        description: "A world-leading zoological institution pioneering conservation and breeding programs for critically endangered species across Southeast Asia.",
        images: ["🦧","🌿"],
        links: [{label:"Wildlife Spotlight", url:"/wildlife"}]
    },
    {
        lat: -1.2921, lng: 36.8219,
        title: "Nairobi National Park",
        location: "Nairobi, Kenya",
        category: "wildlife",
        description: "The only national park within a capital city. Home to lions, giraffes, rhinos, and over 400 bird species — all within sight of the city skyline.",
        images: ["🦁","🦒"],
        links: [{label:"Gallery", url:"/gallery"}]
    },
    {
        lat: 21.1619, lng: -86.8515,
        title: "Sea Turtle Conservation",
        location: "Cancún, Mexico",
        category: "volunteer",
        description: "Join nightly beach patrols to protect nesting sea turtles and help hatchlings reach the ocean safely. Programs run May through November.",
        images: ["🐢","🏖️"],
        links: [{label:"Volunteer Info", url:"/volunteer"}]
    },
    {
        lat: -13.1631, lng: -72.5450,
        title: "Cloud Forest Orchids",
        location: "Cusco Region, Peru",
        category: "funfacts",
        description: "The cloud forests surrounding Machu Picchu contain over 400 species of orchids — more than 10% of all orchid species found in Peru!",
        images: ["🌺","⛰️"],
        links: [{label:"Discover More", url:"/discovery"}]
    },
    {
        lat: 64.9631, lng: -19.0208,
        title: "Puffin Monitoring Project",
        location: "Vestmannaeyjar, Iceland",
        category: "fieldwork",
        description: "Monitoring Atlantic Puffin colonies whose populations have declined significantly due to climate-driven changes in ocean food chains.",
        images: ["🐧","🌊"],
        links: [{label:"Read Article", url:"/articles"}]
    },
    {
        lat: -33.8688, lng: 151.2093,
        title: "Great Barrier Reef Foundation",
        location: "Sydney, Australia",
        category: "partners",
        description: "Working to protect and restore the Great Barrier Reef through science, technology, and community engagement. The reef supports over 1,500 species of fish.",
        images: ["🐠","🪸"],
        links: [{label:"Learn More", url:"/resources"},{label:"Donate", url:"/donate"}]
    },
    {
        lat: 27.1751, lng: 78.0421,
        title: "Ganges River Dolphin",
        location: "Agra, India",
        category: "funfacts",
        description: "The Yamuna River is home to the critically endangered Ganges River Dolphin — one of only 4 freshwater dolphin species left on Earth.",
        images: ["🐬","🏛️"],
        links: [{label:"Wildlife Spotlight", url:"/wildlife"}]
    },
    {
        lat: -3.0674, lng: 37.3556,
        title: "Mount Kilimanjaro Ecosystem",
        location: "Tanzania",
        category: "wildlife",
        description: "Africa's tallest peak spans 5 distinct climate zones from tropical to arctic, each supporting unique species adapted to their elevation band.",
        images: ["🏔️","🐘"],
        links: [{label:"Discovery Log", url:"/discovery"}]
    },
    {
        lat: 61.2176, lng: -149.8997,
        title: "Alaska Wildlife Rehab",
        location: "Anchorage, Alaska, USA",
        category: "volunteer",
        description: "Rehabilitation center for orphaned and injured wildlife. Volunteers help care for bears, moose, bison, and raptors while they recover for release.",
        images: ["🐻","🦅"],
        links: [{label:"Volunteer Info", url:"/volunteer"}]
    },
    {
        lat: 0.3476, lng: 32.5825,
        title: "Chimpanzee Sanctuary",
        location: "Ngamba Island, Uganda",
        category: "partners",
        description: "A sanctuary for orphaned chimpanzees rescued from illegal wildlife trade. Currently caring for 49 chimps on a 100-acre forested island.",
        images: ["🐒","🌴"],
        links: [{label:"Donate", url:"/donate"},{label:"Learn More", url:"/resources"}]
    }
];

// ============================
// MAP INITIALIZATION
// ============================
const map = L.map('world-map', {
    center: [20, 0],
    zoom: 2,
    minZoom: 2,
    maxZoom: 12,
    scrollWheelZoom: true,
    zoomControl: true
});

L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; OpenStreetMap &copy; CARTO',
    maxZoom: 19
}).addTo(map);

// Category colors & icons
const categoryColors = {
    fieldwork: '#d4913b',
    partners: '#3d8fa3',
    volunteer: '#7c9a72',
    wildlife: '#c0392b',
    funfacts: '#8e44ad'
};

const categoryIcons = {
    fieldwork: '🔬',
    partners: '🤝',
    volunteer: '✋',
    wildlife: '🦁',
    funfacts: '💡'
};

function createIcon(category) {
    const color = categoryColors[category] || '#333';
    return L.divIcon({
        className: 'custom-pin',
        html: '<div style="width:32px;height:32px;border-radius:50% 50% 50% 0;background:'+color+';transform:rotate(-45deg);display:flex;align-items:center;justify-content:center;box-shadow:0 3px 12px rgba(0,0,0,0.3);border:2px solid white;cursor:pointer;"><span style="transform:rotate(45deg);font-size:14px;">'+categoryIcons[category]+'</span></div>',
        iconSize: [32, 32],
        iconAnchor: [16, 32]
    });
}

let markers = [];

mapPins.forEach(function(pin) {
    const marker = L.marker([pin.lat, pin.lng], { icon: createIcon(pin.category) }).addTo(map);
    marker.pinData = pin;
    marker.on('click', function() { showPopup(pin); });
    markers.push(marker);
});

// ============================
// POPUP
// ============================
function showPopup(pin) {
    const popup = document.getElementById('mapPopup');

    document.getElementById('popupTitle').textContent = pin.title;
    document.getElementById('popupLocation').innerHTML = '📍 ' + pin.location;
    document.getElementById('popupDesc').textContent = pin.description;

    const tag = document.getElementById('popupTag');
    tag.textContent = pin.category.toUpperCase();
    tag.className = 'popup-tag ' + pin.category;

    // Images
    const imgContainer = document.getElementById('popupImages');
    imgContainer.innerHTML = '';
    if (pin.images) {
        pin.images.forEach(function(img) {
            const div = document.createElement('div');
            div.className = 'popup-img-placeholder';
            div.textContent = img;
            imgContainer.appendChild(div);
        });
    }

    // Links
    const linksContainer = document.getElementById('popupLinks');
    linksContainer.innerHTML = '';
    if (pin.links) {
        pin.links.forEach(function(link) {
            const a = document.createElement('a');
            a.href = link.url;
            a.className = 'popup-link';
            a.textContent = link.label;
            linksContainer.appendChild(a);
        });
    }

    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.classList.add('show');

    map.flyTo([pin.lat, pin.lng], Math.max(map.getZoom(), 4), { duration: 0.8 });
}

function closePopup() {
    document.getElementById('mapPopup').classList.remove('show');
}

map.on('click', closePopup);

// ============================
// FILTER
// ============================
function filterPins(category, btn) {
    document.querySelectorAll('.filter-btn').forEach(function(b) { b.classList.remove('active'); });
    btn.classList.add('active');

    markers.forEach(function(marker) {
        var el = marker.getElement();
        if (el) {
            if (category === 'all' || marker.pinData.category === category) {
                el.style.opacity = '1';
                el.style.pointerEvents = 'auto';
            } else {
                el.style.opacity = '0.15';
                el.style.pointerEvents = 'none';
            }
        }
    });

    closePopup();
}
</script>
@endsection
