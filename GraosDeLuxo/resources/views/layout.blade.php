@php use App\Models\Carrinho; @endphp
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="@yield('style')">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="/js/tooltip.js" defer></script>
        <script src="@yield('script')" defer></script>
        <script src="@yield('filtro')" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="navbar navbar-expand-xl fixed-top bg-white border-bottom">
        <nav class="container-xxl">
            <a href="{{route('home')}}" class="link text-decoration-none text-dark navbar-brand">
                <img src="/img/Logo.png" class="img-fluid">
            </a>

            <ul class="text-center d-flex justify-content-between align-items-center gap-3 list-unstyled">
                <li class="nav-item mb-1 mb-xl-0 pe-xl-1">
                    <a href="{{route('catalogo')}}" class="nav-link fw-semibold fs-5 d-none d-xl-block" aria-current="page">Assinatura</a>
                    
                </li>

                <li class="nav-item mb-1 mb-xl-0 pe-xl-1">
                    <a href="{{route('sobre')}}" class="nav-link fw-semibold fs-5 d-none d-xl-block" aria-current="page">Sobre</a>
                </li>
            </ul>

            <ul class="navbar-nav d-none d-xl-flex">
                <li class="nav-item dropdown p-2 p-xl-3 position-relative d-none d-xl-block">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="dark" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </a>
                    

                    @auth
                        <span class="position-absolute translate-middle rounded-circle bg-success user">
                            <span class="visually-hidden">Logado</span>
                        </span>
                    @endauth

                    <ul class="dropdown-menu">
                        @auth
                            <li>
                                <a href="#" class="dropdown-item disabled text-capitalize">Olá, {{Auth::user()->USUARIO_NOME}} !</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="{{route('pedidos')}}" class="dropdown-item">Meus Pedidos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{route('logout')}}" method="post" class="dropdown-item p-1 w-auto">
                                    @csrf
                                    <button type="submit" class="btn btn-default border py-0 text-start w-100">Sair</button>
                                </form>
                            </li>
                        @endauth

                        @guest
                            <li><a href="{{route('login')}}" class="dropdown-item">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="{{route('register')}}" class="dropdown-item">Cadastrar</a></li>
                        @endguest
                    </ul>
                </li>{{-- Faz parte do não responsivo --}}

                <li class="nav-item p-2 p-xl-3 position-relative text-center">
                    @auth
                        @if (Carrinho::qtdCarrinho(Auth::user()->USUARIO_ID) > 0)
                            <a href="{{route('carrinho.index')}}" class="nav-link">
                                <span class="badge rounded-5 position-absolute end-0 bottom-50 translate-middle-x badge-itens">{{Carrinho::qtdCarrinho(Auth::user()->USUARIO_ID)}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"  fill="dark" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>
                        @else
                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Sem itens no carrinho" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"  fill="dark" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>
                        @endif
                    @endauth

                    @guest
                        <a href="{{route('carrinho.index')}}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"  fill="dark" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                    @endguest
                </li>
            </ul>
        </nav>
    </header>

    @yield('main')

    <footer>
        @if (Route::currentRouteName() == 'home')
            
        @endif

        <hr class="hr py-0.5">    

        <div class="container-xxl">
            <div class="row row-cols-1 row-cols-md-3 mt-1">
                <div class="col d-flex d-md-block flex-column align-items-center justify-content-center my-5 my-md-1">
                    <span class="text-white fw-bold fs-5 d-block mb-4">Loja</span>
                        <div class="d-flex flex-column gap-1">
                            <a href="{{route('catalogo')}}" class="link text-white">Assinaturas</a>
                            <a href="{{route('pagamento')}}" class="link text-white">Politica de privacidade</a>
                            <a href="{{route('pagamento')}}" class="link text-white">Métodos de pagamento</a>
                            <a href="{{route('entrega')}}" class="link text-white">Entregas e devoluções</a>
                        </div>
                        
                </div>
                
                <div class="col d-flex flex-column align-items-center justify-content-center my-5 my-md-1">
                    <span class="text-white fw-bold fs-5">Confira Nossas Redes:</span>

                    <ul class="list-group list-group-horizontal border border-0 ms-0 mt-4">
                        <li class="list-group-item bg-transparent border border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </li>
                        
                        <li class="list-group-item bg-transparent border border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-instagram text-white" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </li>
                        <li class="list-group-item bg-transparent border border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-twitter text-white" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>                                    </svg>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="col d-flex flex-column align-items-center align-items-md-end justify-content-center my-2 my-md-1">
                    <span class="text-white fw-bold fs-5 d-block mb-4">Contato</span>              
                        <a href="#" class="link text-white d-block">Tel.: (11) 95739-4125</a>
                        <a href="#" class="link text-white d-block pt-2">Grãosdeluxo@expresso.com</a>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <span class="d-block text-center text-white py-3">©2024 por Grãos de luxo Ltda.</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
