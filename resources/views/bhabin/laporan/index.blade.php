@extends('templates.core.main')

@section('mainComponent')
<link rel="stylesheet" href="{{'css/bhabin/index.css'}}">
<link rel="stylesheet" href="{{'css/bhabin/laporan/laporan.css'}}">


  <!-- navbar -->
  <nav class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between" id="nav-container">
      <div class="brand">
        <a href="" class="navbar-brand d-flex " style="align-items: center;">
          <img src="{{'img/bhabin/binmas.svg'}}" class="d-block logo" style="width: 77px;" alt="" srcset="">
          <p class="nav-text d-flex flex-column " style="margin-left: 4px;">
            <h5 class="text-white d-inline nav-text-large text-right text-uppercase"
              style=" font-size: 20px ; position: relative;  ">BINMAS Online System
              <br><span style=" position: absolute;  font-weight: 600; font-size: 12px;  " class="nav-text-small">
                PEMBINAAN MASYARAKAT ONLINE SISTEM </span>
            </h5>
          </p>
        </a>
      </div>
      <div class="d-flex align-items-center justify-content-between nav-left" style="height: 100%; width: 14%;">
        <div class="nama-atas">
          <h6 style="font-size: 14px; color: #fff; " class="mb-0 ">Karno Nur Cahyo
            <br>
            <span style="font-size: 10px; font-weight: normal;">Bhabinkamtibmas <p
                style="line-height: 14px !important; margin-bottom: 0 !important;"> Desa Kaliwungu </p> </span>
          </h6>
        </div>
        <a href="profile.html">

          <img src="{{ asset('img/bhabin/user/karno2.svg') }}" id="user" width="50px" class="d-block" alt="" srcset="">

        </a>
      </div>
    </div>
  </nav>

    <br>
    <br>
    <br>
    <br>
    <!-- main -->
    <main>
        <!-- main content -->
        <div class="container">
          <div class="row mx-1 mb-5 mt-2 container-grid-1">
          
            <!-- item -->
            <div class="col-md sm-12 mt-4">
                <div class="box">
                    <div class="header text-center">
                        <img src="{{ asset('img/bhabin/icon/laporan/giat.svg') }}" width="60px" class="d-block mx-auto" alt="" srcset="">
                        <h5 class="mt-3 text-white">7 Giat Wajib Harian</h5>
                    </div>
  
                    <div class="box-body">
                      <ul class="list-group  text-center">
                        <li class="list-group-item">
                          <a href="{{ url('laporan/dds') }}" class="text-body">Door to Door System (DDS)</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Deteksi Dini</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Problem Solving</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Police Service</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Giat Desa atau Kelurahan</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Pembinaan Komunitas atau Ormas</a>
                        </li>
                        <li class="list-group-item" style=" border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;">
                          <a href="" class="text-body" >Pembinaan Siskamling</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="col-md sm-12 mt-4">
                <div class="box">
                    <div class="header text-center">
                        <img src="{{ asset('img/bhabin/icon/laporan/program-polri.svg') }}" width="60px" class="d-block mx-auto" alt="" srcset="">
                        <h5 class="mt-3 text-white">Program Polri</h5>
                    </div>
  
                    <div class="box-body">
                      <ul class="list-group  text-center">
                        <li class="list-group-item">
                          <a href="" class="text-body">100 Hari Kerja Kapolri</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Program Prioritas Kapolri</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">KTN</a>
                        </li>
                        <li class="list-group-item" style=" border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;">
                          <a href="" class="text-body">Program Polri Lainnya</a>
                        </li>
                       
                      </ul>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="col-md sm-12 mt-4">
                <div class="box">
                    <div class="header text-center">
                        <img src="{{ asset('img/bhabin/icon/laporan/program-pemerintah.svg') }}" width="60px" class="d-block mx-auto" alt="" srcset="">
                        <h5 class="mt-3 text-white">Program Pemerintah</h5>
                    </div>
  
                    <div class="box-body">
                      <ul class="list-group  text-center">
                        <li class="list-group-item">
                          <a href="" class="text-body">Covid-19 (PPKM Mikro)</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Dana Desa</a>
                        </li>
                        <li class="list-group-item">
                          <a href="" class="text-body">Bansos</a>
                        </li>
                        <li class="list-group-item" style=" border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;">
                          <a href="" class="text-body" >Lainnya</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
           
  
          </div>
        </div>

        <div class="container">
          <div class="row mx-1 mb-5 mt-2 container-grid-2">
          
            <!-- item -->
            <div class="col-md-4 sm-12 mt-4">
                            
              <div class="box">
                <div class="header text-center">
                    <img src="{{ asset('img/bhabin/icon/laporan/insidentil.svg') }}" width="60px" class="d-block mx-auto" alt="" srcset="">
                    <h5 class="mt-3 text-white">Insidentil, Kontinjensi & Kreatifitas</h5>
                </div>

                <div class="box-body">
                  <ul class="list-group  text-center">
                    <li class="list-group-item">
                      <a href="" class="text-body">Insidentil</a>
                    </li>
                    <li class="list-group-item">
                      <a href="" class="text-body">Kontinjensi</a>
                    </li>
                    <li class="list-group-item" style=" border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;">
                      <a href="" class="text-body" >Terobosan Kreatif</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <!-- item -->
            <div class="col-md-4 sm-12 mt-4">
                <div class="box">
                  <div class="header text-center">
                      <img src="{{ asset('img/bhabin/icon/laporan/both.svg') }}" width="60px" class="d-block mx-auto" alt="" srcset="">
                      <h5 class="mt-3 text-white">BOTH
                      <p style="font-size: 14px; font-weight: 500; margin-top: 10px;"> BHABINKAMTIBMAS ON THE HOTSPOT</p></h5>
                  </div>
    
                  <div class="box-body">
                    <ul class="list-group  text-center">
                      <li class="list-group-item">
                        <a href="" class="text-body">Video Both</a>
                      </li>
                      <li class="list-group-item">
                        <a href="" class="text-body">Link Berita Both</a>
                      </li>
                      <li class="list-group-item" style=" border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;">
                        <a href="" class="text-body" >Meme atau Foto Both</a>
                      </li>
                    </ul>
                  </div>
              </div>
    
  
            </div>
           
           
  
          </div>
        </div>
        

    </main>
    <!-- end main -->


@component('templates.bhabin.footer')
    color : #fff !important;
    @slot('bg')
        style = "background : #7898CF;" 
    @endslot
@endcomponent
@endsection