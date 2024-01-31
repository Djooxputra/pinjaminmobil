<?php

namespace App\Http\Controllers;

use App\Models\UserM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserC extends Controller
{
    public function index()
    {
        //
    }

    public function add(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'sim' => 'required',
        ]);
        if ($validatedData) {
            UserM::create([
                'name' => $validatedData['name'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'phone' =>  $validatedData['phone'],
                'sim' => $validatedData['sim'],
            ]);
            return redirect()->back()->with(['message' => 'Berhasil Membuat Data Pengguna']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Membuat Data Pengguna']);
    }

    public function update(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'sometimes|required|min:8',
            'phone' => 'required',
            'sim' => 'required',
        ]);
        if (count($req->post("password")) >= 8) {
        }
        if ($validatedData) {
            $payload = [
                'name' => $validatedData['name'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'phone' =>  $validatedData['phone'],
                'sim' => $validatedData['sim'],
            ];
            if ($req->post("password")) {
                $payload["password"] = Hash::make($validatedData['password']);
            }
            UserM::find($validatedData['id'])->update($payload);
            return redirect()->back()->with(['message' => 'Berhasil Memperbarui Data Pengguna']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Memperbarui Data Pengguna']);
    }

    public function delete(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
        ]);
        if ($validatedData) {
            UserM::find($validatedData['id'])->delete();
            return redirect()->back()->with(['message' => 'Berhasil Menghapus Data Pengguna']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Menghapus Data Pengguna']);
    }
}
