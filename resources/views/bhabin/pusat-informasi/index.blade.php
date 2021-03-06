@extends('templates.core.main')

@section('mainComponent')

{{-- internal css --}}
<link rel="stylesheet" href="{{'css/bhabin/index.css'}}">

@include('templates.bhabin.navbar')


   <br>
    <br>
    <br>
    <br>

    <!-- main -->
    <main>

        <div class="d-flex align-items-end justify-content-center" style="height: 50px; border-bottom: 2px solid #1E4588">
            <h5 class="mb-1 text-blue">Pusat Informasti Kamtibmas</h5>
        </div>

        <!-- UU dan Peraturan -->
        <div class="container-fluid d-flex align-items-end" style="height: 40px; border-bottom: 2px solid #1E4588">
            <h6 class="mb-1 text-blue">UU dan Peraturan</h6>
        </div>
        <div class="container-fluid">
            <div class="row py-3">
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            UU dan Peraturan di Dalam Polri
                        </div>
                        <div class="p-3">
                            <form action="" class="form-inline">
                                <div class="input-group mb-2 mr-sm-2 rounded">
                                    <input type="text" class="form-control" placeholder="Cari UU dan Peraturan di Dalam Polri">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text h-100" style="background-color: #1E4588;"><i class="fa fa-search text-white"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex flex-column px-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Perkap No 4 tahun 2014 Perubahan Perkap 22 Tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>SOP PERIZINAN POLRI</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Perkap No 4 tahun 2014 Perubahan Perkap 22 Tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                
                        </div>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            UU dan Peraturan di Luar Polri
                        </div>
                        <div class="p-3">
                            <form action="" class="form-inline">
                                <div class="input-group mb-2 mr-sm-2 rounded">
                                    <input type="text" class="form-control" placeholder="Cari UU dan Peraturan di Luar Polri">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text h-100" style="background-color: #1E4588;"><i class="fa fa-search text-white"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex flex-column px-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Perkap No 4 tahun 2014 Perubahan Perkap 22 Tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>SOP PERIZINAN POLRI</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Peraturan Keuangan Polri Perkap No 21 tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <img src="{{ asset('img/bhabin/icon/pdf.svg') }}" width="32px" alt="img">
                                    <small>Perkap No 4 tahun 2014 Perubahan Perkap 22 Tahun 2011</small>
                                </div>
                                <button class="btn btn-sm text-white" style="background-color:#1E4588">Unduh</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End UU dan Peraturan -->

        <!-- Materi dan Informasi -->
        <div class="container-fluid d-flex align-items-end mb-3" style="height: 40px; border-bottom: 2px solid #1E4588">
            <h6 class="mb-1 text-blue">Materi dan Informasi</h6>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            Infografis
                        </div>
                        <div class="p-3">
                            <form action="" class="form-inline">
                                <div class="input-group mb-2 mr-sm-2 rounded">
                                    <input type="text" class="form-control" placeholder="Cari Infografis">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text h-100" style="background-color: #1E4588;"><i class="fa fa-search text-white"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row px-3">
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis1.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis2.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis3.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis4.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis2.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis4.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            Meme
                        </div>
                        <div class="p-3">
                            <form action="" class="form-inline">
                                <div class="input-group mb-2 mr-sm-2 rounded">
                                    <input type="text" class="form-control" placeholder="Cari Meme">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text h-100" style="background-color: #1E4588;"><i class="fa fa-search text-white"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row px-3">
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis1.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis2.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis3.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis4.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis2.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                    <img src="{{ asset('img/bhabin/slick/infografis4.jpg') }}" alt="img">
                                    unduh
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paparan -->
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            Paparan
                        </div>
                        <div class="py-3 px-4">
                            <div class="slick">
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan1.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan2.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan3.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan1.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan2.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                                <div class="px-2">
                                	<div class="d-flex flex-column text-white rounded text-center" style="background-color: #1E4588;">
                                	    <img src="{{ asset('img/bhabin/slick/paparan3.jpg') }}" alt="paparan-img">
                                	    Unduh
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Satker Lainnya -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md mb-3">
                    <div class="d-flex flex-column" style="background-color: #fff; border-radius: 8px">
                        <div class="py-2 d-flex justify-content-center text-white rounded" style="background-color: #1E4588">
                            Link Satker Lainnya
                        </div>
                        <div class="row pt-4 px-4">
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Polda Kalimantan Barat</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Polda Jawa Timur</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Polda Daerah Istimewa Yogyakarta</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Polda Jawa Barat</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                            <div class="col-sm-4 col-md-3 d-flex justify-content-center mb-4">
                                <button class="btn btn-sm w-100 text-white py-2" style="background-color:#1E4588">Kepolisian Negara RI</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- end main -->
  

  @component('templates.bhabin.footer')
      @slot('bg2')
          style = "background : #7898CF; !important"
      @endslot
      @slot('color')
          color : #fff;
      @endslot
  @endcomponent

  <script>
        $(document).ready(function(){
            $('.slick').slick({
                lazyLoad: 'ondemand',
                autoplay: true,
                autoplaySpeed: 2500,
                slidesToShow: 3,
                dots : true,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                    {
                    breakpoint: 734,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
@endsection