@extends('templates.core.main')

@section('mainComponent')
<link rel="stylesheet" href="{{ asset('css/bhabin/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/bhabin/laporan/dds/dds-warga.css') }}">

 <!-- navbar -->

  @include('templates.bhabin.navbar')
  {{-- end navbar --}}

   <br>
    <br>
    <br>
    <br>
    <!-- main -->
    <main class="mb-3 mt-2">
        <div class="container">


            <form action="">
                <h4 class="text-center mb-4">Form Kunjungan <br class="d-block d-md-none"> Kepada Warga Masyarakat</h4>

                <h5>
                    <li>Kepala Keluarga</li>
                </h5>

                <hr>
                <div class="row">
                    <div class="col-md">
                        <label for="namaKepalaKeluarga" class="form-label mt-3">Nama</label>
                        <input type="text" placeholder="nama kepala keluarga" class="form-control"
                            id="namaKepalaKeluarga" aria-describedby="emailHelp">

                    </div>
                    <div class="col-md">
                        <label for="" class="mt-3">Jenis Kelamin</label>
                        <br>

                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="LakiLakiKepalaKeluarga"
                                id="LakiLakiKepalaKeluarga" value="option1">
                            <label class="form-check-label" for="LakiLakiKepalaKeluarga">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="perempuanKepalaKeluarga"
                                id="perempuanKepalaKeluarga" value="option2">
                            <label class="form-check-label" for="perempuanKepalaKeluarga">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md" id="suku">
                        <label for="" class="mt-3 mb-2">Suku</label>
                        <div>
                            <select class="form-select" onchange="lainnya(this , 'suku')"
                                aria-label="Default select example">
                                <option selected>Pilih Suku</option>
                                <option value="Jawa">Jawa</option>
                                <option value="Sunda">Sunda</option>
                                <option value="Betawi">Betawi</option>
                                <option value="Batak">Batak</option>
                                <option value="Dayak">Dayak</option>
                                <option value="Bugis">Bugis</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md">
                        <label for="agamaKepalaKeluarga" class="mt-3 mb-2">Agama</label>
                        <div>
                            <select class="form-select" onchange="lainnya(this , 'agama')" id="agamaKepalaKeluarga"
                                aria-label="Default select example">
                                <option selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="" class="mt-3">Kewarganegaraan</label>
                        <br>

                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="WNI" value="WNI">
                            <label class="form-check-label" for="WNI">WNI</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="WNA" value="WNA">
                            <label class="form-check-label" for="WNA">WNA</label>
                        </div>
                    </div>
                    <div class="col-md">

                        <label for="exampleInputEmail1" class="form-label mt-3">No Telepon</label>
                        <input type="tel" class="form-control" placeholder="masukan nomor yang dapat dihubungi"
                            id="exampleInputEmail1" maxlength="12">


                    </div>
                </div>
                <!-- alamat -->
                <div class="row">
                    <div class="col-md">
                        <label for="alamat1" class="form-label mt-3" style="margin-bottom: 1px;">Alamat</label>
                        <input type="text" class="form-control" id="alamat1"
                            placeholder="nama jalan, nama perumahan, nama apartemen, dll">

                        <div class="row mt-3">
                            <div class="col">
                                <label for="RT1" class="form-label mt-1">RT</label>
                                <input type="text" placeholder="masukan RT" maxlength="3" class="form-control" id="RT1">
                                <br>
                            </div>
                            <div class="col">
                                <label for="RW1" class="form-label mt-1">RW</label>
                                <input type="text" placeholder="masukan RW" maxlength="3" class="form-control" id="RW1">
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kelurahan1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" placeholder="masukan Desa / Kelurahan" class="form-control"
                                    id="kelurahan1">
                            </div>
                            <div class="col">
                                <label for="kecamatan1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" placeholder="masukan Kecamatan" class="form-control" id="kecamatan1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="col">
                            <label for="pekerjaan1" class="form-label mt-3">Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Masukan Pekerjaan" id="pekerjaan1">
                        </div>
                    </div>
                </div>

                <h5 class="mt-5">
                    <li>Anggota Keluarga/Penghuni Rumah </li>
                </h5>

                <div class="row">
                    <div class=" col-md mt-3">
                        <label for="" class="mt-3 mb-2 ">Jumlah Anggota Keluarga</label>
                        <input type="number" class="form-control " style="background: none;" maxlength="2" readonly
                            id="jumlahAnggotaKeluarga" value="0">
                    </div>
                    <div class="col-md">
                        <button type="button" class="d-block mb-3"
                            style="padding: 7px 18px ;margin-left: auto; background: #1E4588; color: #fff;"
                            onclick="add()"><i class="fas fa-plus text-white" style="font-size: 15px; "></i></button>

                    </div>
                </div>
                <div class="anggota-keluarga">

                </div>
                <br>



                <div class="row">
                    <br>
                    <h5 class="mt-5 mb-2">
                        <li>Catatan Perubahan</li>
                    </h5>
                    <hr>

                    <div class="col">
                        <div class="form-floating">
                            <textarea placeholder="Catatan" class="form-control" style="height: 100px;"
                                id="floatingTextarea"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h6 class="mt-5 mb-2">Pihak yang Dapat Dihubungi Dalam Keadaan Darurat</h6>
                    <hr>
                    <div class="col-md">
                        <label for="exampleInputEmail1" class="form-label mt-3">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Anggota Keluarga"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="col-md">
                        <label for="" class="mt-3 mb-2">Hubungan </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Hubungan </option>
                            <option value="1">Keluarga</option>
                            <option value="2">Tetangga</option>
                            <option value="3">Kolega</option>
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="alamat2" class="form-label mt-3">Alamat</label>
                        <input type="text" class="form-control" id="alamat2"
                            placeholder="nama jalan, nama perumahan, nama apartemen, dll">

                        <div class="row mt-3">
                            <div class="col">
                                <label for="RT2" class="form-label mt-1">RT</label>
                                <input type="text" placeholder="masukan RT" maxlength="3" class="form-control" id="RT2">
                                <br>
                            </div>
                            <div class="col">
                                <label for="RW2" class="form-label mt-1">RW</label>
                                <input type="text" placeholder="masukan RW" maxlength="3" class="form-control" id="RW2">
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kelurahan2" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" placeholder="masukan Desa / Kelurahan" class="form-control"
                                    id="kelurahan2">
                            </div>
                            <div class="col">
                                <label for="kecamatan2" class="form-label mt-1">Kecamatan</label>
                                <input type="text" placeholder="masukan kecamatan" class="form-control" id="kecamatan2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">

                        <label for="exampleInp1" class="form-label mt-3">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="masukan nomor yang dapat dihubungi"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="row mt-4">
                    <h5>
                        <li>Petugas</li>
                    </h5>
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
                        <label for="alamat3" class="form-label mt-3" style="margin-bottom: 1px;">Alamat</label>
                        <input type="text" class="form-control" id="alamat3"
                            placeholder="nama jalan, nama perumahan, nama apartemen, dll">

                        <div class="row mt-3">
                            <div class="col">
                                <label for="RT1" class="form-label mt-1">RT</label>
                                <input type="text" placeholder="masukan RT" maxlength="3" class="form-control" id="RT1">
                                <br>
                            </div>
                            <div class="col">
                                <label for="RW1" class="form-label mt-1">RW</label>
                                <input type="text" placeholder="masukan RW" maxlength="3" class="form-control" id="RW1">
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kelurahan1" class="form-label mt-1">Desa / Kelurahan</label>
                                <input type="text" placeholder="masukan Desa / Kelurahan" class="form-control"
                                    id="kelurahan1">
                            </div>
                            <div class="col">
                                <label for="kecamatan1" class="form-label mt-1">Kecamatan</label>
                                <input type="text" placeholder="masukan kecamatan" class="form-control" id="kecamatan1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md"></div>
                </div>



                <div class="row mt-3">
                    <h5 class="mt-4">
                        <li>Catatan Kunjungan Warga</li>
                    </h5>
                    <hr>
                    <div class="col-md">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kelurahan1" class="form-label mt-1">Tanggal Kunjungan</label>
                                <input type="date" placeholder="pilih data kunjungan" class="form-control"
                                    id="kelurahan1">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="kelurahan1" class="form-label mt-1">Kunjungan Ke-</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Urutan kunjungan </option>
                                    <option value="1">kunjungan ke 1</option>
                                    <option value="2">kunjungan ke 2</option>
                                    <option value="3">kunjungan ke 3</option>

                                </select>
                            </div>
                            <h6 class="mb-1 mt-3">Paraf Petugas</h6>
                            <div class="col-md-12 mt-3">
                                <textarea placeholder="paraf petugas" class="form-control" style="height: 200px;"
                                    id="floatingTextarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <h5 style="margin-top: 33px;">
                            <li>Yang Menerima Kunjungan</li>
                        </h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kelurahan1" class="form-label mt-1">Nama</label>
                                <input type="text" placeholder="masukan nama" class="form-control" id="kelurahan1">
                            </div>
                            <h6 class="mb-1 mt-3">Tanda Tangan</h6>
                            <div class="col-md-12 mt-3">
                                <textarea placeholder="tanda tangan" class="form-control" style="height: 120px;"
                                    id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="kelurahan1" class="form-label mt-1">Keterangan</label>
                                <input type="text" placeholder="masukan keterangan" class="form-control"
                                    id="kelurahan1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="mt-4">
                            Pendapat warga
                        </h6>

                        <div class="form-floating mt-3">
                            <textarea placeholder="pendapat warga" class="form-control" style="height: 200px;"
                                id="floatingTextarea"></textarea>

                        </div>
                    </div>
                </div>

                <!-- text area -->
                <div class="row">
                    <div class="col-md">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6>Kunjungan Ke-1</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="form-floating">
                                    <textarea placeholder="tanda tangan" class="form-control" style="height: 120px;"
                                        id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6>Kunjungan Ke-2</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="form-floating">
                                    <textarea placeholder="tanda tangan" class="form-control" style="height: 120px;"
                                        id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6>Kunjungan Ke-3</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="form-floating">
                                    <textarea placeholder="tanda tangan" class="form-control" style="height: 120px;"
                                        id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6>Kunjungan Ke-4</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="form-floating">
                                    <textarea placeholder="tanda tangan" class="form-control" style="height: 120px;"
                                        id="floatingTextarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button mt-3 d-flex justify-content-end">
                    <div>
                        <button style="background: #F92B13; color: #fff;">Batal</button>
                        <button style="background: #A0B8E0; color: #1E4588;">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- end main -->
<script src="{{ asset('js/bhabin/laporan/dds/dds-warga.js') }}"></script>

@endsection