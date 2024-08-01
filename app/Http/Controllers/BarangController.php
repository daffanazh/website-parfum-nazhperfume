<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use App\Models\chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\UserDetail;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();

        return view ('components.dashboard',compact('barang'));
    }

    public function search(Request $request)
    {

        $cari = $request->search;
        $barang = Barang::where('nama_barang','like',"%".$cari."%")->orWhere('penyedia_barang','like',"%".$cari."%")->paginate(100);
        return view('components.dashboard', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('components.tambahbarang');
    }

    public function tambahkeranjang($id)
    {
        $barang_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $chart = new chart;

        $chart->user_id = $user_id;
        $chart->barang_id = $barang_id;

        $chart->save();

        Alert::success('Berhasil!', 'Parfum ditambahkan ke keranjang');
        return redirect()->back();
    }

    public function tampilkeranjang()
    {
        $user = Auth::user();
        $userid = $user->id;
        $cart = chart::where('user_id', $userid)->get();

        return view ('components.tampilkeranjang', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // input sekalian validasi
        $request->validate([
            'namabarang' => 'required|min:5|max:20',
            'penyediabarang' => 'required',
            'deskripsibarang' => 'required|min:5|max:255',
            'hargabarang' => 'required',
            'stokbarang' => 'required|min:1',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $nm = $request->foto;
    
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $nm->move(public_path() . '/upload', $namaFile);

        Barang::create([
            'nama_barang' => $request->namabarang,
            'penyedia_barang' => $request->penyediabarang,
            'deskripsi_barang' => $request->deskripsibarang,
            'harga_barang' => $request->hargabarang,
            'stok_barang' => $request->stokbarang,
            'photos' => $namaFile
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($barang)
    {
        $user = Auth::user();
        $userId = $user->id;
    
        // Mengambil data barang berdasarkan ID
        $show = Barang::findOrFail($barang);
    
        // Mengambil data keranjang pengguna jika barang ini sudah ada di keranjang
        $cartItem = chart::where('user_id', $userId)
                         ->where('barang_id', $barang)
                         ->first();       

        return view ('components.tampilbarang',compact('show','cartItem','barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = chart::findOrFail($id);
        $hapus->delete();

        Alert::success('Terhapus!');
        return redirect()->route('tampilkeranjang');
    }

    public function checkout($id)
    {
        $keranjang = chart::findOrFail($id);

        $user = Auth::user();
        $userId = $user->id;
    
        // Mengambil data keranjang pengguna jika barang ini sudah ada di keranjang
        $cartItem = chart::where('user_id', $userId)
                         ->where('barang_id', $id)
                         ->first();

        return view ('components.checkout', compact('keranjang','cartItem'));
    }

    public function checkoutdetail($id)
    {
        // $keranjang = chart::findOrFail($id);

        // $user = Auth::user();
        // $userId = $user->id;
    
        // Mengambil data keranjang pengguna jika barang ini sudah ada di keranjang
        // $cartItem = chart::where('user_id', $userId)
        //                  ->where('barang_id', $id)
        //                  ->first();

        return view ('components.checkoutdetail', compact('keranjang'));  
                       
    }
}
