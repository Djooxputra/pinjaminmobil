<?php

namespace App\Http\Controllers;

use App\Models\CarM;
use App\Models\RentM;
use App\Models\RsvM;
use App\Models\UserM;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RentC extends Controller
{
    public function index()
    {
        $x["title"] = "Rent";
        $x["page"] = "rent";
        return view("apps", $x);
    }

    public function checkAvailability(Request $req)
    {
        $start = $req->input("sdate");
        $end = $req->input("edate");
        $sDate = Carbon::parse($start);
        $eDate = Carbon::parse($end);
        $cars = CarM::whereDoesntHave('rent', function ($query) use ($start, $end) {
            $query->where(function ($q) use ($start, $end) {
                $q->whereBetween('date_start', [$start, $end])
                    ->orWhereBetween('date_end', [$start, $end]);
            });
        })
            ->get();
        return json_encode($cars);
    }

    public function rent(Request $req)
    {
        $validatedData = $req->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'rsv_id' => 'required',
            // 'date_start' => 'required',
        ]);
        if ($validatedData) {
            $car = CarM::find($validatedData["car_id"]);
            $sDate = date("Y-m-d");
            RentM::create([
                "user_id" => $validatedData["user_id"],
                "car_id" => $validatedData["car_id"],
                "rsv_id" => $validatedData["rsv_id"],
                "date_start" => $sDate,
                "cost" => $car->cost,
            ]);
            return redirect()->back()->with(['message' => 'Berhasil Memlakukan Penyewaan']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Memlakukan Penyewaan']);
    }

    public function return(Request $req)
    {
        $validatedData = $req->validate([
            'nopol' => 'required',
        ]);
        if ($validatedData) {
            $car = CarM::find($validatedData["nopol"]);
            if ($car->active_rent != null) {
                $rent = RentM::find($car->active_rent);
                $user = UserM::find($rent->user_id);
                if ($user->id == Auth::user()->id) {
                    $sDate = Carbon::parse($rent->date_start);
                    $eDate = Carbon::parse(date("Y-m-d"));
                    $diff = $sDate->diffInDays($eDate);
                    $totalCost = $diff * $rent->cost;
                    $rent->date_end = $eDate;
                    $rent->total_cost = $totalCost;
                    $rent->save();
                    return redirect()->back()->with(['message' => 'Berhasil Memlakukan Penyewaan']);
                }
                return redirect()->back()->withErrors(['message' => 'Anda Bukan Peminjam Mobil Ini']);
            }
            return redirect()->back()->withErrors(['message' => 'Mobil Tidak Sedang Disewa']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Memlakukan Penyewaan']);
    }

    public function delete(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
        ]);
        if ($validatedData) {
            RentM::find($validatedData["id"])->delete();
            return redirect()->back()->with(['message' => 'Berhasil Menghapus Data Penyewaan']);
        }
        return redirect()->back()->withErrors(['message' => 'Gagal Menghapus Data Penyewaan']);
    }
}
