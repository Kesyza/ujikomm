<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sopir;
use App\Models\Mobil;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::with('pelanggan')->get();
        $transaksi = Transaksi::with('mobil')->get();
        $transaksi = Transaksi::with('sopir')->get();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();
        $sopir = Sopir::all();
        return view('admin.transaksi.create', compact('pelanggan', 'mobil', 'sopir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pelanggan = Pelanggan::find($request->id_pelanggan);
        // $mobil = Mobil::find($request->id_mobil);
        // $sopir = Sopir::find($request->id_sopir);
        $validated = $request->validate([
            'id_pelanggan' => 'required',
            'id_mobil' => 'required',
            'id_sopir' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required',
            'status_sewa' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_mobil = $request->id_mobil;
        $transaksi->id_sopir = $request->id_sopir;
        $transaksi->nota = mt_rand(1000, 9999);
        $transaksi->tanggal_sewa = $request->tanggal_sewa;
        $transaksi->tanggal_kembali = $request->tanggal_kembali;
        $price = Mobil::findOrFail($request->id_mobil);
        $uang = Sopir::findOrFail($request->id_sopir);
        $transaksi->total_bayar = Carbon::parse($request->tanggal_sewa)->diffInDays($request->tanggal_kembali) * $price->harga_sewa + $uang->tarif;
        $transaksi->status_sewa = $request->status_sewa;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
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
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}