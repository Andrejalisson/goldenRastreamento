@extends('admin.templates.acesso')

@section('corpo')
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
    <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
        <div class="w-md-400px">
            <form class="form w-100" novalidate="novalidate" method="POST" action="/EsqueceuSenha">
                <div class="text-center mb-10">
                    <h1 class="text-dark fw-bolder mb-3">Esqueceu a senha?</h1>
                    <div class="text-gray-500 fw-semibold fs-6">Informe seu email de acesso e deixe o resto com a gente. ;)</div>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="E-mail" name="email" autocomplete="off" class="form-control bg-transparent" />
                </div>
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                        <span class="indicator-label">Enviar</span>
                    </button>
                    <a href="/Login" class="btn btn-light">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




