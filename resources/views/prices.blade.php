@extends('layout.auth')

@section('content')
<section >
    <div class="cards bg-secondary pb-5" style="background-image:url(/assets/img/bg-forms.jpg); background-size:cover; height:100%;">
        <div class="container">
            <div class="title text-center">
                <h1 class="font-weight-bold mt-4 mb-5">
                    Nuestros Planes
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Basico</h6>
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>33.332<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 17%
                            </p>
                            <ul class="list-unstyled text-left pb-5">
                                <li><b>Broshure (Pagina de presentación.</b></li>
                                <li><b>Mínimo 8 imágenes (De trabajos o servicios)</b></li>
                                <li><b>Geolocalización con móvil registrado.</b></li>
                                <li><b>Derecho de publicar todas las promociones que desee.</b></li>
                                <li><b>Derecho de modificar su perfil dos veces al mes.</b></li>
                            </ul>
                        </div>
                        <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius btn-price">
                            <b class="f-size-md">Adquirir</b>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center d-flex align-items-stretch">
                    <button class="btn-sm btn-primary no-border-radius px-5 sticker-price btn">Mas popular</button>
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Premium</h6>
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>40.165<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 20%
                            </p>
                            <ul class="list-unstyled text-left pb-5">
                                <li><b>Todo lo del Plan Básico </b></li>
                                <li><b>2 imágenes adicionales (De trabajos o servicios)</b></li>
                                <li><b>Búsqueda entre los primeros 10 de la lista.</b></li>
                                <li><b>Video de 20 seg. En perfil.</b></li>
                                <li><b>Cuatro días de publicidad al mes.</b></li>
                            </ul>
                        </div>
                        <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius btn-price">
                            <b class="f-size-md">Adquirir</b>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
                    <div class="card card-pricing card-background" style="background-image: url('/assets/img/bg-price.png')">
                        <div class="card-body">
                            <h6 class="category">Plan Oro</h6>
                            <h2 class="card-title font-weight-bold mb-0 mt-0 text-primary"><small class="text-primary">$</small>46.800<small class="text-primary">/mes</small></h2>
                            <p class="card-description mb-0">
                                Ahorra 22%
                            </p>
                            <ul class="list-unstyled text-left pb-5">
                                <li><b>Todo lo del Plan Premium </b></li>
                                <li><b>Búsqueda entre los primeros 3 de la lista.</b></li>
                                <li><b>Ocho días de publicidad al mes.</b></li>
                            </ul>
                            
                        </div>
                        <a href="#pablo" class="btn btn-primary btn-lg py-3 no-border-radius btn-price">
                            <b class="f-size-md">Adquirir</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container text-center mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482.672" height="86.645" viewBox="0 0 482.672 86.645" class="img-fluid text-center mx-auto">
            <defs>
                <filter id="Detalles" x="135" y="9.999" width="212" height="73" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="3" result="blur"/>
                <feFlood flood-opacity="0.161"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
                </filter>
            </defs>
            <g id="Grupo_1707" data-name="Grupo 1707" transform="translate(-442 -995)">
                <path id="Trazado_63" data-name="Trazado 63" d="M2830.853,1077.88l54.073-86.645h428.6l-53.816,86.645Z" transform="translate(-2388.853 3.766)" fill="#0c090d"/>
                <g transform="matrix(1, 0, 0, 1, 442, 995)" filter="url(#Detalles)">
                <text id="Detalles-2" data-name="Detalles" transform="translate(241 60)" fill="#dbad2d" font-size="45" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="-96.143" y="0">Detalles</tspan></text>
                </g>
            </g>
        </svg>
        <div style="height:100px" class="col-md-5 d-sm-none d-none d-md-block d-lg-block"></div>
        <div class="mt-5">
            <div class="card p-lg-4 card-rounded">
                <div class="row card-body">
                    <div class="col-md-7">
                        <h3 class="text-left ml-4 font-weight-bold">PLAN BASICO ($40.000 /mes)</h3>
                        <ul class="list-unstyled">
                            <li class="text-left ml-4"><h5>Por 3  meses / $108.799 (Mes $36.266) Ahorra 10%</h5></li>
                            <li class="text-left ml-4"><h5>Por 6  meses / $208.795 (Mes $34.799) Ahorra 13%</h5></li>
                            <li class="text-left ml-4"><h5>Por 12 meses / $399.984 (Mes $33.332) Ahorra 17%</h5></li>
                        </ul>
                    </div>
                    <div class="col-md-5 d-sm-none d-none d-md-block d-lg-block">
                        <img class="" src="/assets/img/price1.png" style="margin-top:-150px;">
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100px" class="col-md-5 d-sm-none d-none d-md-block d-lg-block"></div>
        <div class="mt-5">
            <div class="card p-lg-4 card-rounded bg-secondary border">
                <div class="row card-body">
                    <div class="col-md-7">
                        <h3 class="text-left ml-4 font-weight-bold"> PLAN PREMIUM ($50.000 /mes)</h3>
                        <ul class="list-unstyled">
                            <li class="text-left ml-4"><h5>Por 3  meses / $133.500 (Mes $44.500) Ahorra 11%</h5></li>
                            <li class="text-left ml-4"><h5>Por 6  meses / $156.998 (Mes $42.833) Ahorra 15%</h5></li>
                            <li class="text-left ml-4"><h5>Por 12 meses / $481.980 (Mes $40.165) Ahorra 20%</h5></li>
                        </ul>
                    </div>
                    <div class="col-md-5 d-sm-none d-none d-md-block d-lg-block">
                        <img class="" src="/assets/img/price2.png" style="margin-top:-150px;">
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100px" class="col-md-5 d-sm-none d-none d-md-block d-lg-block"></div>
        <div class="mt-5">
            <div class="card p-lg-4 card-rounded bg-black text-white">
                <div class="row card-body">
                    <div class="col-md-7">
                        <h3 class="text-left ml-4 font-weight-bold">  PLAN ORO ($60.000 /mes)</h3>
                        <ul class="list-unstyled">
                            <li class="text-left ml-4"><h5>Por 3  meses / $156.582 (Mes $52.194) Ahorra 13%</h5></li>
                            <li class="text-left ml-4"><h5>Por 6  meses / $292.968 (Mes $48.828) Ahorra 19%</h5></li>
                            <li class="text-left ml-4"><h5>Por 12 meses / $561.600 (Mes $46.800) Ahorra 22%</h5></li>
                        </ul>
                    </div>
                    <div class="col-md-5 d-sm-none d-none d-md-block d-lg-block">
                        <img class="" src="/assets/img/price3.png" style="margin-top:-150px;">
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100px"></div>
    </div>
</section>
@endsection

@section('footer')
    @include('layout.components.core.footer')
@endsection