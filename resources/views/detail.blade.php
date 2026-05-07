@extends('layouts.main')

@section('title', 'Spesifikasi')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="glass-card p-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-2">{{ $detailCar['nama'] }}</h1>
                    <p class="lead mb-4" style="color: #d4af37;">Exclusive Performance Specification</p>
                    
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-3" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 15px;">
                                <small style="color: #666;">Engine</small>
                                <p class="mb-0 text-white">{{ $detailCar['mesin'] }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 15px;">
                                <small style="color: #666;">Power</small>
                                <p class="mb-0 text-white">{{ $detailCar['power'] }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 15px;">
                                <small style="color: #666;">0 - 100 km/h</small>
                                <p class="mb-0 text-white">{{ $detailCar['0_100'] }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 15px;">
                                <small style="color: #666;">Feature</small>
                                <p class="mb-0 text-white">{{ $detailCar['fitur'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 d-flex gap-3">
                        <button class="btn btn-chrome w-100 py-3">PESAN SEKARANG</button>
                        <a href="{{ url('/katalog') }}" class="btn btn-outline-light w-100 py-3" style="border-radius: 50px;">KEMBALI</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div style="height: 400px; background: radial-gradient(circle, #222, #000); border-radius: 30px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.05);">
                        <p style="color: #444; font-size: 5rem;">🏎️</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection