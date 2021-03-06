@extends('templates.core.main')

@section('mainComponent')
<link rel="stylesheet" href="{{ asset('css/bhabin/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/bhabin/laporan/dds/dds-warga.css') }}">

 @include('templates.bhabin.navbar')
  <br>
  <br>
  <br>
  <br>

  {{-- end navbar --}}

 <!-- main -->
    <main class="mb-3 mt-2">
        <div class="container">


            <form action="">
                <h5 class="text-center mb-4">Laporan Informasi Bhabinkamtibmas</h5>

                <h6><b>Sumber Informasi</b></h6>

                <hr>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                        <input type="text" placeholder="masukan nama informan" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Pekerjaan</label>
                        <input type="text" placeholder="masukan pekerjaan" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>
                <!-- alamat -->
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3"
                            style="margin-bottom: 1px;">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="alamat lengkap">
                        
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RT</label>
                                <input type="text" placeholder="masukan RT" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <br>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RW</label>
                                <input type="text" placeholder="masukan RW" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <br>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">Lingkungan</label>
                                <input type="text" placeholder="masukan lingkungan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" placeholder="masukan nama desa/kelurahan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" placeholder="masukan nama kecamatan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <h6><b>Waktu Mendapatakan Informasi</b></h6>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label">Jam dan Tanggal Mendapatkan Informasi</label>
                        <input type="text" placeholder="masukan jam dan tanggal mendapatkan informasi" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>
                <div class="row mt-5">

                    <h6><b>Lokasi Mendapatakan Informasi</b></h6>
                    <hr>
                    <div class="col-md">
                        <label>Tempat Mendapatakan Informasi </label>
                        <select class="form-select" aria-label="Default select example">
                                <option selected>pilih lokasi mendapatkan informasi </option>
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                        
                        </select>

                    
                </div>
                <div class="row mt-5">

                    <h6><b>Cara Mendapatakan Informasi</b></h6>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label">Cara Mendapatkan Informasi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>pilih metode mendapatkan informasi </option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                    
                        </select>

                    </div>
                </div>
                <div class="row mt-5">

                    <h6><b>Bidang Informasi</b></h6>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label">Bidang</label><br>
                            <input type="radio" id="politik" name="bidang" value="politik">
                            <label for="politik">Politik</label>
                            <input type="radio" id="ekonomi" name="bidang" value="ekonomi">
                            <label for="ekonomi">Ekonomi</label>
                            <input type="radio" id="sosbud" name="bidang" value="sosbud">
                            <label for="sosbud">Sosbud</label>
                            <input type="radio" id="keamanan" name="bidang" value="keamanan">
                            <label for="keamanan">Keamanan</label>
                            <hr>

                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <h6 class="mt-4">Uraian Informasi</h6>
                        <hr>
                        <div class="form-floating">
                            <textarea class="form-control" style="height: 200px;" id="floatingTextarea"></textarea>
                          
                        </div>
                    </div>
                </div>
                <div class="row mt-5">

                    <h6><b>Nilai Informasi</b></h6>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label">Nilai</label><br>
                            <input type="radio" id="A" name="nilai" value="A">
                            <label for="A">A</label>
                            <input type="radio" id="B" name="nilai" value="B">
                            <label for="B">B</label>
                            <input type="radio" id="C" name="nilai" value="C">
                            <label for="C">C</label>
                            <input type="radio" id="D" name="nilai" value="D">
                            <label for="D">D</label>
                            <input type="radio" id="E" name="nilai" value="E">
                            <label for="E">E</label>
                            <input type="radio" id="F" name="nilai" value="F">
                            <label for="F">F</label>
                            <hr>

                    </div>
                </div>
                <div class="row mt-4">
                    <h6>Petugas</h6>
                    <hr>
                    <br>

                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                        <input type="text" class="form-control" placeholder="masukan nama kepala keluarga"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Pangkat / NRP</label>
                        <input type="text" class="form-control" placeholder="masukan pangkat/NRP"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="masukan nomor yang dapat dihubungi"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Alamat Rumah</label>
                        <input type="text" class="form-control" placeholder="Masukan Alamat Rumah"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Alamat Kantor</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Masukan Alamat Kantor" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md"></div>

                </div>

                <div class="button mt-3 flex flex-row-reverse">
                    <button style="background: #F92B13; color: #fff;">Batal</button>
                    <button style="background: #A0B8E0; color: #1E4588;">Simpan</button>
                </div>
            </form>
        </div>
    </main>
    <!-- end main -->


@endsection