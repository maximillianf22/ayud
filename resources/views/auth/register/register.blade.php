@extends('layout.auth')

@section('content')
<div class="features-1 header-filter" style="background-image:url(/assets/img/bg-forms.jpg); background-size:cover;">
    <div class="page-header-image" ></div>
    <div class="content">
        <div class="container">
            <div class="col-md-7 ml-auto mr-auto">
                <div class="card card-login card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 form-top pt-4 d-sm-none d-none d-lg-block d-md-block">
                                <a onclick="history.back(-1)"><h5><i class="fas fa-caret-left"></i>Volver</a></h5>
                            </div>
                            <div class="col-md-8 col-11 ml-lg-0 ml-2 bg-black form-top text-center">
                                <h3 class="font-weight-bold text-primary py-4 mb-0">Crear Cuenta</h3>
                            </div>
                        </div>
                        <form class="form" method="" action="">
                            <div class="card-body px-lg-5">
                                <label>Nombre completo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="Nombre completo">
                                </div>
                                <label>Cedula</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Numero de cedula">
                                </div>
                                <label>Correo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="Correo">
                                </div>
                                <label>telefono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Numero de telefono">
                                </div>
                                <label>Edad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control input-md" placeholder="Edad">
                                </div>
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control input-md" placeholder="Contraseña">
                                </div>
                                <label>Repetir contrseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control input-md" placeholder="Contraseña">
                                </div>
                                <p class="text-left"><a href="/recuperar" class="font-weight-400 text-left"><b>¿Olvidaste la contraseña?</b></a></p>
                                <div class="card-footer text-center mt-4">
                                    <a href="/informacion" class="btn btn-black btn-round btn-lg btn-block"><h4 class="font-weight-bold m-0">Continuar</h4></a>
                                </div>
                                <p><a href="/login" class="link footer-link text-dark"><b>¿Ya tienes una cuenta?</b></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection