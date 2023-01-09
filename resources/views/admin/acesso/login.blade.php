@extends('admin.templates.acesso')

@section('corpo')
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
    <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
        <div class="w-md-400px">
            <form class="form w-100" novalidate="novalidate" method="post" action="{{route('login')}}">
                @csrf
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Login</h1>
                    <div class="text-gray-500 fw-semibold fs-6">Entre para administrar</div>
                </div>
                <div class="separator separator-content my-14">
                    <span class="w-125px text-gray-500 fw-semibold fs-7">Credenciais</span>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="E-mail" name="email" autocomplete="off" class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-3">
                    <input type="password" placeholder="Senha" name="password" autocomplete="off" class="form-control bg-transparent" />
                </div>
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>
                    <a href="/EsqueceuSenha" class="link-primary">Esqueceu a senha?</a>
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                        <span class="indicator-label">Entrar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




