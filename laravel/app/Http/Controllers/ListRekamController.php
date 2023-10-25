<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rekam;
use Illuminate\Http\Request;

class ListRekamController extends Controller
{
    public function showUsers(){
        $rekams = Rekam::all();
        return view('list_rekam', compact('rekams'));
    }

    public function edit($id)
    {
        $rekam = Rekam::find($id);
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        return view('edit_rekam', compact('rekam', 'dokter', 'pasien'));
    }


    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Dokter' => 'required',
            'Pasien' => 'required',
            'Keterangan' => 'required|string',
            'Penyakit' => 'required|string',
            'Suhu' => 'required|numeric',
            'Image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        // Update the user in the database
        Rekam::where('id', $id)->update($validatedData);

        return redirect()->route('list_rekam');
    }

    public function delete($id)
    {
        // Delete the user from the database
        Rekam::destroy($id);

        return redirect()->route('list_rekam'); // Redirect to home or wherever you want
    }
}
