<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\Rekam;

class FormRekamController extends Controller
{
    public function showForm()    {
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        return view('form_rekam', compact('dokter'), compact('pasien'));
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'Dokter' => 'required',
            'Pasien' => 'required',
            'Keterangan' => 'required|string',
            'Penyakit' => 'required|string',
            'Suhu' => 'required|numeric',
            'Image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $request->Image->storeAs('public/images', $request->Image->getClientOriginalName());

        $results = [
            'Dokter' => $request->input('Dokter'),
            'Pasien' => $request->input('Pasien'),
            'Keterangan' => $request->input('Keterangan'),
            'Penyakit' => $request->input('Penyakit'),
            'Suhu' => $request->input('Suhu'),
            'Image' => $request->Image->getClientOriginalName(),
        ];
        Rekam::create($results);
        return view('form_rekam_result');
    }


}
