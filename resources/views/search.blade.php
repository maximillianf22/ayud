@extends('layout.loged')

@section('navbar')
    @include('layout.components.core.navbar.navbar-loged')
@endsection

@section('content')
<section>
    <div class="page-header page-header-small">
        <div class="page-header-image bg-primary" data-parallax="true">
        </div>
        <div class="container">
            <div class="">
                <div class="mx-auto card bg-transparent shadow-none card-form-horizontal t-55" style="position: absolute; top: 50% !important;left:0px;">
                    <div class="card-body w-80 mx-auto">
                        <form method="" action="">
                            <div class="row shadow">
                                <div class="col-10 p-0">
                                    <div class="input-group input-lg ">
                                        <input type="email" class="form-control form-lg no-border-radius bg-white br-left"  placeholder="¿Qué servicio necesitas?">
                                    </div>
                                </div>
                                <div class="col-2 p-0">
                                    <button type="button" class="btn btn-primary no-border-radius br-rigth btn-block input-lg"><i class="fa fa-search fa-3x"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5 mt-lg-5">
        <div class="text-center">
            <div class="card-titles mx-auto py-3 bg-white text-primary px-5 mt-0 h3 font-weight-bold shadow d-none d-sm-none d-md-block d-lg-block" style="width: 420px;position: absolute;z-index: 3;left: 34%;margin-top: -40px!important;">Servicios cercanos</div>
            <div class="row px-4 pb-3 pt-5">
                <div class="col-md-4">
                    <div class="card shadow-md" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-md bg-rose" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-md" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-md bg-rose" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-md" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-md" style="border-radius: 1rem;">
                        <div class="row card-body">
                            <div class="col-9 text-left">
                                <h6 class="text-uppercase mb-1">Taller</h6>
                                <p class="mb-0 text-sm">Camilo Gonzales</p>
                                <i class="fa fa-star star"></i>4.5
                            </div>
                            <div class="col-3 my-auto p-0">
                                <img src="/assets/img/services/person.png" style="max-height:100px;" class="rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mx-auto mb-5">
                <div id="map" style="height: 500px; border-radius:2rem;"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('layout.components.core.footer')
@endsection

@section('js')
<script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Colombia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat:   10.993315, lng: -74.806905},
        });
    }

</script>
@endsection