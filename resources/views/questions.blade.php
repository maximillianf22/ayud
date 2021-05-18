@extends('layout.app')

@section('content')
<section>
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('/assets/img/bg-questions.jpeg');filter: blur(2px);">
        </div>
        <div class="container">
            <div class="content-center-pages text-center brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="796.124" height="100.096" viewBox="0 0 796.124 100.096" class="img-fluid d-none d-sm-none d-md-block d-lg-block">
                    <g id="txt" transform="translate(-268.254 -264.245)">
                        <path id="Trazado_63" data-name="Trazado 63" d="M2868.662,1091.33l60.1-100.1h736.021l-57.381,100.1Z" transform="translate(-2600.408 -726.989)" fill="#0c090d"/>
                        <text id="Preguntas_Frecuentes" data-name="Preguntas Frecuentes" transform="translate(668 336)" fill="#dbad2d" font-size="60" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="-338.7" y="0">Preguntas Frecuentes</tspan></text>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="625.341" height="199.653" viewBox="0 0 625.341 199.653"  class="img-fluid d-block d-sm-block d-md-none d-lg-none">
                    <g id="txt" transform="translate(-268.254 -264.245)">
                        <path id="Trazado_63" data-name="Trazado 63" d="M2868.662,1190.887l47.21-199.653H3494l-45.072,199.653Z" transform="translate(-2600.408 -726.989)" fill="#0c090d"/>
                        <text id="Preguntas_Frecuentes" data-name="Preguntas 
                    Frecuentes" transform="translate(581.973 336)" fill="#dbad2d" font-size="60" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="-166.5" y="0">Preguntas </tspan><tspan x="-172.2" y="90">Frecuentes</tspan></text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5" id="collapse">
        <div class="row">
            <div class="col-md-12">
                <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                    <div class="card card-rounded">
                        <div class="card-header py-2 px-lg-5 p-2 rounded" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed h4 mt-3 font-weight-bold">
                                Preguntas de usuario tradicional
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                                <ul class="list-unstyled ml-5 mb-5">
                                    <li><h5 class="text-primary">¿Cómo creo una cuenta?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo agrego mis servicios?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo reporto un usuario?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo cambio los servicios que ofrezco?</h5></li>
                                    <li><h5 class="text-primary">¿Cuáles son los métodos de retiro?</h5></li>
                                    <li><h5 class="text-primary">¿Otra pregunta?</h5></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card card-rounded">
                        <div class="card-header py-2 px-lg-5 p-2 rounded" role="tab" id="headingTwo">
                            <a class="collapsed  h4 mt-3 font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Preguntas de cliente empleado
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" >
                            <div class="card-body">
                                <ul class="list-unstyled ml-5 mb-5">
                                    <li><h5 class="text-primary">¿Cómo creo una cuenta?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo agrego mis servicios?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo reporto un usuario?</h5></li>
                                    <li><h5 class="text-primary">¿Cómo cambio los servicios que ofrezco?</h5></li>
                                    <li><h5 class="text-primary">¿Cuáles son los métodos de retiro?</h5></li>
                                    <li><h5 class="text-primary">¿Otra pregunta?</h5></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection