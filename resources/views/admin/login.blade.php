@extends('layouts.app')
@section('title', 'Admin Login — ProjectNEMO')
@section('extra-styles')
.login-wrap{min-height:70vh;display:flex;align-items:center;justify-content:center}
.login-card{background:white;border-radius:20px;padding:3rem;max-width:420px;width:100%;box-shadow:0 8px 40px rgba(0,0,0,0.1)}
.login-card h2{font-family:'Playfair Display',serif;font-size:1.8rem;color:var(--forest-deep);margin-bottom:0.3rem}
.login-card p{color:var(--text-muted);margin-bottom:2rem;font-size:0.9rem}
.form-group{margin-bottom:1.2rem}
.form-group label{display:block;font-size:0.85rem;font-weight:700;color:var(--forest-deep);margin-bottom:0.4rem}
.form-control{width:100%;padding:0.75rem 1rem;border:1.5px solid #e0e0e0;border-radius:10px;font-size:0.95rem;font-family:'Source Sans 3',sans-serif;outline:none;transition:border-color 0.2s}
.form-control:focus{border-color:var(--sage)}
.alert-error{background:#fee;border-left:3px solid #c0392b;padding:0.8rem 1rem;border-radius:8px;color:#c0392b;font-size:0.88rem;margin-bottom:1rem}
@endsection
@section('content')
<div class="login-wrap">
    <div class="login-card">
        <div style="font-size:2rem;margin-bottom:1rem">🔐</div>
        <h2>Admin Panel</h2>
        <p>ProjectNEMO Journal Management</p>
        @if(session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif
        <form method="POST" action="/admin/login">
            @csrf
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter admin password" required autofocus>
            </div>
            <button type="submit" class="btn-primary" style="width:100%;border:none;cursor:pointer;font-size:1rem;padding:0.85rem">Login →</button>
        </form>
    </div>
</div>
@endsection
