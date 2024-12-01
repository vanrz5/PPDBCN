<?php

// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Menampilkan halaman form register
    public function create()
    {
        return view('students.register');
    }

    // Menyimpan data pendaftaran
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required|string|max:255',
            'birth' => 'required|date',
            'gender' => 'required',
            'ayah' => 'required|string|max:255',
            'ibu' => 'required|string|max:255',
            'jurusan' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        // Simpan data ke dalam database
        Student::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('student.register')->with('success', 'Selamat, Data Anda Berhasil Dimasukkan');
    }
}