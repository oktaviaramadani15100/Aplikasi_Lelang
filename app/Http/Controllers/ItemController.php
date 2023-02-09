<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class ItemController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('crud.create' , compact('data'));
    }

    public function barang()
    {
        return view('crud.item');
    }

    public function insert_detail(Request $request)
    {
        $data = Barang::create([
            "user_id" => auth()->user()->id,
            "preview_item" => $request->preview_item,
            "price" => $request->price,
            "minimum_bid" => $request->minimum_bid,
            "starting_date" => $request->starting_date,
            "expiration_date" => $request->expiration_date,
            "title" => $request->title,
            "foto" => $request->foto,
            "deskrpsi" => $request->deskrpsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('fto')->move(public_path().'/assets/img', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/market');
    }

    //landing
    public function landing()
    {
        $data = Barang::all();

        return view('halaman.user', compact('data'));
    }  
    
    //detail
    public function from_detail($id)
    {   
        $data = Barang::find($id);
        $ids = $id;
        // dd($data);
        return view('tampilan_detail.detail', compact(['data','ids']));
        // return view('tampilan_detail.detail', compact('data'));
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('succes', 'berhasil logout');
    }

    //profil
    public function profil()
    {
        $data = Barang::all();
        return view('profil.profil' , compact('data')); 
    }

    public function high(Request $request){

        $data = DB::table('barang')->limit(1)->where('id', $request->id)->get()->pluck('minimum_bid')->first();
        $plus = $request->bit;
        
        if($request->bit < $data){
            return "harga terlalu rendah";
        }

       
        $barang = Barang::where('id',$request->id);
       $barang->update([
        'minimum_bid' =>$request->bit
       ]);
       return back();
    }

}
