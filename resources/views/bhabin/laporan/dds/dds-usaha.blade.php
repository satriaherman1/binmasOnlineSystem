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


 <main class="mb-3 mt-2">
        <div class="container">
            <form action="">
                <h4 class="text-center mb-4">Form Kunjungan Tempat Usaha</h4>

                <!-- Tempat Usaha -->
                <h5><li>Tempat Usaha</li></h5>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama Tempat Usaha</label>
                        <input type="text" placeholder="masukan nama tempat usaha" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="col-md">
                        <label for="" class="mt-3 mb-2">Jam Kerja Operasional</label>
                        <div class="row d-flex align-items-center" style="padding-inline: 12px;">
                            <input type="time" placeholder="jam kerja masuk" class="form-control col"
                                id="exampleInputEmail1" aria-describedby="emailHelp"> &nbsp;&nbsp;  sampai&nbsp;&nbsp;
                            <input type="time" placeholder="jam kerja pulang" class="form-control col"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="" class="mt-3 mb-2">Jenis/Bidang Usaha</label>
                        <select id="jenis-usaha" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jenis Usaha</option>
                            <option value="1">Pertanian</option>
                            <option value="2">Perkebunan</option>
                            <option value="3">Peternakan</option>
                            <option value="4">Perikanan</option>
                            <option value="5">Kehutanan</option>
                            <option value="6">Pertambangan</option>
                            <option value="7">Perindustrian</option>
                            <option value="8">Perdagangan</option>
                            <option value="9">Pariwisata</option>
                            <option value="10">Perdagangan Jasa</option>
                            <option value="11">Lainnya</option>
                        </select>
                        <div id="jenis-usaha-opt" class="mt-2" style="display: none;">
                            <input type="text" class="form-control" placeholder="masukan jenis usaha">
                        </div>
                    </div>

                    <div class="col-md">

                    </div>

                </div>
                <!-- End Tempat Usaha -->

                <!-- Penanggung Jawab Usaha/Kantor -->
                <div class="row">

                    <h5 class="mt-5"><li>Penanggung Jawab Usaha/Kantor</li></h5>

                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                        <input type="text" placeholder="masukan nama lengkap penanggung jawab tempat usaha"
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="" class="mt-3">Jenis Kelamin</label>
                        <br>
    
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Tempat / Tanggal Lahir</label>
                        <input type="text" placeholder="masukan nama tempat lahir" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">


                    </div>
                    <div class="col-md">
                        <label for="" class="mt-3 mb-2">Agama</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Hindu</option>
                            <option value="4">Budha</option>
                            <option value="5">Katholik</option>
                            <option value="6">Konghucu</option>
                        </select>
                    </div>



                </div>
                <div class="row ">
                    <div class="col-md">
                        <label for="" class="mt-3">Kewarganegaraan</label>
                        <br>

                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">WNI</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">WNA</label>
                        </div>
                    </div>

                    <div class="col-md">

                        <label for="exampleInputEmail1" class="form-label mt-3">Nomor Paspor</label>
                        <input type="text" class="form-control"
                            placeholder="masukan nomor paspor penanggung jawab tempat usaha" id="exampleInputEmail1"
                            aria-describedby="emailHelp">


                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="" class="mt-3 mb-2">Suku</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Suku</option>
                            <option value="1">Jawa</option>
                            <option value="2">Sunda</option>
                            <option value="3">Madura</option>
                        </select>
                    </div>

                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nomor Telepon/HP</label>
                        <input type="text" placeholder="masukan nomor yang dapat dihubungi" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3"
                            style="margin-bottom: 1px;">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="alamat lengkap">
                        <br>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RT</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RT">
                                <br>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RW</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RW">
                                <br>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama desa/kelurahan">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama kecamatan">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Penanggung Jawab Usaha/Kantor -->

                <!-- Penanggung Jawab Keamanan -->
                <div class="row">
                    <h5 class="mt-5"><li>Penanggung Jawab Keamanan</li></h5>

                    <hr>

                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                        <input type="text" placeholder="masukan nama" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Tempat / Tanggal Lahir</label>
                        <input type="text" placeholder="masukan nama tempat lahir" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3"
                            style="margin-bottom: 1px;">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="alamat Lengkap">
                        <br>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RT</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RT">
                                <br>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RW</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RW">
                                <br>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama desa/kelurahan">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama kecamatan">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Penanggung Jawab Keamanan -->

                <!-- Jumlah Karyawan atau Pegawai -->
                <div class="row">
                    <h5 class="mt-5"><li>Jumlah Karyawan/Pegawai</li></h5>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Jumlah Pegawai WNI</label>
                        <input type="number" name="angka" placeholder="masukan jumlah pegawai WNI" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Jumlah Pegawai WNA</label>
                        <input type="number" name="angka" placeholder="masukan jumlah pegawai WNA" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="" class="mt-3">Asrama / Mess</label>
                        <br>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="mess"
                                value="option1">
                            <label class="form-check-label" for="mess">Ada </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tidak"
                                value="option2">
                            <label class="form-check-label" for="tidak">Tidak Ada</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3" style="margin-bottom: 1px;">Alamat
                            Asrama / Mess</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="alamat lengkap">
                        <br>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RT</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RT">
                                <br>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label mt-1">RW</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan RW">
                                <br>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0.75em">
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama desa/kelurahan">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="masukan nama kecamatan">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- End Jumlah Karyawan atau Pegawai -->

                <!-- Data Karyawan/Pegawai -->
                <div class="row">

                    <h5 class="mt-5"><li>Data Karyawan/Pegawai</li></h5>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama Pegawai</label>
                        <input type="text" placeholder="masukan nama lengkap pegawai" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Tempat/Tanggal Lahir</label>
                        <input type="text" placeholder="masukan tempat tanggal lahir pegawai" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Jabatan/Bagian</label>
                        <input type="text" placeholder="masukan nama jabatan/bagian" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nomer Telepon/HP</label>
                        <input type="text" placeholder="masukan nomor yang dapat dihubungi" class="form-control" 
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <!-- End Data Karyawan/Pegawai-->

                <!-- Catatan Kunjungan Usaha/Kantor/Keamanan -->
                <div class="row">
                    
                    <h5 class="mt-5"><li>Catatan Kunjungan Usaha/Kantor/Keamanan</li></h5>
                    
                    <hr>
        
                        <div class="col-md">
                            <label for="exampleInputEmail1" class="form-label mt-3">Tanggal Kunjungan</label>
                            <input type="text" placeholder="masukan tanggal kunjungan" class="form-control" 
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md">
                            <label for="exampleInputEmail1" class="form-label mt-3"><li>Yang Menerima Kunjungan</li></label>
                        </div>

                    </div>
                    <div class="row ml-2 ml-sm-0">
                        <div class="col-md">
                    		<label for="" class="mt-3 mb-2">Kunjungan Ke-</label>
                    		<select class="form-select" aria-label="Default select example">
                    			<option selected>Pilih Jenis Kunjungan</option>
                    			<option value="1">Jakarta</option>
                    			<option value="2">Surabaya</option>
                    			<option value="3">Bandung</option>
                    			<option value="4">Bogor</option>
                    		</select>
                    	</div>
                        <div class="col-md">
                            <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                            <input type="text" placeholder="masukan nama penerima kunjungan" class="form-control" 
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row ml-2 ml-sm-0">
                        <div class="col-md">
                            <h6 class="mt-3 mb-2">Paraf Petugas</h6>
                            <hr>
            
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Paraf Petugas" class="form-control" style="height: 165px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md">
                            <h6 class="mt-5 mb-2">Tanda Tangan</h6>
                            <hr>
        
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Tanda Tangan" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        <div class="col-md">
                            <label for="exampleInputEmail1" class="form-label mt-3">Jabatan/Bagian</label>
                            <input type="text" placeholder="masukan nama jabatan/bagian" class="form-control" 
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="mt-5 mb-2">Pendapat Penanggung Jawab Usaha/Kantor/Kemanan</h6>
                        <div class="col">
                            <div class="form-floating">
                                <textarea placeholder="pendapat penanggung jawab usaha/kantor/keamanan" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                            </div>
                        </div>
                        
                        <label for="exampleInputEmail1" class="form-label mt-4">Catatan/temuan selama pelaksanaan kunjungan ke-</label>
                        
                        <div class="col-md-6">
                            <h6 class="mt-3 mb-2">Kunjungan Ke-1</h6>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Kunjungan Ke-1" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mt-3 mb-2">Kunjungan Ke-2</h6>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Kunjungan Ke-2" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mt-3 mb-2">Kunjungan Ke-3</h6>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Kunjungan Ke-3" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mt-3 mb-2">Kunjungan Ke-4</h6>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea placeholder="Kunjungan Ke-4" class="form-control" style="height: 75px;" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                        
                    <div class="row"></div>
                    <hr>
                    </div>

                    <!-- Form Button-->
                    <div class="button mt-3 flex flex-row-reverse">
                        <button style="background: #F92B13; color: #fff;">Batal</button>
                        <button style="background: #A0B8E0; color: #1E4588;">Simpan</button>
                    </div>
                    <!-- Form Button -->
                    
                </div>
                <!-- End Kunjungan Usaha/Kantor/Keamanan -->
    
            </form>
        </div>
    </main>


@endsection