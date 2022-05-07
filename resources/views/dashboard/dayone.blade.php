
@extends('dashboard.layouts.main')

@section('container')

<h2 class="pt-3">Total Pendaftar Day 1 : {{ $count }}</h2>
<div class="pt-2">
    {{ $peserta->links() }}
</div>
<div class="table-responsive mt-3">
    {{-- <a href="../config/reportexcel-day1.php" class="btn btn-success">Report Excel</a> --}}
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col" width="25px">No</th>
                <th scope="col">Nama</th>
                <th scope="col" width="85px">NPM</th>
                <th scope="col" width="65px">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Domisili</th>
                <th scope="col">Acara</th>
                <th scope="col">Email</th>
                <th scope="col" width="150px">Nomor HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peserta as $p)
            <tr>
                <td>{{ $loop->iteration + $peserta->firstItem() - 1 }} </td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->npm }}</td>
                <td>{{ $p->kelas }}</td>
                <td>{{ $p->jurusan }}</td>
                <td>{{ $p->domisili }}</td>
                <td>{{ $p->acara }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->nomorwa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
