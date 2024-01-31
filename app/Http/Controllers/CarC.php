<?php

namespace App\Http\Controllers;

use App\Models\CarM;
use Illuminate\Http\Request;

class CarC extends Controller
{
    public function index()
    {
        $x["title"] = "Manajemen Mobile";
        $x["page"] = "car";
        $x["carData"] = CarM::all();
        return view("apps", $x);
    }

    public function add(Request $req)
    {
        $validatedData = $req->validate([
            'brand' => 'required',
            'model' => 'required',
            'noplat' => 'required',
            'cost' => 'required',
            'available' => 'required',
        ]);
        if ($validatedData) {
            CarM::create([
                'brand' => $validatedData['brand'],
                'model' => $validatedData['model'],
                'noplat' => $validatedData['noplat'],
                'cost' => (int) $validatedData['cost'],
                'available' => $validatedData['available'] == "true" ? true : false,
            ]);
            return redirect()->back()->with(['message' => 'Berhasil Membuat Data Mobil']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Membuat Data Mobil']);
    }

    public function update(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'noplat' => 'required',
            'cost' => 'required',
            'available' => 'required',
        ]);
        if ($validatedData) {
            CarM::find($validatedData['id'])->update([
                'brand' => $validatedData['brand'],
                'model' => $validatedData['model'],
                'noplat' => $validatedData['noplat'],
                'cost' => (int) $validatedData['cost'],
                'available' => $validatedData['available'] == "true" ? true : false,
            ]);
            return redirect()->back()->with(['message' => 'Berhasil Memperbarui Data Mobil']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Memperbarui Data Mobil']);
    }

    public function delete(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
        ]);
        if ($validatedData) {
            CarM::find($validatedData['id'])->delete();
            return redirect()->back()->with(['message' => 'Berhasil Menghapus Data Mobil']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Menghapus Data Mobil']);
    }
}
