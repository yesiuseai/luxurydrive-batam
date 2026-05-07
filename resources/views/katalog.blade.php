@extends('layouts.main')

@section('title', 'Koleksi Boutique')

@section('content')
<div class="container pb-5">
    <div class="text-center mb-5 reveal">
        <h6 class="text-uppercase mb-2" style="letter-spacing: 7px; color: #d4af37; font-weight: 300;">Elite Collection</h6>
        <h2 class="fw-bold text-uppercase display-4" style="letter-spacing: 15px; font-family: 'Montserrat';">OUR FLEET</h2>
        <div class="mx-auto mt-3" style="width: 50px; height: 2px; background: #d4af37;"></div>
    </div>

    @php
    // Mapping Gambar yang sudah diperbarui & dites kestabilannya
    $carImages = [
        1 => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=800', // Porsche
        2 => 'https://images.unsplash.com/photo-1520031441872-265e4ff70366?q=80&w=800', // G-Wagon
        3 => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800', // BMW
        4 => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800', // SUV/Range Rover
        5 => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?q=80&w=800', // Audi RS7
    ];
    @endphp

    <div class="row g-5">
        @foreach($cars as $index => $car)
        <div class="col-lg-6 mb-4 reveal" style="animation-delay: {{ $index * 0.15 }}s;">
            <div class="glass-card boutique-card position-relative overflow-hidden h-100 border-0">
                <div class="row g-0 h-100">
                    <div class="col-md-5 overflow-hidden position-relative">
                        <div class="h-100 min-vh-25">
                            <img src="{{ $carImages[$car['id']] }}" 
                                 class="card-img-boutique w-100 h-100" 
                                 style="object-fit: cover;" 
                                 alt="{{ $car['nama'] }}">
                            <div class="position-absolute top-0 start-0 w-100 h-100 card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-7 d-flex align-items-center bg-obsidian">
                        <div class="p-4 w-100">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="small text-uppercase fw-light" style="letter-spacing: 3px; color: #d4af37;">{{ $car['brand'] }}</span>
                                <span class="badge rounded-pill {{ $car['status'] == 'Tersedia' ? 'bg-success' : 'bg-danger' }} bg-opacity-10 text-{{ $car['status'] == 'Tersedia' ? 'success' : 'danger' }}" style="font-size: 0.6rem; border: 1px solid currentColor; letter-spacing: 1px;">
                                    {{ $car['status'] }}
                                </span>
                            </div>
                            
                            <h3 class="fw-bold text-white mb-3" style="font-family: 'Montserrat'; font-size: 1.4rem;">{{ $car['nama'] }}</h3>
                            
                            <div class="mb-4 d-flex gap-3 text-white-50" style="font-size: 0.75rem; font-weight: 300;">
                                <span>{{ $car['tipe'] }}</span>
                                <span class="opacity-25">|</span>
                                <span>Batam Area</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end pt-3 border-top border-white border-opacity-10">
                                <div>
                                    <small class="text-white-50 d-block" style="font-size: 0.6rem; letter-spacing: 1px;">DAILY RATE</small>
                                    <h4 class="mb-0 fw-bold text-white">Rp {{ $car['harga'] }}<span class="text-white-50 fw-light" style="font-size: 0.7rem;"> /day</span></h4>
                                </div>
                                <a href="{{ url('/katalog/'.$car['id']) }}" class="btn btn-outline-light btn-explore">
                                    EXPLORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    /* Reset & Base Stability */
    .bg-obsidian { background: rgba(15, 15, 15, 0.95); }
    .min-vh-25 { min-height: 250px; }

    /* Handling Hover yang Stabil */
    .boutique-card {
        border-radius: 4px !important; /* Sudut sedikit tumpul agar elegan tapi tegas */
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.6s ease;
        z-index: 1;
        will-change: transform;
    }

    .boutique-card:hover {
        transform: translateY(-8px); /* Menggunakan TranslateY lebih stabil daripada Scale */
        box-shadow: 0 30px 60px rgba(0,0,0,0.7);
        z-index: 10; /* Memastikan kartu yang di-hover naik ke paling depan */
    }

    /* Animasi Gambar di Dalam Kartu */
    .card-img-boutique {
        transition: transform 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .boutique-card:hover .card-img-boutique {
        transform: scale(1.1); /* Gambar membesar di dalam, tapi bingkai tetap */
    }

    /* Gradasi Overlay */
    .card-overlay {
        background: linear-gradient(to right, transparent, rgba(15,15,15,1));
        transition: opacity 0.5s ease;
    }

    /* Tombol Explore Custom */
    .btn-explore {
        border-radius: 0; 
        font-size: 0.65rem; 
        letter-spacing: 2px; 
        padding: 10px 20px;
        border-color: rgba(255,255,255,0.2);
        transition: 0.3s;
    }

    .btn-explore:hover {
        background: #fff;
        color: #000;
        border-color: #fff;
    }
</style>
@endsection