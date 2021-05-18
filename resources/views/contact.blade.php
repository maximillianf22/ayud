@extends('layout.app')

@section('content')
<section>
    <div class="page-header page-header">
        <div class="page-header-image" data-parallax="true" style="background-image: url('/assets/img/bg-contact.jpg');filter: blur(2px);">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7 col-md-6 mx-auto text-left d-none d-sm-none d-md-block d-lg-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="544.593" height="243.733" viewBox="0 0 544.593 243.733" class="img-fluid">
                        <g id="Grupo_1679" data-name="Grupo 1679" transform="translate(-66.454 -117.133)">
                            <text id="Comunícate_con_nosotros" data-name="Comunícate
                        con nosotros" transform="translate(139 215.133)" fill="#fff" font-size="60" font-family="Poppins-Bold, Poppins" font-weight="700">
                                <tspan x="0" y="0">Comunícate</tspan>
                                <tspan x="0" y="90">con nosotros</tspan>
                            </text>
                            <path id="Trazado_58" data-name="Trazado 58" d="M3431.972,627.647l6.882-71.118s-57.917,30.655-65.841,86.885,1.7,98.748,49.208,130.483,82.806,25.626,82.806,25.626-83.952-5.553-110.908-69.215,23.515-112.986,23.515-112.986Z" transform="translate(-3304.071 -439.396)" fill="#dbad2d" />
                            <path id="Trazado_62" data-name="Trazado 62" d="M3443.581,728.878,3436.7,800s57.917-30.655,65.841-86.885-1.7-98.748-49.208-130.483S3370.526,557,3370.526,557s83.951,5.553,110.908,69.215S3457.919,739.2,3457.919,739.2Z" transform="translate(-2893.979 -439.129)" fill="#dbad2d" />
                        </g>
                    </svg>
                </div>
                <div class="col-md-6 col-lg-5 mx-auto text-center">
                    <div class="card card-contact card-raised p-lg-4">
                        <form role="form" id="contact-form1" method="post">
                            <div class="card-header text-center">
                                <h4 class="card-title text-dark font-weight-bold">Contáctanos</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre" autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Correo electrónico..." autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Telefono" autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mensaje</label>
                                    <textarea name="message" class="form-control border rounded" placeholder="Mensaje" id="message" rows="6"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mx-auto text-center">
                                        <button type="submit" class="btn btn-primary btn-round btn-block"><h3 class="text-dark mb-0">Enviar</h3></button>
                                    </div>
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
    <div class="container cards-contact" id="collapse">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center font-weight-bold">Colaboracion y Publicidad</h5>
                                <h5 class="text-primary font-weight-bold">marketing@ayud.com</h5>
                                <h5 class="text-primary font-weight-bold">marketing@ayud.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center font-weight-bold">Telefonos</h5>
                                <h5 class="text-primary font-weight-bold">Linea fija: 350 00 00</h5>
                                <h5 class="text-primary font-weight-bold">Linea nacional: <br> 01 8000 200 133</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection