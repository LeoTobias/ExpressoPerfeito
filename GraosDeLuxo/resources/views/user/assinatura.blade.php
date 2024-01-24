@extends('layout')
@section('style', 'css/index.css')

@section('title', 'ExpressoPerfeito')

@section('main')

<main>
    <div class="container ">
        <div class="d-flex justify-content-around">
            <nav class="ms-5 mt-5 listinha">
                <ul class="list-unstyled">
                    <li class="mb-2 item-listinha"><a  class="text-decoration-none"  href="{{route('carteira')}}">Minha carteira</a></li>
                    <li class="mb-2 item-listinha listinha-active"><a  class="text-decoration-none" href="{{route('assinatura')}}">Minha Assinatura</a></li>
                    <li class="mb-2 item-listinha"><a  class="text-decoration-none"  href="{{route('perfil')}}">Minha Conta</a></li>
                </ul>
            </nav>

            <div class="border border-3 rounded d-flex flex-column gap-5 py-5 px-4">
                <div class="">
                    <h3>Assinatura</h3>
                    <span>Veja e gerencie sua assinatura</span>
                </div>
                
                <div class="border border-1"></div>
                
                <div class="d-flex row">
                    <div class="d-flex col-10">
                            <h6 class="col-6">Plano Familiar (Semestral)</h6>
                            <span class="d-block col-4">Cancelar</span>
                            <span class="d-block col-4">R$ 75.99</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>

@endsection