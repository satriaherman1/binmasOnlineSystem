@extends('templates.core.main')


@section('mainComponent')
<link rel="stylesheet" href="{{ asset('css/bhabin/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/bhabin/laporan/laporan.css') }}">
<link rel="stylesheet" href="{{ asset('css/bhabin/laporan/dds/index.css') }}">

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
    <br class="d-none d-md-block">
    <br class="d-none d-md-block">
    <br class="d-none d-md-block">
    <br class="d-none d-md-block">
    <!-- main -->
    <main>
        <!-- main content -->
        <div class="container">
          <div class="row mx-1 mb-5 mt-2 container-grid-1">
          
            <!-- item -->
            <div class="col-md sm-12 mt-4">
                <div class="box mx-auto" style="width: 300px; height:fit-content; border-radius:10px" onclick='redirectDdsWarga()' >
                    <div class="header text-center">
                        <i class="fas fa-user-friends text-center fs-2 "></i>
                        <h5 class="mt-3">DDS Warga</h5>
                    </div>
  
                    <div class="box-body">
                      
                    </div>
                </div>
            </div>
            <!-- item -->

            <!-- item -->
            <div class="col-md sm-12 mt-4">
              <div class="box mx-auto" style="width: 300px; height:fit-content; border-radius:10px" onclick='redirectDdsKosan()' >
                  <div class="header text-center">
                      <i class="fas fa-building text-center fs-2 "></i>
                      <h5 class="mt-3">DDS Indekos & Apartemen</h5>
                  </div>

                  <div class="box-body">
                    
                  </div>
              </div>
          </div>
          <!-- item -->
            
            <!--item-->
            <div class="col-md sm-12 mt-4 mb-4">
                <div class="box mx-auto" style="width: 300px; height:fit-content; border-radius:10px" onclick='redirectDdsUsaha()'>
                    <div class="header text-center">
                        <i class="fas fa-store text-center fs-2 "></i>
                        <h5 class="mt-3 ">DDS Tempat Usaha</h5>
                    </div>
  
                    <div class="box-body">
                      
                    </div>
                </div>
            </div>
            <!--end item-->

            </div>
  
          </div>
        </div>
        

    </main>    

    <script>
        const redirectDdsWarga = () =>{
            document.location.href = `{{ url('/laporan/dds/dds-warga') }}`
        }
        const redirectDdsUsaha = () =>{
            document.location.href = `{{ url('/laporan/dds/dds-usaha') }}`
        }
        const redirectDdsKosan = () =>{
            document.location.href = `{{ url('/laporan/dds/dds-kosan-dan-apartemen') }}`
        }
    </script>

    @component('templates.bhabin.footer')
        color : #fff !important;
        @slot('bg')
            style = "background : #7898CF;" 
        @endslot
    @endcomponent
@endsection