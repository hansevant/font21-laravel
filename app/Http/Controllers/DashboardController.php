<?php

namespace App\Http\Controllers;

use App\Models\participant;
use Illuminate\Http\Request;
use App\Exports\ParticipantExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index()
    {
        // untuk menghitung jumlah pendaftar dan menampilkannya
        $count = participant::get()->count();
        $day1 = participant::where('acara', 'Day 1')->orWhere('acara', 'Both')->get()->count();
        $day2 = participant::where('acara', 'Day 2')->orWhere('acara', 'Both')->get()->count();
        $si = participant::where('jurusan', 'Sistem Informasi')->get()->count();
        $sk = participant::where('jurusan', 'Sistem Komputer')->get()->count();
        $depok = participant::where('domisili', '=', 'depok')->get()->count();
        $kalimalang = participant::where('domisili', 'kalimalang')->get()->count();
        $karawaci = participant::where('domisili', 'karawaci')->get()->count();
        $salemba = participant::where('domisili', 'salemba')->get()->count();
        $cengkareng = participant::where('domisili', 'cengkareng')->get()->count();
        $simatupang = participant::where('domisili', 'simatupang')->get()->count();

        return view('dashboard.index', [
            'count' => $count,
            'day1' => $day1,
            'day2' => $day2,
            'si' => $si,
            'sk' => $sk,
            'depok' => $depok,
            'kalimalang' => $kalimalang,
            'karawaci' => $karawaci,
            'salemba' => $salemba,
            'cengkareng' => $cengkareng,
            'simatupang' => $simatupang
        ]);
    }

    public function dayone()
    {
        $count = participant::where('acara', 'Day 1')
            ->orWhere('acara', 'Both')
            ->get()
            ->count();

        $peserta = DB::table('participants')
            ->where('acara', '=', 'Day 1')
            ->orWhere('acara', 'Both')
            ->simplePaginate(10);

        return view('dashboard.dayone', [
            'peserta' => $peserta,
            'count' => $count
        ]);
    }

    public function daytwo()
    {
        $count = DB::table('participants')
            ->where('acara', 'Day 2')
            ->orWhere('acara', 'Both')
            ->get()
            ->count();

        $peserta = participant::where('acara', 'Day 2')
            ->orWhere('acara', 'Both')
            ->simplePaginate(10);

        return view('dashboard.daytwo', [
            'peserta' => $peserta,
            'count' => $count
        ]);
    }

    public function exportexcel()
    {
        return Excel::download(new ParticipantExport, 'daftarpeserta.xlsx');
    }
}
