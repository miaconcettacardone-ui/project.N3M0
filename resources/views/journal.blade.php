@extends('layouts.app')
@section('title', 'The NEMO Journal — ProjectNEMO')
@section('extra-styles')
/* Hero */
.journal-date{font-size:0.85rem;font-weight:600;letter-spacing:2px;color:var(--amber);text-transform:uppercase;margin-bottom:0.5rem}

/* Daily Cards */
.daily-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-bottom:4rem}
.daily-card{background:white;border-radius:20px;padding:2.5rem;box-shadow:0 8px 40px rgba(0,0,0,0.08);position:relative;overflow:hidden}
.daily-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px}
.daily-card.quote-card::before{background:linear-gradient(90deg,var(--forest),var(--sage))}
.daily-card.vocab-card::before{background:linear-gradient(90deg,var(--amber),var(--amber-glow))}
.daily-label{font-size:0.75rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:1.2rem;display:flex;align-items:center;gap:0.5rem}
.daily-label.quote{color:var(--forest)}
.daily-label.vocab{color:var(--amber)}
.quote-text{font-family:'Playfair Display',serif;font-size:1.4rem;font-style:italic;color:var(--forest-deep);line-height:1.6;margin-bottom:1rem;position:relative;padding-left:1.5rem}
.quote-text::before{content:'\201C';position:absolute;left:0;top:-0.5rem;font-size:3rem;color:var(--sage-light);line-height:1;font-family:'Playfair Display',serif}
.quote-author{font-size:0.9rem;font-weight:700;color:var(--sage);padding-left:1.5rem}
.quote-category-tag{display:inline-block;font-size:0.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:0.2rem 0.7rem;border-radius:50px;margin-bottom:1rem;padding-left:1.5rem}
.vocab-word{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--forest-deep);margin-bottom:0.2rem}
.vocab-pronunciation{font-size:0.9rem;color:var(--text-muted);margin-bottom:0.3rem;font-style:italic}
.vocab-pos{display:inline-block;font-size:0.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--amber);background:rgba(212,145,59,0.1);padding:0.2rem 0.7rem;border-radius:50px;margin-bottom:1rem}
.vocab-definition{font-size:1rem;color:var(--text-dark);line-height:1.7;margin-bottom:0.8rem}
.vocab-example{font-size:0.9rem;color:var(--text-muted);line-height:1.6;font-style:italic;border-left:3px solid var(--sage-light);padding-left:1rem}
.vocab-cat{font-size:0.75rem;font-weight:700;color:var(--sage);text-transform:uppercase;letter-spacing:1px;margin-top:1rem}

/* Filter Tabs */
.journal-tabs{display:flex;gap:0.5rem;margin-bottom:2rem;flex-wrap:wrap}
.journal-tab{padding:0.5rem 1.2rem;border-radius:50px;border:2px solid var(--sage-light);background:transparent;color:var(--forest-deep);font-size:0.8rem;font-weight:700;letter-spacing:0.5px;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.3s}
.journal-tab:hover{border-color:var(--forest);background:var(--sand-light)}
.journal-tab.active{background:var(--forest);color:white;border-color:var(--forest)}

/* Quote Wall */
.quote-wall{columns:2;gap:1.5rem;margin-bottom:4rem}
.quote-brick{break-inside:avoid;background:white;border-radius:14px;padding:1.8rem;margin-bottom:1.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);border-left:3px solid var(--sage)}
.quote-brick.wildlife{border-left-color:#7c9a72}
.quote-brick.conservation{border-left-color:#3d8fa3}
.quote-brick.scientific{border-left-color:#8e44ad}
.quote-brick.personal{border-left-color:#d4913b}
.quote-brick-text{font-family:'Playfair Display',serif;font-size:1rem;font-style:italic;color:var(--forest-deep);line-height:1.7;margin-bottom:0.8rem}
.quote-brick-author{font-size:0.82rem;font-weight:700;color:var(--text-muted)}
.quote-brick-cat{font-size:0.68rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-top:0.5rem}
.quote-brick-cat.wildlife{color:#7c9a72}
.quote-brick-cat.conservation{color:#3d8fa3}
.quote-brick-cat.scientific{color:#8e44ad}
.quote-brick-cat.personal{color:#d4913b}

/* Vocab List */
.vocab-list{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:4rem}
.vocab-item{background:white;border-radius:14px;padding:1.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);border-top:3px solid var(--amber)}
.vocab-item-word{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:900;color:var(--forest-deep);margin-bottom:0.2rem}
.vocab-item-pos{font-size:0.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--amber);margin-bottom:0.6rem}
.vocab-item-def{font-size:0.88rem;color:var(--text-muted);line-height:1.6}

.empty-state{text-align:center;padding:3rem;color:var(--text-muted);font-size:1rem}

@media(max-width:968px){
    .daily-grid{grid-template-columns:1fr}
    .quote-wall{columns:1}
    .vocab-list{grid-template-columns:1fr 1fr}
}
@media(max-width:600px){
    .vocab-list{grid-template-columns:1fr}
}
@endsection

@section('content')
<div class="page-hero">
    <p class="page-hero-label">Daily Inspiration</p>
    <h1>The NEMO <em>Journal</em></h1>
    <p>A quote of the day, a word of the day, and a growing wall of wisdom from the natural world.</p>
</div>

<section class="section"><div class="container">
    <p class="journal-date">{{ now()->format('l, F j, Y') }}</p>

    <!-- Daily Cards -->
    <div class="daily-grid">
        <!-- Quote of the Day -->
        <div class="daily-card quote-card">
            <p class="daily-label quote">🌿 Quote of the Day</p>
            @if($quoteOfDay)
                <p class="quote-text">{{ $quoteOfDay->quote }}</p>
                <p class="quote-author">— {{ $quoteOfDay->author }}</p>
            @else
                <p class="empty-state">No quotes yet — add some in the admin panel!</p>
            @endif
        </div>

        <!-- Word of the Day -->
        <div class="daily-card vocab-card">
            <p class="daily-label vocab">📖 Word of the Day</p>
            @if($vocabOfDay)
                <p class="vocab-word">{{ $vocabOfDay->word }}</p>
                @if($vocabOfDay->pronunciation)
                    <p class="vocab-pronunciation">{{ $vocabOfDay->pronunciation }}</p>
                @endif
                <span class="vocab-pos">{{ $vocabOfDay->part_of_speech }}</span>
                <p class="vocab-definition">{{ $vocabOfDay->definition }}</p>
                @if($vocabOfDay->example)
                    <p class="vocab-example">"{{ $vocabOfDay->example }}"</p>
                @endif
                @if($vocabOfDay->category)
                    <p class="vocab-cat">{{ $vocabOfDay->category }}</p>
                @endif
            @else
                <p class="empty-state">No vocab yet — add some in the admin panel!</p>
            @endif
        </div>
    </div>

    <!-- Quote Wall -->
    <div>
        <p class="section-label">All Quotes</p>
        <h2 class="section-title">Quote Wall</h2>
        <div class="journal-tabs" id="quoteTabs">
            <button class="journal-tab active" onclick="filterQuotes('all',this)">All</button>
            <button class="journal-tab" onclick="filterQuotes('wildlife',this)">🌿 Wildlife</button>
            <button class="journal-tab" onclick="filterQuotes('conservation',this)">🌍 Conservation</button>
            <button class="journal-tab" onclick="filterQuotes('scientific',this)">🔬 Scientific</button>
            <button class="journal-tab" onclick="filterQuotes('personal',this)">💛 Mia's Favorites</button>
        </div>
        @if($quotes->count())
        <div class="quote-wall" id="quoteWall">
            @foreach($quotes as $quote)
            <div class="quote-brick {{ $quote->category }}" data-category="{{ $quote->category }}">
                <p class="quote-brick-text">"{{ $quote->quote }}"</p>
                <p class="quote-brick-author">— {{ $quote->author }}</p>
                <p class="quote-brick-cat {{ $quote->category }}">{{ ucfirst($quote->category) }}</p>
            </div>
            @endforeach
        </div>
        @else
        <p class="empty-state">No quotes added yet. Visit the admin panel to add some!</p>
        @endif
    </div>

    <!-- Vocab List -->
    <div style="margin-top:4rem">
        <p class="section-label">All Words</p>
        <h2 class="section-title">Vocab Wall</h2>
        @if($vocabs->count())
        <div class="vocab-list">
            @foreach($vocabs as $vocab)
            <div class="vocab-item">
                <p class="vocab-item-word">{{ $vocab->word }}</p>
                <p class="vocab-item-pos">{{ $vocab->part_of_speech }}{{ $vocab->category ? ' · '.$vocab->category : '' }}</p>
                <p class="vocab-item-def">{{ $vocab->definition }}</p>
            </div>
            @endforeach
        </div>
        @else
        <p class="empty-state">No vocab added yet. Visit the admin panel to add some!</p>
        @endif
    </div>
</div></section>
@endsection

@section('scripts')
<script>
function filterQuotes(category, btn) {
    document.querySelectorAll('#quoteTabs .journal-tab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#quoteWall .quote-brick').forEach(brick => {
        brick.style.display = (category === 'all' || brick.dataset.category === category) ? 'block' : 'none';
    });
}
</script>
@endsection