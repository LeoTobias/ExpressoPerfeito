@extends('layout')
@section('style', 'css/index.css')

@section('title', 'CharlieBookstore')

@section('main')

<main>
    <div class="container-xxl">
        <div class="ms-5">
            <h2>Metodos de pagamentos</h2>
        </div>
        <div>
            <span>
                No Expresso perfeito, oferecemos uma variedade de métodos de pagamento seguros e convenientes para garantir uma experiência de compra tranquila
            </span>
        </div>

        <div class="mt-5 ms-5 d-flex gap-5 bg-light">

            <div class="d-flex flex-column gap-5 justify-content-center m-3">
                <span>
                Aqui estão os métodos de pagamento aceitos:
                </span>
                <ul>
                    <li>Cartões de crédito/débito</li>
                    <li>PayPal</li>
                    <li>Boleto bancário</li>
                    <li>PIX</li>
                </ul>
                <span>
                    Política de Privacidade e Segurança:
                    No Expresso perfeito, levamos a privacidade e a segurança dos nossos clientes muito a sério. Nossa política foi desenvolvida para garantir que suas informações pessoais estejam protegidas durante toda a sua experiência conosco.
                </span>
                <ul>                   
                    <li class="mb-2">Coleta de Informações:
                    Coletamos informações pessoais apenas quando necessário para processar pedidos e fornecer uma experiência personalizada. Isso pode incluir nome, endereço, informações de pagamento e detalhes de contato.</li>
                    <li class="mb-2">Uso Responsável:
                    Suas informações serão usadas exclusivamente para processar pedidos, fornecer suporte ao cliente e comunicar informações relevantes sobre produtos e promoções. Não compartilhamos suas informações com terceiros não afiliados sem o seu consentimento.</li>
                    <li class="mb-2">Proteção de Dados Sensíveis:
                    Utilizamos protocolos de segurança avançados para proteger dados sensíveis, como informações de pagamento. Nossos sistemas são constantemente atualizados para garantir a conformidade com os padrões de segurança mais recentes.</li>
                    <li class="mb-2">Transparência:
                    Somos transparentes sobre como suas informações são coletadas, usadas e armazenadas. Ao aceitar nossos Termos e Condições, você concorda com a coleta e uso das informações de acordo com esta política.</li>
                </ul>
            </div>
        </div>
        
    </div>
</main>



@endsection