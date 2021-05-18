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
                                <h3 class="font-weight-bold text-primary py-4">Iniciar sesión</h3>
                            </div>
                        </div>
                        <form class="form" method="" action="">
                            <div class="card-body px-lg-5">
                                <label>Correo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="Correo">
                                </div>
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control input-md" placeholder="Contraseña">
                                </div>
                                <p class="text-left"><a href="/recuperar" class="font-weight-400 text-left"><b>¿Olvidaste la contraseña?</b></a></p>
                                <div class="card-footer text-center mt-4">
                                    <a href="/inicio" class="btn btn-black btn-round btn-lg btn-block"><h4 class="font-weight-bold m-0">Entrar</h4></a>
                                </div>
                                <p><a href="/registro" class="link footer-link text-dark"><b>¿No tienes una cuenta? Regístrate</b></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection