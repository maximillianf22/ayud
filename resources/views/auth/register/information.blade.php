@extends('layout.auth')

@section('content')
<style>
    .dropdown-toggle {
        font-size: 14px;
        padding: 5px;
    }

    .bootstrap-select {
        border-radius: 3rem !important;
    }
</style>
<div class="features-1 header-filter" style="background-image:url(/assets/img/bg-forms.jpg); background-size:cover;">
    <div class="page-header-image"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-7 ml-auto mr-auto">
                <div class="card card-login card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 form-top pt-4 d-sm-none d-none d-lg-block d-md-block">
                                <a onclick="history.back(-1)">
                                    <h5><i class="fas fa-caret-left"></i>Volver
                                </a></h5>
                            </div>
                            <div class="col-md-8 col-11 ml-lg-0 ml-2 bg-black form-top text-center">
                                <h3 class="font-weight-bold text-primary py-4 mb-0">Cuentanos mas de ti</h3>
                            </div>
                        </div>
                        <form class="form" method="" action="">
                            <div class="card-body px-lg-5">
                                <label>¿Tienes sitio web?</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-md" placeholder="www.example.com...">
                                </div>
                                <label>¿Que especialidad tienes?</label>
                                <div class="input-group">
                                    <select class="form-control input-md border" id="exampleFormControlSelect1">
                                        <option>Tapizados</option>
                                        <option>Muebles</option>
                                        <option>Sillas</option>
                                    </select>
                                </div>
                                <label>¿En que se centra tu negocio?</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <select class="selectpicker form-control input-md border bg-black" multiple data-live-search="true" style="height: 50px; margin-top: -10px;">
                                        <option>Tapizados</option>
                                        <option>Muebles</option>
                                        <option>Sillasx</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Describe tu negocio</label>
                                    <textarea name="message" class="form-control border" placeholder="Resumen de tu negocio..." id="message" rows="6" style="border-radius: 1rem;"></textarea>
                                </div>
                                <label>¿Sobre que te gustaría recibir promociones?</label>
                                <div class="form-check form-check-radio text-left">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <span class="form-check-sign"></span>
                                        <b>Descuentos</b>
                                    </label>
                                </div>
                                <div class="form-check form-check-radio text-left">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked="">
                                        <span class="form-check-sign"></span>
                                        <b>Nuevos servicios</b>
                                    </label>
                                </div>
                                <div class="form-check form-check-radio text-left">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3" checked="">
                                        <span class="form-check-sign"></span>
                                        <b>Otros (Eventos, Lives)</b>
                                    </label>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-5">
                                        <a href="/login" class="btn btn-neutral btn-lg btn-block btn-round border-primary border bg-white">
                                            <h4 class="font-weight-bold m-0 text-primary">Omitir</h4>
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <a href="/login" class="btn btn-black btn-round btn-lg btn-block">
                                            <h4 class="font-weight-bold m-0">Continuar</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection