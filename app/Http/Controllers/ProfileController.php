<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Bank;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\UserDetail;
use App\Models\User;
use Alert;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function editprofilenazhparfume($id)
    {
        $user = User::findOrFail($id);
        $bank = Bank::all();
        $provinsi = Provinsi::all();

        // KABUPATEN DAN KECAMATAN DARI AJAX 

        return view ('components.profilenazhparfume',compact('user','bank','provinsi'));
    }

    /**
     * Update the user's profile information.
     */
    public function updateprofilenazhparfume(Request $request, $id)
    {
        $request->validate([
            'nomortelepon' =>'required|numeric',
            'provinsi' =>'required',
            'kabupaten' =>'required',
            'kecamatan' =>'required',
            'namajalan' =>'required',
            'kodepos' =>'required|numeric',
            'nomorrekening' =>'required|numeric',
            'bank' => 'required'
        ]);

        User::where('id', $id)->update([
            'nomor_telepon' => $request->nomortelepon,
            'provinsi_id' => $request->provinsi,
            'kabupaten_id' => $request->kabupaten,
            'kecamatan_id' => $request->kecamatan,
            'nama_jalan' => $request->namajalan,
            'kode_pos' => $request->kodepos,
            'nomor_rekening' => $request->nomorrekening,
            'bank_id' => $request->bank,
        ]);

        Alert::success('Berhasil!', 'Profil berhasil diupdate');

        return redirect()->route('barang.index');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function getKabupatenByProvinsi($id)
    {
        $kabupaten = Kabupaten::where('provinsi_id', $id)->get();

        return response()->json($kabupaten);
    }

    public function getKecamatanByKabupaten($id)
    {
        $kecamatan = Kecamatan::where('kabupaten_id', $id)->get();

        return response()->json($kecamatan);
    }

    public function store(Request $request)
    {
        
    }
}
