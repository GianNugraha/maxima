<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    public function create_obat()
    {
        $obat = DB::table('obatalkes_m')->get();
        $signa = DB::table('signa_m')->get();
        return view('tambah-obat', compact('obat', 'signa'));
        
    }

    public function create_resep()
    {
        $obat = DB::table('obatalkes_m')->get();
        $signa = DB::table('signa_m')->get();
        return view('tambah-resep', compact('obat', 'signa'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function daftar()
    {
        $resep =  Obat::select('pesanan_m.nama_pesanan','tu.fullname','pesanan_m.pesanan_id')
        ->join('tbl_user as tu','tu.id','pesanan_m.user_id')
        // ->where('pesanan_m.is_resep',1)
            // ->groupBy('pesanan_m.pesanan_id')
            ->get();
            // dd($resep); 
        // $resep =  DB::table('pesanan_m')
        // ->join('resep_m','pesanan_m.pesanan_id', '=', 'resep_m.pemesanan_id')
        // ->join('tbl_user','pesanan_m.user_id', '=', 'tbl_user.id')
        // ->select('pesanan_m.nama_pesanan','resep_m.*', 'tbl_user.id as user_id', 'tbl_user.fullname', 'pesanan_m.pesanan_id')
        // ->groupBy('pesanan_m.pesanan_id')
        // ->get();

            
        // $users = DB::table('users')
        // ->join('contacts', 'users.id', '=', 'contacts.user_id')
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();

        // // $users = DB::table('tbl_user')->select('id','username','password','phone','fullname')->get();
        // // dd($users);
        // $obat = DB::table('obatalkes_m')->get();
        // dd($obat);

        return view('daftar')->with('obat', $resep);

        //
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
