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
        $day1 = participant::whereIn('acara', ['Both', 'Day 1'])->get()->count();
        $day2 = participant::whereNotIn('acara', ['Day 1'])->get()->count();
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

    public function dayone(Request $request)
    {

        $search = false;

        if ($request->has('search')) {
            $search = true;
            $peserta = DB::table('participants')
                ->where('nama', 'LIKE', '%' . $request->search . '%')
                ->whereIn('acara', ['Both', 'Day 1'])
                ->simplePaginate(10);
        } else {
            $peserta = DB::table('participants')
                ->whereIn('acara', ['Both', 'Day 1'])
                ->simplePaginate(10);
        }

        $count = participant::where('acara', 'Day 1')
            ->orWhere('acara', 'Both')
            ->get()
            ->count();

        return view('dashboard.dayone', [
            'peserta' => $peserta,
            'count' => $count,
            'search' => $search
        ]);
    }

    public function daytwo(Request $request)
    {

        $search = false;

        if ($request->has('search')) {
            $search = true;
            $peserta = DB::table('participants')
                ->where('nama', 'LIKE', '%' . $request->search . '%')
                ->whereIn('acara', ['Both', 'Day 2'])
                ->simplePaginate(10);
        } else {
            $peserta = DB::table('participants')
                ->whereIn('acara', ['Both', 'Day 2'])
                ->simplePaginate(10);
        }

        $count = DB::table('participants')
            ->whereIn('acara', ['Both', 'Day 2'])
            ->get()
            ->count();

        return view('dashboard.daytwo', [
            'peserta' => $peserta,
            'count' => $count,
            'search' => $search
        ]);
    }

    public function exportexcel()
    {
        return Excel::download(new ParticipantExport, 'daftarpeserta.xlsx');
    }
}
