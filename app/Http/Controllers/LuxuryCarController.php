<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuxuryCarController extends Controller
{
    private function getCarData() {
        return [
            ['id' => 1, 'nama' => 'Porsche 911 Carrera', 'brand' => 'Porsche', 'tipe' => 'Sport', 'harga' => '12.500.000', 'status' => 'Tersedia', 'img' => 'https://purepng.com/public/uploads/large/purepng.com-porsche-911-white-carcarsporscheporsche-911-911-1701527595604h7k5m.png'],
            ['id' => 2, 'nama' => 'Mercedes-Benz G-Class', 'brand' => 'Mercedes', 'tipe' => 'SUV', 'harga' => '15.000.000', 'status' => 'Disewa', 'img' => 'https://purepng.com/public/uploads/large/purepng.com-mercedes-benz-g-class-carcarmercedes-benzmercedesmercedes-benz-g-class-1701527503767r3d3n.png'],
            ['id' => 3, 'nama' => 'BMW M4 Competition', 'brand' => 'BMW', 'tipe' => 'Coupe', 'harga' => '10.000.000', 'status' => 'Tersedia', 'img' => 'https://purepng.com/public/uploads/large/purepng.com-blue-bmw-m4-carcarbmwblue-bmw-m4-1701527443194mndp1.png'],
            ['id' => 4, 'nama' => 'Range Rover Autobiography', 'brand' => 'Land Rover', 'tipe' => 'Luxury SUV', 'harga' => '13.500.000', 'status' => 'Tersedia', 'img' => 'https://purepng.com/public/uploads/large/purepng.com-white-range-rover-luxury-carcarland-roverrange-roverwhite-range-rover-17015275210214c7l2.png'],
            ['id' => 5, 'nama' => 'Audi RS7 Sportback', 'brand' => 'Audi', 'tipe' => 'Sport Sedan', 'harga' => '11.000.000', 'status' => 'Tersedia', 'img' => 'https://purepng.com/public/uploads/large/purepng.com-audi-rs7-sportback-white-carcaraudiaudi-rs7-sportback-1701527430489ayg0u.png'],
        ];
    }

    public function index() {
        return view('home', ['hero' => ['title' => 'Eksklusivitas Tanpa Batas', 'subtitle' => 'Rasakan sensasi berkendara dengan armada paling prestisius di Kota Batam.']]);
    }

    public function katalog() {
        return view('katalog', ['cars' => $this->getCarData()]);
    }

    public function detail($id) {
        $cars = [
            1 => ['nama' => 'Porsche 911 Carrera', 'mesin' => '3.0L Flat-6 Turbo', 'power' => '379 HP', '0_100' => '4.2s', 'fitur' => 'Sport Chrono Package'],
            2 => ['nama' => 'Mercedes-Benz G-Class', 'mesin' => '4.0L V8 Biturbo', 'power' => '577 HP', '0_100' => '4.5s', 'fitur' => '4MATIC AWD'],
            3 => ['nama' => 'BMW M4 Competition', 'mesin' => '3.0L M TwinPower', 'power' => '503 HP', '0_100' => '3.8s', 'fitur' => 'M Drift Analyser'],
            4 => ['nama' => 'Range Rover Autobiography', 'mesin' => '4.4L V8', 'power' => '523 HP', '0_100' => '4.6s', 'fitur' => 'Executive Seating'],
            5 => ['nama' => 'Audi RS7 Sportback', 'mesin' => '4.0L V8 TFSI', 'power' => '591 HP', '0_100' => '3.5s', 'fitur' => 'Quattro Performance'],
        ];
        return view('detail', ['detailCar' => $cars[$id] ?? abort(404)]);
    }
}