<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="shortcut icon" type="image/icon" href="assets/img/attribute/logofont.png" />
</head>

<body>
    <div class="container">
        <div class="flexy">
            <div class="title">Registration Form</div>
            <div class="logo">
                <img src="../assets/img/attribute/logofont.png" alt="">
                <img src="../assets/img/attribute/logo-bem.jpg" alt="">
            </div>
        </div>

        <form action="/register" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama</span>
                    @error('nama')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="text" placeholder="Masukkan Nama Lengkap anda" name="nama" required autofocus pattern=".*\S+.*"  value="{{ old('nama') }}">
                </div>
                <div class="input-box">
                    <span class="details">NPM</span>
                    @error('npm')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="text" placeholder="Masukkan NPM anda" name="npm" minlength="8" maxlength="8" required pattern=".*\S+.*" onkeypress="return hanyaAngka(event)"  value="{{ old('npm') }}">
                </div>
                <div class="input-box">
                    <span class="details">Kelas</span>
                    @error('kelas')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="text" placeholder="Masukkan Kelas anda" name="kelas" required pattern=".*\S+.*" value="{{ old('kelas') }}">
                </div>
                <div class="input-box">
                    <span class="details">Jurusan</span>
                    @error('jurusan')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <select name="jurusan" class="opsi" required>
                        <option disabled selected value>Masukkan Jurusan anda</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                    </select>

                    <!-- <span class="details">Jurusan</span>
                    <input type="text" placeholder="Masukkan Jurusan anda" name="jurusan" required> -->
                </div>



                <div class="input-box">
                    <span class="details">Domisili Kampus</span>
                    @error('domisili')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <select name="domisili" class="opsi" required>
                        <option disabled selected value>Masukkan Domisili anda</option>
                        <option value="Depok">Depok</option>
                        <option value="Kalimalang">Kalimalang</option>
                        <option value="Karawaci">Karawaci</option>
                        <option value="Salemba">Salemba</option>
                        <option value="Cengkareng">Cengkareng</option>
                        <option value="Simatupang">Simatupang</option>
                    </select>

                    <!-- <input type="text" placeholder="Masukkan Domisili Kampus anda" name="domisili" required> -->
                </div>
                <div class="input-box">
                    <span class="details">Acara</span>
                    @error('acara')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <select name="acara" class="opsi" required>
                        <option disabled selected value>Pilih Acaranya</option>
                        <option value="Day 1">Day 1</option>
                        <option value="Day 2">Day 2</option>
                        <option value="Both">Keduanya</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    @error('email')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="email" placeholder="Masukkan Email anda" name="email" required pattern=".*\S+.*" value="{{ old('email') }}">
                </div>
                <div class="input-box">
                    <span class="details">Nomor WhatsApp</span>
                    @error('nomorwa')
                        <small style="color: crimson">
                            {{ $message }}
                        </small>
                    @enderror
                    <input type="text" placeholder="Masukkan Nomor WhatsApp anda" name="nomorwa" required pattern=".*\S+.*" value="{{ old('nomorhp') }}">
                </div>
            </div>
            <div class="button">
                <a onclick="return confirm('Data anda sudah benar ?')">
                    <button type="submit">Daftar</button>
                </a>

                <a href="../">
                    <p>Kembali Kehalaman awal</p>
                </a>
            </div>
        </form>
    </div>

    <!-- script untuk input npm agar hanya angka saja yang bisa diinput -->
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>

</body>

</html>