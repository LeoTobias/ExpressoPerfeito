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
                    <h3>Minha carteira</h3>
                    <span>Salve as informações do cartão de crédito/débito para o checkout ser mais rápido.</span>
                </div>

                <table>
                    <thead class='border-bottom'>
                        <tr>
                            <th>Cartão de crédito</th>
                            <th>Data de validade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VISA (2564)</td>
                            <td>07/2025</td>
                            <td>Cartão padrão •</td>
                        </tr>
                    </tbody>
                </table>               

                <div class="d-flex row row-col">
                    <span>Informações adicionais do pagante:</span>
                    <span>Nome do cartão: {{Auth::user()->USUARIO_NOME}}</span>
                </div>

                <table>
                    <thead class='border-bottom'>
                        <tr>
                            <th>Cartão de crédito</th>
                            <th>Data de validade</th>
                        </tr>
                    </thead>
                    <tbody class='border-top'>
                        <tr>
                            <td>MasterCard (7594)</td>
                            <td>10/2028</td>
                            <td><a href="#">Defina como padrão</a></td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</main>

@endsection