@extends('layout.app')

@section('content')
<section>
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('/assets/img/bg-servicios.jpg');filter: blur(2px);">
        </div>
        <div class="container">
            <div class="content-center-pages text-center brand">
                <svg class="d-none d-sm-none d-md-block d-lg-block" xmlns="http://www.w3.org/2000/svg" width="682.888" height="122.587" viewBox="0 0 682.888 122.587">
                    <g id="txt" transform="translate(-326 -253)">
                        <path id="Trazado_63" data-name="Trazado 63" d="M2830.853,1113.821l76.5-122.587h606.385L3437.6,1113.821Z" transform="translate(-2504.853 -738.234)" fill="#0c090d"/>
                        <text id="Nuestros_servicio" data-name="Nuestros servicio" transform="translate(668 336)" fill="#dbad2d" font-size="60" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="-267.03" y="0">Nuestro servicio</tspan></text>
                    </g>
                    
                </svg>
                <svg class="d-block d-sm-block d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="500" height="122.587" viewBox="0 0 682.888 122.587">
                    <g id="txt" transform="translate(-326 -253)">
                        <path id="Trazado_63" data-name="Trazado 63" d="M2830.853,1113.821l76.5-122.587h606.385L3437.6,1113.821Z" transform="translate(-2504.853 -738.234)" fill="#0c090d"></path>
                        <text id="Nuestros_servicio" data-name="Nuestros servicio" transform="translate(668 336)" fill="#dbad2d" font-size="40" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="-267.03" y="0">Nuestro servicio</tspan></text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-2 d-none d-sm-none d-lg-block d-md-block p-0 bg-primary shadow" style="background-image: url('/assets/img/services/large2.png'); background-position: right; background-size: cover; background-repeat: no-repeat;">
            <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                <li class="nav-item text-center py-3 bg-white shadow-sm">
                    <a class="nav-links active" data-toggle="tab" href="#link4" role="tablist">
                        <img src="/assets/img/services/1.png" alt="">
                    </a>
                </li>
                <li class="nav-item text-center py-3">
                    <a class="nav-links" data-toggle="tab" href="#link5" role="tablist">
                        <img src="/assets/img/services/2.png" alt="">
                    </a>
                </li>
                <li class="nav-item text-center py-3">
                    <a class="nav-links" data-toggle="tab" href="#link6" role="tablist">
                        <img src="/assets/img/services/3.png" alt="">
                    </a>
                </li>
                <li class="nav-item text-center py-3">
                    <a class="nav-links" data-toggle="tab" href="#link6" role="tablist">
                        <img src="/assets/img/services/4.png" alt="">
                    </a>
                </li>
                <li class="nav-item text-center py-3">
                    <a class="nav-links" data-toggle="tab" href="#link6" role="tablist">
                        <img src="/assets/img/services/5.png" alt="">
                    </a>
                </li>
                <li class="nav-item text-center py-3">
                    <a class="nav-links" data-toggle="tab" href="#link6" role="tablist">
                        <img src="/assets/img/services/6.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-10 bg-primary shadow">
            <div class="tab-content">
                <div class="tab-pane active" id="link4">
                    <div class="container p-3 p-lg-5">
                        <div class="text-center">
                            <h2 class="round w-50 mx-auto card-titles text-primary mb-0 h1">Mecanica</h2>
                            <span class="card-titles text-primary px-5 mt-0 h3 font-weigth-light">Vehiculos</span>
                        </div>
                        <div class="my-5">
                            <p class="font-weight-bold h4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deleniti vero 
                                corporis culpa, similique veniam eos aspernatur nulla placeat perspiciatis maiores 
                                corporis culpa, similique veniam eos aspernatur nulla placeat perspiciatis maiores 
                                vitae, illo aperiam. Iure eum sed quis eligendi accusamus!</p>
                        </div>
                        <div class="my-5">
                            <h1>Ofrecemos</h1>
                            <ul>
                                <li class="h4">Talleres</li>
                                <li class="h4">Mecanicos</li>
                                <li class="h4">Repuestos</li>
                                <li class="h4">Bicicletas</li>
                                <li class="h4">Motos</li>
                            </ul>
                        </div>
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
            <div class="row overlay px-4 pb-3 pt-5">
                <div class="card-titles mx-auto py-2 bg-white text-primary px-5 mt-0 h3 shadow" style="width: 300px;position: absolute;z-index: 3;left: 37%;margin-top: 80px!important;">Ver màs</div>
            </div>
        </div>
    </div>
</section>
@endsection