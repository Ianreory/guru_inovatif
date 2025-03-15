<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monitorings = Monitoring::all();
        return view('data.index', compact('monitorings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show_update($id)
    {
        $progres = Monitoring::select('id', 'name_leader', 'projek_name', 'client', 'email', 'photo_leader', 'start_date', 'ent_date')
            ->where('id', $id)
            ->first();

        if ($progres) {
            $progres->start_date = Carbon::parse($progres->start_date)->format('Y-m-d');
            $progres->ent_date = Carbon::parse($progres->ent_date)->format('Y-m-d');
        }

        return view('data.update', compact('progres'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'projek_name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'name_leader' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);



        $project = Monitoring::find($id);



        $photo_leader = $project->photo_leader;

        if ($request->hasFile('photo_leader')) {
            $timestamp = now()->format('YmdHis');
            $fileExtension = $request->file('photo_leader')->getClientOriginalExtension();
            $fileName = $timestamp . '.' . $fileExtension;


            if ($photo_leader && file_exists(storage_path('app/public/photos/' . $photo_leader))) {
                unlink(storage_path('app/public/photos/' . $photo_leader));
            }

            $photo_leader = $request->file('photo_leader')->storeAs('photos', $fileName, 'public');
        }

        $start_date = $request->start_date ?? $project->start_date;
        $ent_date = $request->ent_date ?? $project->ent_date;


        $project->update([
            'projek_name' => $validated['projek_name'],
            'client' => $validated['client'],
            'name_leader' => $validated['name_leader'],
            'email' => $validated['email'],
            'photo_leader' => $photo_leader,
            'start_date' => $start_date,
            'ent_date' => $ent_date,
        ]);

        alert()->success('Hore!', 'Edit data Successfully');
        return redirect()->route('data.index')->with('success', 'Data berhasil diperbarui');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'projek_name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'name_leader' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'photo_leader' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|date',
            'ent_date' => 'required|date|after_or_equal:start_date',
        ], [
            'projek_name.required' => 'Nama proyek wajib diisi.',
            'projek_name.string' => 'Nama proyek harus berupa teks.',
            'projek_name.max' => 'Nama proyek tidak boleh lebih dari 255 karakter.',
            'client.required' => 'Nama klien wajib diisi.',
            'client.string' => 'Nama klien harus berupa teks.',
            'client.max' => 'Nama klien tidak boleh lebih dari 255 karakter.',
            'name_leader.required' => 'Nama pemimpin wajib diisi.',
            'name_leader.string' => 'Nama pemimpin harus berupa teks.',
            'name_leader.max' => 'Nama pemimpin tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'photo_leader.image' => 'Foto pemimpin harus berupa gambar.',
            'photo_leader.mimes' => 'Foto pemimpin harus berformat jpeg, png, jpg, gif, atau svg.',
            'photo_leader.max' => 'Ukuran foto pemimpin tidak boleh lebih dari 2MB.',
            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date' => 'Tanggal mulai tidak valid.',
            'ent_date.required' => 'Tanggal selesai wajib diisi.',
            'ent_date.date' => 'Tanggal selesai tidak valid.',
            'ent_date.after_or_equal' => 'Tanggal selesai harus lebih besar atau sama dengan tanggal mulai.',
        ]);


        $photoPath = null;
        if ($request->hasFile('photo_leader')) {
            $timestamp = now()->format('YmdHis');
            $fileExtension = $request->file('photo_leader')->getClientOriginalExtension();
            $fileName = $timestamp . '.' . $fileExtension;
            $photoPath = $request->file('photo_leader')->storeAs('photos', $fileName, 'public');
        }


        $defaultProgres = [
            'data' => [
                ['id' => 1, 'name' => 'membuat database migrasi', 'status' => false],
                ['id' => 2, 'name' => 'membuat API dari backend', 'status' => false],
                ['id' => 3, 'name' => 'membuat dashboard', 'status' => false],
                ['id' => 4, 'name' => 'membuat tampilan frontend', 'status' => false],
                ['id' => 5, 'name' => 'integrasi API ke frontend', 'status' => false],
                ['id' => 6, 'name' => 'uji coba sistem', 'status' => false],
                ['id' => 7, 'name' => 'perbaikan bug', 'status' => false],
                ['id' => 8, 'name' => 'testing user acceptance', 'status' => false],
                ['id' => 9, 'name' => 'deploy ke production', 'status' => false],
                ['id' => 10, 'name' => 'finalisasi dokumentasi', 'status' => false],
            ]
        ];



        $monitoring = Monitoring::create([
            'projek_name' => $request->projek_name,
            'client' => $request->client,
            'name_leader' => $request->name_leader,
            'email' => $request->email,
            'photo_leader' => $photoPath,
            'start_date' => $request->start_date,
            'ent_date' => $request->ent_date,
            'progres' => json_encode($defaultProgres),
        ]);

        alert()->success('progres berhasil ditambahkan');

        return redirect()->route('data.index')->with('success', 'Data berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $progres = Monitoring::select('progres', 'id', 'name_leader', 'projek_name', 'client', 'email', 'photo_leader', 'start_date', 'ent_date')
            ->where('id', $id)
            ->first();

        $progresdata = json_decode($progres->progres, true);  // Pastikan hasilnya adalah array
        $progresdata = $progresdata['data'] ?? [];  // Akses key 'data' jika ada, atau gunakan array kosong jika tidak ada

        // dd($progresdata);
        return view('progresuser.index', [
            'progres' => $progres,
            'progresdata' => $progresdata
        ]);
    }


    public function updateProgress(Request $request)
    {
        $id = $request->id;
        $newStatus = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);
        $progres = Monitoring::select('progres', 'id', 'name_leader', 'projek_name', 'client', 'email', 'photo_leader', 'start_date', 'ent_date')
            ->where('id', $request->progres_id)
            ->first();


        if (!$progres) {
            return redirect()->back()->with('error', 'Progres not found.');
        }


        $progresdata = json_decode($progres->progres, true);
        $progresdata = $progresdata['data'] ?? [];

        $progresdata[$id - 1]['status'] = $newStatus;
        $progres->progres = json_encode(['data' => $progresdata]);
        $progres->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $monitoring = Monitoring::find($id);

        if ($monitoring && $monitoring->photo_leader) {

            Storage::disk('public')->delete('photos/' . $monitoring->photo_leader);
        }


        if ($monitoring) {
            $monitoring->delete();
            alert()->success('Data berhasil dihapus');
            return redirect()->route('data.index');
        }

        alert()->error('Data tidak ditemukan');
        return redirect()->route('data.index');
    }
}
