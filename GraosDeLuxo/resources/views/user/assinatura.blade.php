@extends('layout')
@section('style', 'css/index.css')

@section('title', 'CharlieBookstore')

@section('main')

<main>
    <div class="container ">
        <div class="d-flex justify-content-around">
            <nav class="ms-5 mt-5">
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Meus endereços</a></li>
                    <li class="mb-2"><a href="{{route('carteira')}}">Minha carteira</a></li>
                    <li class="mb-2"><a href="{{route('assinatura')}}">Minha Assinatura</a></li>
                    <li class="mb-2"><a href="{{route('perfil')}}">Minha Conta</a></li>
                </ul>
            </nav>

            <div class="border border-3 rounded d-flex flex-column gap-5 py-5 px-4">
                <div class="">
                    <h3>Assinaturas</h3>
                    <span>Veja e gerencie as assinaturas que você adquiriu</span>
                </div>
                
                <div class="border border-1"></div>
                
                <div class="d-flex row">
                    <div class="d-flex row mb-4">
                        <h6 class="col-4">**{{Auth::user()->PRODUTO_NOME}}</h6>
                        <span class="d-block col-4">Email de login:</span>
                        <span class="d-block col-4">{{Auth::user()->PRODUTO_PRECO}}</span>
                    </div>
                    <div class="d-flex row">
                        <h6 class="col-4">**{{Auth::user()->PRODUTO_NOME}}</h6>
                        <span class="d-block col-4">Email de login:</span>
                        <span class="d-block col-4">{{Auth::user()->PRODUTO_PRECO}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection