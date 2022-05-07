@extends('dashboard.layouts.main')

@section('container')
    <div class="row py-5 justify-content-center">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-inbox fa-5x" style="color:blueviolet"></i>
                <h3>
                    {{ $count }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Total Pendaftar FIKTI ON TALK
              </div>
            </div>
          </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-inbox fa-5x" style="color:forestgreen;"></i>
                <h3>
                    {{ $day1 }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Total Pendaftar Day 1
              </div>
            </div>
          </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-inbox fa-5x" style="color:deepskyblue;"></i>
                <h3>
                    {{ $day2 }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Total Pendaftar Day 2
              </div>
            </div>
          </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-receipt fa-5x text-dark"></i>
                <h3>
                    {{ $si }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Pendaftar Jurusan Sistem Informasi
              </div>
            </div>
          </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-receipt fa-5x text-secondary"></i>
                <h3>
                    {{ $sk }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Pendaftar Jurusan Sistem Komputer
              </div>
            </div>
          </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-primary"></i>
                <h3>
                    {{ $depok }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Depok
              </div>
            </div>
          </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-warning"></i>
                <h3>
                    {{ $kalimalang }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Kalimalang
              </div>
            </div>
          </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-danger"></i>
                <h3>
                    {{ $karawaci }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Karawaci
              </div>
            </div>
          </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-success"></i>
                <h3>
                    {{ $salemba }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Salemba
              </div>
            </div>
          </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-info"></i>
                <h3>
                    {{ $cengkareng }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Cengkareng
              </div>
            </div>
          </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
              <div class="panel-body">
                <i class="fa fa-city fa-5x text-light"></i>
                <h3>
                    {{ $simatupang }}
                </h3>
              </div>
              <div class="panel-footer back-footer-green ">
                Domisili Simatupang
              </div>
            </div>
          </div>
    </div>

    {{-- <a href="../config/reportexcel-day1.php" class="btn btn-success">Report Excel</a> --}}

@endsection
