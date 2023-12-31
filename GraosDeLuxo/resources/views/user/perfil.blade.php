@extends('layout')
@section('style', 'css/index.css')

@section('title', 'ExpressoPerfeito')

@section('main')

<main>
    <div class="container ">
        <div class="d-flex justify-content-around">
            <nav class="ms-5 mt-5">
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('carteira')}}">Minha carteira</a></li>
                    <li class="mb-2"><a href="{{route('assinatura')}}">Minha Assinatura</a></li>
                    <li class="mb-2"><a href="{{route('perfil')}}">Minha Conta</a></li>
                </ul>
            </nav>

            <div class="border border-3 rounded d-flex flex-column gap-5 py-5 px-4">
                <div class="">
                    <h3>Minha conta</h3>
                    <span>Veja as suas informações pessoais abaixo.</span>
                </div>
                
                <div class="border border-1"></div>
                
                <div class="d-flex row row-col">
                    <h5>Conta</h5>
                    <span class="mb-1">Email de login:</span>
                    <span class="mb-1">{{Auth::user()->USUARIO_EMAIL}}</span>
                    <span class="mb-1">Seu email de login não pode ser alterado</span>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection