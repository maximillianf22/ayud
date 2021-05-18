@extends('layout.loged')

@section('navbar')
@include('layout.components.core.navbar.navbar-loged')
@endsection

@section('content')
<div style="
    height: 240px;
    background-image: url(/assets/img/bg-profile.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;">
</div>
<section>
    <div class="row" style="min-height: 80vh;">
        <div class="col-md-3 bg-black pr-0">
            <div class="text-center">
                <img src="/assets/img/ryan.jpg" class="rounded-circle img-profile" alt="">
                <h2 class="font-weight-bold mt-6">Jaime Smith</h2>
            </div>
            <ul class="nav nav-pills nav-pills-primary flex-column mx-auto" role="tablist">
                <li class="nav-item">
                    <a class="nav-link nav-profile text-left active" data-toggle="tab" href="#link4" role="tablist">
                        Mis datos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-profile text-left" data-toggle="tab" href="#link5" role="tablist">
                        Solicitudes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-profile text-left" data-toggle="tab" href="#link6" role="tablist">
                        Historial Laboral
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-profile text-left" data-toggle="tab" href="#link6" role="tablist">
                        Mis Cupones
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="btn btn-primary btn-lg  btn-round">
                        <h4 class="text-dark font-weight-bold m-0">Perfil Laboral</h4>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="container card-body p-lg-5">
                <div class="tab-content">
                    <div class="tab-pane" id="link4">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nombre completo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="Nombre completo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Cedula</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Numero de cedula">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Correo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="Correo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Telefono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Numero de telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Edad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Edad">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control input-md" placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="link5">
                        <h3><b>Solicitudes en Curso</b></h3>
                        <div class="row p-0">
                            <div class="col-md-5" style="max-height: 70vh; overflow-y:auto;">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile active" data-toggle="tab" href="#card-1" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-2" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-3" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-4" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="card-1">
                                        <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                            <div class="row card-body py-2">
                                                <div class="col-3 my-auto">
                                                    <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                </div>
                                                <div class="col-9 pl-0 text-left">
                                                    <h4 class="m-0"><b>Susana</b></h4>
                                                    <span class="stars-profile">
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                    </span>
                                                    <div class="row p-0">
                                                        <div class="col-12 text-left">
                                                            <p><b class="font-weight-bold">Telefono:</b> 3022930490</p>
                                                            <p><b class="font-weight-bold">Dirección:</b> Calle 70 #29 - 600</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="m-2"><b class="font-weight-bold">Servicio:</b> Servicio de Modas</p>
                                                    <p class="m-2"><b class="font-weight-bold">Hora:</b> 10:00 AM</p>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Compartir</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Mapa</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-2">
                                                            <button class="btn btn-black btn-block btn-round px-0 py-2x">
                                                                <h5 class="mb-0"><i class="fa fa-envelope fa-lg text-white"></i></h5>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p class="m-2"><b class="font-weight-bold">Estado del servicio:</b></p>
                                                    <div class="text-center mt-3">
                                                        <button class="btn btn-success btn-lg btn-round">
                                                            <h4 class="m-0 font-weight-bold">En proceso</h4>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="card-2">
                                        <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                            <div class="row card-body py-2">
                                                <div class="col-3 my-auto">
                                                    <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                </div>
                                                <div class="col-9 pl-0 text-left">
                                                    <h4 class="m-0"><b>Alejandra</b></h4>
                                                    <span class="stars-profile">
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                    </span>
                                                    <div class="row p-0">
                                                        <div class="col-12 text-left">
                                                            <p><b class="font-weight-bold">Telefono:</b> 3022930490</p>
                                                            <p><b class="font-weight-bold">Dirección:</b> Calle 70 #29 - 600</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="m-2"><b class="font-weight-bold">Servicio:</b> Servicio de Modas</p>
                                                    <p class="m-2"><b class="font-weight-bold">Hora:</b> 10:00 AM</p>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Compartir</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Mapa</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-2">
                                                            <button class="btn btn-black btn-block btn-round px-0 py-2x">
                                                                <h5 class="mb-0"><i class="fa fa-envelope fa-lg text-white"></i></h5>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p class="m-2"><b class="font-weight-bold">Estado del servicio:</b></p>
                                                    <div class="text-center mt-3">
                                                        <button class="btn btn-success btn-lg btn-round">
                                                            <h4 class="m-0 font-weight-bold">En proceso</h4>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="link6">
                        <h3><b>Solicitudes en Curso</b></h3>
                        <div class="row p-0">
                            <div class="col-md-5" style="max-height: 70vh; overflow-y:auto;">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile active" data-toggle="tab" href="#card-1" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Alexandra</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-2" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-3" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-4">
                                        <a class="nav-link p-0 nav-link-card-profile" data-toggle="tab" href="#card-4" role="tablist">
                                            <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                                <div class="row card-body py-2">
                                                    <div class="col-3 my-auto">
                                                        <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="col-9 pl-0 text-left">
                                                        <p class="mb-1"><b>Susana</b></p>
                                                        <span class="stars-profile">
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                            <i class="fa fa-star star"></i>
                                                        </span>
                                                        <div class="row p-0">
                                                            <div class="col-6 pr-0"> Lorem ipsum dolor sit amet,</div>
                                                            <div class="col-6 text-sm text-right">
                                                                <span class="text-xs text-right"><b>Fecha:</b> 02/03/2020 <br /></span>
                                                                <span class="text-xs text-right"><b>Hora:</b> 10:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="card-1">
                                        <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                            <div class="row card-body py-2">
                                                <div class="col-3 my-auto">
                                                    <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                </div>
                                                <div class="col-9 pl-0 text-left">
                                                    <h4 class="m-0"><b>Susana</b></h4>
                                                    <span class="stars-profile">
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                    </span>
                                                    <div class="row p-0">
                                                        <div class="col-12 text-left">
                                                            <p><b class="font-weight-bold">Telefono:</b> 3022930490</p>
                                                            <p><b class="font-weight-bold">Dirección:</b> Calle 70 #29 - 600</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="m-2"><b class="font-weight-bold">Servicio:</b> Servicio de Modas</p>
                                                    <p class="m-2"><b class="font-weight-bold">Hora:</b> 10:00 AM</p>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Compartir</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Mapa</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-2">
                                                            <button class="btn btn-black btn-block btn-round px-0 py-2x">
                                                                <h5 class="mb-0"><i class="fa fa-envelope fa-lg text-white"></i></h5>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p class="m-2"><b class="font-weight-bold">Estado del servicio:</b></p>
                                                    <div class="text-center mt-3">
                                                        <button class="btn btn-success btn-lg btn-round">
                                                            <h4 class="m-0 font-weight-bold">En proceso</h4>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="card-2">
                                        <div class="card shadow-sm border mb-0 bg-transparent" style="border-radius: 1rem;">
                                            <div class="row card-body py-2">
                                                <div class="col-3 my-auto">
                                                    <img src="/assets/img/eva.jpg" style="max-height:100px;" class="rounded-circle" alt="">
                                                </div>
                                                <div class="col-9 pl-0 text-left">
                                                    <h4 class="m-0"><b>Alejandra</b></h4>
                                                    <span class="stars-profile">
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                        <i class="fa fa-star star"></i>
                                                    </span>
                                                    <div class="row p-0">
                                                        <div class="col-12 text-left">
                                                            <p><b class="font-weight-bold">Telefono:</b> 3022930490</p>
                                                            <p><b class="font-weight-bold">Dirección:</b> Calle 70 #29 - 600</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="m-2"><b class="font-weight-bold">Servicio:</b> Servicio de Modas</p>
                                                    <p class="m-2"><b class="font-weight-bold">Hora:</b> 10:00 AM</p>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Compartir</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-5">
                                                            <button class="btn bg-white border border-primary btn-block btn-round">
                                                                <h5 class="text-primary m-0">Mapa</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-2">
                                                            <button class="btn btn-black btn-block btn-round px-0 py-2x">
                                                                <h5 class="mb-0"><i class="fa fa-envelope fa-lg text-white"></i></h5>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p class="m-2"><b class="font-weight-bold">Estado del servicio:</b></p>
                                                    <div class="text-center mt-3">
                                                        <button class="btn btn-success btn-lg btn-round">
                                                            <h4 class="m-0 font-weight-bold">En proceso</h4>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection