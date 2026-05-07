@extends('layouts.main')
@section('title', 'Eksklusivitas')
@section('content')
<div class="row align-items-center" style="min-height: 80vh;">
    <div class="col-lg-6 reveal">
        <h6 class="text-secondary text-uppercase mb-3" style="letter-spacing: 5px;">Premium Rent Car Batam</h6>
        <h1 class="display-2 fw-bold mb-4" style="font-family: 'Montserrat'; letter-spacing: -2px;">{{ $hero['title'] }}</h1>
        <p class="lead mb-5 text-secondary" style="max-width: 500px; line-height: 1.8;">{{ $hero['subtitle'] }}</p>
        <div class="d-flex gap-3">
            <a href="/katalog" class="btn-chrome">LIHAT KOLEKSI</a>
            <a href="#" class="btn-outline">RESERVASI KHUSUS</a>
        </div>
    </div>
    <div class="col-lg-6 d-none d-lg-block reveal" style="animation-delay: 0.2s;">
        <div class="position-relative">
            <div class="glass-card overflow-hidden" style="border-radius: 35px;">
                <div style="height: 350px;">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1000&auto=format&fit=crop" 
                         class="w-100 h-100" style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.9));"></div>
                </div>
                <div class="p-4 bg-black bg-opacity-60" style="backdrop-filter: blur(15px);">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold mb-0 text-white" style="font-family: 'Montserrat'; letter-spacing: -1px; font-size: 1.5rem;">
                PORSCHE 911
            </h4>
            <p class="mb-0 small text-uppercase" style="color: rgba(255,255,255,0.5); letter-spacing: 3px; font-size: 0.65rem; font-weight: 300;">
                Legendary Series
            </p>
        </div>
        <div class="text-end">
            <span class="badge border border-light text-light rounded-pill px-3 py-2" 
                  style="font-size: 0.6rem; letter-spacing: 1px; font-weight: 400; background: rgba(255,255,255,0.05);">
                2026 EDITION
            </span>
        </div>
    </div>
</div>
@endsection