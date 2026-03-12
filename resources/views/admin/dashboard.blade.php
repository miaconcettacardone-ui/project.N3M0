@extends('layouts.app')
@section('title', 'Admin Dashboard — ProjectNEMO')
@section('extra-styles')
.admin-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;flex-wrap:wrap;gap:1rem}
.admin-tabs{display:flex;gap:0.5rem;margin-bottom:2rem}
.admin-tab{padding:0.6rem 1.5rem;border-radius:50px;border:2px solid var(--sage-light);background:transparent;color:var(--forest-deep);font-size:0.85rem;font-weight:700;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.2s}
.admin-tab.active{background:var(--forest);color:white;border-color:var(--forest)}
.admin-section{display:none}
.admin-section.active{display:block}
.add-form{background:white;border-radius:16px;padding:2rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);margin-bottom:2rem}
.add-form h3{font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--forest-deep);margin-bottom:1.2rem}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.form-group{margin-bottom:1rem}
.form-group label{display:block;font-size:0.82rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.3rem}
.form-control{width:100%;padding:0.65rem 0.9rem;border:1.5px solid #e0e0e0;border-radius:8px;font-size:0.9rem;font-family:'Source Sans 3',sans-serif;outline:none;transition:border-color 0.2s;box-sizing:border-box}
.form-control:focus{border-color:var(--sage)}
textarea.form-control{resize:vertical;min-height:80px}
.items-list{display:flex;flex-direction:column;gap:1rem}
.item-card{background:white;border-radius:12px;padding:1.2rem 1.5rem;box-shadow:0 2px 12px rgba(0,0,0,0.05);border-left:4px solid var(--sage)}
.item-card.inactive{opacity:0.5;border-left-color:#ccc}
.item-card.wildlife{border-left-color:#7c9a72}
.item-card.conservation{border-left-color:#3d8fa3}
.item-card.scientific{border-left-color:#8e44ad}
.item-card.personal{border-left-color:#d4913b}
.item-top{display:flex;align-items:flex-start;gap:1rem}
.item-content{flex:1}
.item-content strong{font-family:'Playfair Display',serif;font-size:1rem;color:var(--forest-deep)}
.item-content p{font-size:0.85rem;color:var(--text-muted);margin-top:0.2rem;line-height:1.5}
.item-meta{font-size:0.72rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:var(--sage);margin-top:0.4rem}
.item-actions{display:flex;gap:0.5rem;flex-shrink:0}
.btn-sm{padding:0.3rem 0.8rem;border-radius:6px;border:none;font-size:0.78rem;font-weight:700;cursor:pointer;font-family:'Source Sans 3',sans-serif;transition:all 0.2s}
.btn-toggle{background:var(--sand-light);color:var(--forest-deep)}
.btn-toggle:hover{background:var(--sage-light)}
.btn-delete{background:#fee;color:#c0392b}
.btn-delete:hover{background:#fdd}
.btn-edit{background:#e8f4f8;color:#2980b9}
.btn-edit:hover{background:#d0eaf5}
.edit-form{display:none;margin-top:1rem;padding-top:1rem;border-top:1px solid #eee}
.alert-success{background:#efffef;border-left:3px solid #27ae60;padding:0.8rem 1rem;border-radius:8px;color:#27ae60;font-size:0.88rem;margin-bottom:1.5rem}
.stats-row{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;margin-bottom:2rem}
.stat-box{background:white;border-radius:12px;padding:1.2rem;text-align:center;box-shadow:0 2px 12px rgba(0,0,0,0.05)}
.stat-box .num{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--forest)}
.stat-box .lbl{font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:var(--text-muted);margin-top:0.2rem}
@media(max-width:768px){.form-row{grid-template-columns:1fr}.stats-row{grid-template-columns:1fr 1fr}}
@endsection

@section('content')
<div class="page-hero" style="padding:4rem 0 3rem">
    <p class="page-hero-label">Admin</p>
    <h1>Journal <em>Dashboard</em></h1>
</div>

<section class="section"><div class="container">
    <div class="admin-header">
        <div>
            @if(session('success'))
                <div class="alert-success">✓ {{ session('success') }}</div>
            @endif
        </div>
    </div>

    <div class="stats-row">
        <div class="stat-box"><div class="num">{{ $quotes->count() }}</div><div class="lbl">Total Quotes</div></div>
        <div class="stat-box"><div class="num">{{ $quotes->where('active',true)->count() }}</div><div class="lbl">Active Quotes</div></div>
        <div class="stat-box"><div class="num">{{ $vocabs->count() }}</div><div class="lbl">Total Words</div></div>
        <div class="stat-box"><div class="num">{{ $vocabs->where('active',true)->count() }}</div><div class="lbl">Active Words</div></div>
    </div>

    <div class="admin-tabs">
        <button class="admin-tab active" onclick="switchTab('quotes',this)">🌿 Quotes</button>
        <button class="admin-tab" onclick="switchTab('vocab',this)">📖 Vocab</button>
    </div>

    <div class="admin-section active" id="tab-quotes">
        <div class="add-form">
            <h3>+ Add New Quote</h3>
            <form method="POST" action="/admin/quotes">
                @csrf
                <div class="form-group">
                    <label>Quote *</label>
                    <textarea name="quote" class="form-control" placeholder="Enter the quote..." required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Author *</label>
                        <input type="text" name="author" class="form-control" placeholder="e.g. David Attenborough" required>
                    </div>
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category" class="form-control" required>
                            <option value="" disabled selected>Select category</option>
                            <option value="wildlife">🌿 Wildlife</option>
                            <option value="conservation">🌍 Conservation</option>
                            <option value="scientific">🔬 Scientific</option>
                            <option value="personal">💛 Mia's Favorites</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn-primary" style="border:none;cursor:pointer;padding:0.7rem 2rem">Add Quote</button>
            </form>
        </div>
        <div class="items-list">
            @forelse($quotes as $quote)
            <div class="item-card {{ $quote->category }} {{ $quote->active ? '' : 'inactive' }}">
                <div class="item-top">
                    <div class="item-content">
                        <strong>"{{ Str::limit($quote->quote, 100) }}"</strong>
                        <p>— {{ $quote->author }}</p>
                        <p class="item-meta">{{ ucfirst($quote->category) }} · {{ $quote->active ? 'Active' : 'Hidden' }}</p>
                    </div>
                    <div class="item-actions">
                        <button class="btn-sm btn-edit" onclick="toggleEdit('quote-{{ $quote->id }}')">Edit</button>
                        <form method="POST" action="/admin/quotes/{{ $quote->id }}/toggle">@csrf
                            <button type="submit" class="btn-sm btn-toggle">{{ $quote->active ? 'Hide' : 'Show' }}</button>
                        </form>
                        <form method="POST" action="/admin/quotes/{{ $quote->id }}/delete">@csrf @method('DELETE')
                            <button type="submit" class="btn-sm btn-delete" onclick="return confirm('Delete this quote?')">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="edit-form" id="quote-{{ $quote->id }}">
                    <form method="POST" action="/admin/quotes/{{ $quote->id }}/update">
                        @csrf
                        <div class="form-group">
                            <label>Quote</label>
                            <textarea name="quote" class="form-control">{{ $quote->quote }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $quote->author }}">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option value="wildlife" {{ $quote->category=='wildlife'?'selected':'' }}>🌿 Wildlife</option>
                                    <option value="conservation" {{ $quote->category=='conservation'?'selected':'' }}>🌍 Conservation</option>
                                    <option value="scientific" {{ $quote->category=='scientific'?'selected':'' }}>🔬 Scientific</option>
                                    <option value="personal" {{ $quote->category=='personal'?'selected':'' }}>💛 Mia's Favorites</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-sm btn-edit" style="padding:0.5rem 1.2rem">Save Changes</button>
                    </form>
                </div>
            </div>
            @empty
            <p style="color:var(--text-muted);text-align:center;padding:2rem">No quotes yet. Add one above!</p>
            @endforelse
        </div>
    </div>

    <div class="admin-section" id="tab-vocab">
        <div class="add-form">
            <h3>+ Add New Word</h3>
            <form method="POST" action="/admin/vocab">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label>Word *</label>
                        <input type="text" name="word" class="form-control" placeholder="e.g. Biodiversity" required>
                    </div>
                    <div class="form-group">
                        <label>Pronunciation</label>
                        <input type="text" name="pronunciation" class="form-control" placeholder="e.g. by-oh-dy-VER-sih-tee">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Part of Speech *</label>
                        <select name="part_of_speech" class="form-control" required>
                            <option value="" disabled selected>Select...</option>
                            <option>noun</option>
                            <option>verb</option>
                            <option>adjective</option>
                            <option>adverb</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category (field)</label>
                        <input type="text" name="category" class="form-control" placeholder="e.g. Ecology, Zoology, Botany">
                    </div>
                </div>
                <div class="form-group">
                    <label>Definition *</label>
                    <textarea name="definition" class="form-control" placeholder="Clear, accessible definition..." required></textarea>
                </div>
                <div class="form-group">
                    <label>Example sentence</label>
                    <textarea name="example" class="form-control" placeholder="Use it in a sentence..."></textarea>
                </div>
                <button type="submit" class="btn-primary" style="border:none;cursor:pointer;padding:0.7rem 2rem">Add Word</button>
            </form>
        </div>
        <div class="items-list">
            @forelse($vocabs as $vocab)
            <div class="item-card {{ $vocab->active ? '' : 'inactive' }}">
                <div class="item-top">
                    <div class="item-content">
                        <strong>{{ $vocab->word }}</strong>
                        <p>{{ $vocab->part_of_speech }}{{ $vocab->category ? ' · '.$vocab->category : '' }} — {{ Str::limit($vocab->definition, 120) }}</p>
                        <p class="item-meta">{{ $vocab->active ? 'Active' : 'Hidden' }}</p>
                    </div>
                    <div class="item-actions">
                        <button class="btn-sm btn-edit" onclick="toggleEdit('vocab-{{ $vocab->id }}')">Edit</button>
                        <form method="POST" action="/admin/vocab/{{ $vocab->id }}/toggle">@csrf
                            <button type="submit" class="btn-sm btn-toggle">{{ $vocab->active ? 'Hide' : 'Show' }}</button>
                        </form>
                        <form method="POST" action="/admin/vocab/{{ $vocab->id }}/delete">@csrf @method('DELETE')
                            <button type="submit" class="btn-sm btn-delete" onclick="return confirm('Delete this word?')">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="edit-form" id="vocab-{{ $vocab->id }}">
                    <form method="POST" action="/admin/vocab/{{ $vocab->id }}/update">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label>Word</label>
                                <input type="text" name="word" class="form-control" value="{{ $vocab->word }}">
                            </div>
                            <div class="form-group">
                                <label>Pronunciation</label>
                                <input type="text" name="pronunciation" class="form-control" value="{{ $vocab->pronunciation }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Part of Speech</label>
                                <select name="part_of_speech" class="form-control">
                                    <option {{ $vocab->part_of_speech=='noun'?'selected':'' }}>noun</option>
                                    <option {{ $vocab->part_of_speech=='verb'?'selected':'' }}>verb</option>
                                    <option {{ $vocab->part_of_speech=='adjective'?'selected':'' }}>adjective</option>
                                    <option {{ $vocab->part_of_speech=='adverb'?'selected':'' }}>adverb</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control" value="{{ $vocab->category }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Definition</label>
                            <textarea name="definition" class="form-control">{{ $vocab->definition }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Example</label>
                            <textarea name="example" class="form-control">{{ $vocab->example }}</textarea>
                        </div>
                        <button type="submit" class="btn-sm btn-edit" style="padding:0.5rem 1.2rem">Save Changes</button>
                    </form>
                </div>
            </div>
            @empty
            <p style="color:var(--text-muted);text-align:center;padding:2rem">No words yet. Add one above!</p>
            @endforelse
        </div>
    </div>
</div></section>
@endsection

@section('scripts')
<script>
function switchTab(tab, btn) {
    document.querySelectorAll('.admin-tab').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.admin-section').forEach(s => s.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('tab-' + tab).classList.add('active');
}
function toggleEdit(id) {
    const el = document.getElementById(id);
    el.style.display = el.style.display === 'none' || el.style.display === '' ? 'block' : 'none';
}
</script>
@endsection