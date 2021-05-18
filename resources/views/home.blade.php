@extends('layout.app')

@section('content')
@include('layout.components.core.header')
<section class="bg-primary" id="video">
    <div class="blogs-4" id="blogs-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-plain card-blog">
                        <div class="card-image mt-5">
                            <a href="#pablo">
                                <img class="img img-raised rounded" src="/assets/img/video.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="cards bg-secondary pb-5">
        <div class="container">
            <div class="title text-center">
                <h1 class="font-weight-bold mt-4 mb-5">
                    Nuestros Planes
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Basico</h6>
                                <img class="img img-raised" src="/assets/img/price1.png">
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>33.332<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 17%</p>
                            <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius">
                                <b class="f-size-md">Adquirir</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <button class="btn-sm btn-primary no-border-radius px-5 sticker-price btn">Mas popular</button>
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Premium</h6>
                            <img class="img img-raised" src="/assets/img/price2.png">
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>40.165<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 20%</p>
                            <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius">
                                <b class="f-size-md">Adquirir</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Oro</h6>
                            <img class="img img-raised" src="/assets/img/price3.png">
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>46.800<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 22%</p>
                            <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius">
                                <b class="f-size-md">Adquirir</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="title text-center">
        <h1 class="font-weight-bold mt-2 mb-5">
            Nuestros Servicios
        </h1>
    </div>
    <div class="row p-lg-0 m-0">
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/1.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Mecánica</h2>
                </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/2.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Fashion</h2>
                </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/3.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Salud</h2>
                </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/4.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Hogar</h2>
                </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/5.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Capacítate</h2>
                </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 p-lg-0">
            <div class="content m-0">
                <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="/assets/img/card/6.png">
                <div class="content-details fadeIn-left">
                    <h2 class="font-weight-bold text-white">Tècnico</h2>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5 mb-3">
        <div class="row pt-5">
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="card card-icon text-center">
                    <img src="/assets/img/icon/1.png" alt="">
                </div>
                <p class="font-weight-bold">Catalogo con los <br/> servicios necesitados</p>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="card card-icon text-center">
                    <img src="/assets/img/icon/2.png" alt="">
                </div>
                <p class="font-weight-bold">Servicios cercanos <br/> en tu zona</p>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="card card-icon text-center">
                    <img src="/assets/img/icon/3.png" alt="">
                </div>
                <p class="font-weight-bold">Empleados verificados <br/> para tu seguridad</p>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="card card-icon text-center">
                    <img src="/assets/img/icon/4.png" alt="">
                </div>
                <p class="font-weight-bold">Soporte <br/> 24/7</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary mt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/img/phone.png" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="my-lg-5 font-weight-bold">Descarga la aplicación de @yud en las plataformas</h2><br/>
                <div class="row mt-lg-5">
                 <div class="col-md-4 col-6 mt-lg-5"><img src="/assets/img/playstore.png" alt="" width="170px"></div>
                 <div class="col-md-4 col-6 mt-lg-5"><img src="/assets/img/appstore.png" alt="" width="170px"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="title text-center">
        <h3 class="font-weight-bold mt-4 mb-5">
            Testimonios de Clientes
        </h3>
    </div>
    <div class="owl-carousel">
        <div>
            <div class="card bg-white shadow my-5" style="height:180px; border-radius:20px; max-width:430px;">
                <div class="avatar testimonial">
                    <img class="media-object rounded-circle shadow" alt="64x64" src="/assets/img/eva.jpg">
                </div>
                <div class="card-header ml-testimonial text-nowrap">
                    <h4>Angel Gonzales</h4> 
                    <span class="stars">
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                    </span>
                </div>
                <div class="card-body pt-0">
                Servicio impecable y con muy buenos empleado,
                el tiempo que demoro fue mejor de lo que esperaba!
                No todo es perfecto, pero el servicio es lo que esperar
                10/10
                </div>
            </div>
        </div>
        <div>
            <div class="card bg-white shadow my-5" style="height:180px; border-radius:20px; max-width:430px;">
                <div class="avatar testimonial">
                    <img class="media-object rounded-circle shadow" alt="64x64" src="/assets/img/eva.jpg">
                </div>
                <div class="card-header ml-testimonial text-nowrap">
                    <h4>Angel Gonzales</h4> 
                    <span class="stars">
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                    </span>
                </div>
                <div class="card-body pt-0">
                Servicio impecable y con muy buenos empleado,
                el tiempo que demoro fue mejor de lo que esperaba!
                No todo es perfecto, pero el servicio es lo que esperar
                10/10
                </div>
            </div>
        </div>
        <div>
            <div class="card bg-white shadow my-5" style="height:180px; border-radius:20px; max-width:430px;">
                <div class="avatar testimonial">
                    <img class="media-object rounded-circle shadow" alt="64x64" src="/assets/img/eva.jpg">
                </div>
                <div class="card-header ml-testimonial text-nowrap">
                    <h4>Angel Gonzales</h4> 
                    <span class="stars">
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                    </span>
                </div>
                <div class="card-body pt-0">
                Servicio impecable y con muy buenos empleado,
                el tiempo que demoro fue mejor de lo que esperaba!
                No todo es perfecto, pero el servicio es lo que esperar
                10/10
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-2 mb-5">
        <div class="title text-center">
            <h3 class="font-weight-bold mt-4">
                Nuestros Parthners
            </h3>
        </div>
        <div class="row pt-4">
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="text-center p-2">
                    <img src="/assets/img/parthners/cocacola.png" style="max-height:200px;" class="rounded-circle shadow" alt="">
                </div>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="text-center p-2">
                    <img src="/assets/img/parthners/sodimac.png" style="max-height:200px;" class="rounded-circle shadow" alt="">
                </div>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="text-center p-2">
                    <img src="/assets/img/parthners/jamar.png" style="max-height:200px;" class="rounded-circle shadow" alt="">
                </div>
            </div>
            <div class="col-6 col-md-3 p-lg-0 text-center">
                <div class="text-center p-2">
                    <img src="/assets/img/parthners/panamericana.png" style="max-height:200px;" class="rounded-circle shadow" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        center: true,
        items:1,
        loop:true,
        margin:10,
        responsive:{
            900:{
                items:1
            },
            1200:{
                items:3
            },
            2000:{
                items:4
            }
        }
      });
    });
</script>
@endsection