@extends('layout')
@section('style', 'css/index.css')

@section('title', 'CharlieBookstore')

@section('main')

<main>
    <div class="container-xxl">
        <div class="ms-5">
            <h2>Entregas e devoluções</h2>
        </div>
        <div>
            <span>
                No Expresso perfeito, estamos empenhados em garantir que cada assinante tenha uma experiência excepcional.
            </span>
        </div>

        <div class="mt-5 ms-5 d-flex gap-5 bg-light">

            <div class="d-flex flex-column gap-5 justify-content-center m-3">
                <span>
                Nossa política de troca e devolução foi desenvolvida para oferecer tranquilidade aos nossos clientes. Ao adquirir nossos produtos, você concorda com os termos a seguir:
                </span>
                <ol>
                    <li class="mb-2">Satisfação Garantida:</li>
                        <ul class="mb-2">
                            <li>
                                Estamos confiantes na qualidade dos nossos cafés e acessórios. Se, por qualquer motivo, você não estiver satisfeito(a) com sua compra, entre em contato conosco dentro de 14 dias a partir da data de entrega para solicitar um reembolso ou troca.
                            </li>
                        </ul>
                        
                    <li class="mb-2">Processo de Devolução Simples:</li>
                        <ul class="mb-2">
                            <li>
                                Para iniciar o processo de devolução, entre em contato com o nosso serviço de atendimento ao cliente. Você receberá instruções sobre como proceder, e faremos o possível para tornar o processo simples e eficiente.
                            </li>
                        </ul>

                    <li class="mb-2">Produtos Intactos e Não Utilizados:</li>
                        <ul class="mb-2">
                            <li>
                                Aceitamos devoluções apenas de produtos que estejam em perfeitas condições, não utilizados e na embalagem original. Certifique-se de incluir todos os acessórios e materiais promocionais que acompanham o produto.
                            </li>
                        </ul class="mb-2">

                    <li class="mb-2">Trocas por Defeito ou Danos:</li>
                        <ul class="mb-2">
                            <li>
                                Se o produto que você recebeu estiver danificado ou apresentar defeitos, informe-nos imediatamente. Responderemos prontamente para resolver a situação, seja através de troca ou reembolso.
                            </li>
                        </ul>

                    <li class="mb-2">Reembolso Rápido e Eficiente:</li>
                        <ul class="mb-2">
                            <li>
                                Os reembolsos serão processados assim que recebermos e verificarmos os produtos devolvidos. Garantimos um processo ágil para minimizar qualquer inconveniente.
                            </li>
                        </ul>

                    <li class="mb-2">Custos de Devolução:</li>
                        <ul class="mb-2">
                            <li>
                                Os custos de envio para devolução são de responsabilidade do cliente, a menos que o retorno seja devido a defeitos de fabricação ou danos durante o transporte.
                            </li>
                        </ul>

                    <li class="mb-2">Cancelamento de Assinaturas:</li>
                        <ul class="mb-2">
                            <li>
                                Para cancelamentos de assinaturas, entre em contato conosco antes do próximo ciclo de faturamento para garantir que seu pedido seja interrompido a tempo.
                            </li>
                        </ul>
                </ol>
                <span>
                    Política de Envio:
                    No Expresso perfeito, nossa política de envio foi desenvolvida para garantir que você receba seus cafés gourmet e acessórios de maneira eficiente e segura. Por favor, revise os termos a seguir relacionados ao processo de envio:
                </span>
                <ol>                   
                    <li class="mb-2">Processamento Rápido:</li>
                    <ul class="mb-2">
                        <li>
                            Comprometemo-nos a processar os pedidos o mais rápido possível. Normalmente, os pedidos são despachados em até 48 horas após a confirmação do pagamento.
                        </li>
                    </ul>
                    <li class="mb-2">Entrega Segura e Rastreável:</li>
                    <ul class="mb-2">
                        <li>
                            Utilizamos serviços de entrega confiáveis para garantir que seu pedido seja entregue com segurança. Todos os pedidos são rastreáveis, permitindo que você acompanhe o status da entrega em tempo real.
                        </li>
                    </ul>
                    <li class="mb-2">Prazos de Entrega:</li>
                    <ul class="mb-2">
                        <li>
                            Os prazos de entrega podem variar com base na sua localização. Forneceremos estimativas de entrega durante o processo de checkout. Esteja ciente de que fatores externos, como condições climáticas ou eventos inesperados, podem impactar os prazos de entrega.
                        </li>
                    </ul>
                    <li class="mb-2">Custos de Envio:</li>
                    <ul class="mb-2">
                        <li>
                            Os custos de envio são calculados durante o processo de checkout com base na sua localização e no peso total dos itens no seu pedido. Oferecemos opções de envio padrão e expresso para atender às suas necessidades.
                        </li>
                    </ul>
                    <li class="mb-2">Embalagem Segura:</li>
                    <ul class="mb-2">
                        <li>
                            Todos os produtos são embalados com o máximo cuidado para garantir que cheguem em perfeitas condições. Nosso compromisso com a sustentabilidade também se reflete em práticas de embalagem eco-friendly sempre que possível.
                        </li>
                    </ul>
                    <li class="mb-2">Atualizações de Status:</li>
                    <ul class="mb-2">
                        <li>
                            Manteremos você informado(a) sobre o status do seu pedido através de e-mails de confirmação e atualizações de rastreamento. Esteja atento(a) às suas notificações para acompanhar o trajeto do seu café até a sua porta.
                        </li>
                    </ul>
                </ol>
            </div>
        </div>
    </div>
</main>



@endsection