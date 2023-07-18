<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\ClosedBarang;
use Illuminate\Http\Request;
 


class LobbyController extends Controller
{
    public function index(Request $request){
        // $data = Barang::with(['user'])->get();
        $closedbarang = ClosedBarang::all();

        if($request->has('search')){
            // $search = $request->search;
            $data = Barang::where('preview_item','LIKE','%' .$request->search.'%')->where('status', 'live')->paginate(12);
        }
        else{
            $data = Barang::all()->where("status", 'live');
        }

        $batasWaktu = Barang::all()->pluck("expiration_date");
        return view('halaman.user', compact('data', 'batasWaktu', 'closedbarang'));
        
    }

    // public function search(Request $request){
    //     if($request->has('search')){
    //         $search = $request->search;
    //         $data = Barang::where('preview_item', 'LIKE','%'.$search.'%')->get();
    //     }
    //     else{
    //         $data = Barang::all();
    //     }
    //     return view('halaman.user',['data' => $data]);
    // }

    public function timeOut(Request $request){
        // $dataBarang = Barang::whereIn("id", $request->id)->get();

        return "ok";
    }
}
