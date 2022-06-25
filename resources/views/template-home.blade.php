{{-- Template Name: Home --}}

@extends('layouts.app')

@section('content')
    <div class="full cover" style="padding-top: 50px">
        <div class="mid std">
            @foreach ($studants as $item)
                <p>{{ $item[0] }} - {{ $item[1] }} </p>
            @endforeach
        </div>
        <div class="qrtl-color-bar" style="width: 20px; height: 400px"></div>
        <div class="mid">
            <img class="shield" src="@asset('images/qrtl-shield.svg')">
        </div>
    </div>
    @include('partials.una')
    @component('components.page-comp', ['tittle' => 'Sobre a empresa:'])
        <h4>1.1. Histórico da empresa: </h4>
        <p>A quartel design é conhecida por desenvolver projetos com resultados de alto calibre. Nossa equipe foi fundado em 2009, em Belo Horizonte. Desde então, nosso foco é desenvolver projetos originais e exclusivos, sempre de acordo com o perfil e os objetivos de cada cliente. Somos um time jovem que tem como premissa ajudar as marcas a construírem o seu legado, sempre com excelência, criatividade e estratégia.</p>
        <h4>1.2 Qual o negócio da empresa?</h4>
        <p>A empresa vende varias soluções de marketing, como sites, publicidade, gerenciamento de redes sociais, edições de vídeo para internet e televisão. Projetos entregues:</p>
        <div id="gallery-1" class="gallery galleryid-17 gallery-columns-3 gallery-size-medium">
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="148" height="116" src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-rappy.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="191" height="116"
                        src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-rareway.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon portrait">
                    <img width="110" height="116"
                        src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-seu-elias.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="191" height="116"
                        src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-universal-studios.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="191" height="116"
                        src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-alianca-energia.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon portrait">
                    <img width="115" height="116" src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-bope.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon portrait">
                    <img width="106" height="116" src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-fiat.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="152" height="116" src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-lagum.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <img width="171" height="116"
                        src="https://quarteldesign.com/wp-content/uploads/2021/09/logo-mineirao.png"
                        class="attachment-medium size-medium" alt="" loading="lazy">
                </div>
            </figure>
        </div>

        <h4>1.3. Número de funcionários:</h4>
        <p>Cerca de 40 funcionários fixos que fazem parte de diferentes setores, Pode ser dividido em 4 áreas, marketing, design, ti e administrativo. </p>

        <h4>1.4. Hierarquia de TI: </h4>
        <p>Na empresa existem funcionários de TI, Um Head de TI que faz a organização dos projetos grandes, definição de estratégias e arquiteturas que serão utilizadas, também como a criação de wireframe. Um Gerente de Projeto que faz a distribuições das demandas e contato com o cliente. Dois desenvolvedores que fazem a execução dos projetos de desenvolvimento. Um funcionário focada na parte de infraestrutura e suporte aos cliente hospedados e um design UX que faz a criação dos layouts que serão realizados pelos devs (isso dentro da area de dev, nao incluindo marketing e administrativo). </p>
    @endcomponent
    @component('components.page-comp', ['tittle' => 'Orçamento Anual:'])
        <p>O orçamento anual da empresa é um “mapa” de todas as receitas e gastos de uma companhia ao longo de um ano inteiro. O documento pode ser feito de inúmeras formas, por isso é essencial que ele esteja alinhado à estratégia e às metas do negócio </p>
        <h4>1.5 A TI faz orçamento anual? Descreva o processo :</h4>
        <p>
      Não, o orçamento anual é realizado pelo financeiro de um formato geral da
      empresa, sem contar especificamente a area de TI.
    </p>
    @endcomponent
    @component('components.page-comp', ['tittle' => 'Portfólio de serviços de TI:'])
        <ul>
            <li>
                Fornece informações sobre todos os serviços através do ciclo de vida;
            </li>
            <li>
                Identifica serviços na fila para desenvolvimento (Funil de Serviços),
                serviços em operação (Catálogo de Serviços), e serviços aposentados ou
                retirados do Portfólio.
            </li>
        </ul>

        <h4>2.0. Possui portfólio de serviços de TI?</h4>
        <p>
            Atualmente a Quartel não possui um Portifolio de serviços. Os serviços são
            catalogados pelo setor de vendas, porém somente os que dizem respeito a
            venda aos clientes e os serviços internos não são catalogados.
        </p>
        <p>
            A proposta principal do nosso trabalho é o desenvolvimento e construção de
            um portifolio de serviço para a empresa.
        </p>
    @endcomponent

    @component('components.page-comp', ['tittle' => 'Levantamento de Ics:'])
        <p>
            Um item de configuração (IC) é qualquer componente de serviço, elemento de
            infraestrutura ou outro item que precisa ser gerenciado para garantir a
            entrega bem-sucedida de serviços.
        </p>
        
        <h4>3.1. A TI possui política de utilização de recursos computacionais? Se
        sim, anexar e analisar, se não criar. Escolher um processo.</h4>
        <ul>
        <li>
            ICs disponíveis na empresa: Macs, Periféricos, Servidor de homologação,
            softwares (Elementor, plugins pagos, Git Kraken).
        </li>
        </ul>
        <p>
        Não tem politicas de utilização de recursos bem documentada ou explicita,
        somente alguns conhecimentos gerais como por exemplo a utilização da
        internet conjunta nas dependencias da empresa, a disponibilidade de
        computadores para funcionarios que trabalham no formato presencial e a
        disponibilização dos softwares de desenvolvimento para os funcionarios
        trabalharem.
        </p>

        <p>
        O significado da sigla SLA é “Service Level Agreement”, em português, é
        “Acordo de Nível de Serviço”. Esse é um contrato firmado entre as partes
        envolvidas em uma negociação que determina quais são as responsabilidades
        de cada um em relação aos serviços contratados.
        </p>
        <h4>
        O SLA serve para definir o escopo de trabalho e estabelece quais serão as
        normas, acordos, metas e demais questões relacionadas ao serviço que será
        prestado.
        </h4>
        <h4>
        4.0. Possui service desk ou helpdesk? Se sim, possui SLA? Existe registro
        disso?
        </h4>
        <p>
        Não possui help Desk, todos as solicitações seguem direto para o Service
        desk. Para as solicitações internas não há SLA de atendimento. Para o
        suporte aos clientes existe um SLA bem definido.
        </p>
    @endcomponent

    @component('components.page-comp', ['tittle' => 'SLO (Objetivo de Nível de Serviço):'])
        <p>
        O SLO (objetivo de nível de serviço) é um acordo dentro de um SLA sobre
        uma métrica específica, como disponibilidade ou tempo de resposta.
        Portanto, se o SLA for o acordo formal entre você e o cliente, os SLOs são
        as promessas individuais que você faz a esse cliente.
        </p>
        <h4>4.1. Existe SLO?</h4>
        <p>
        R: Não há SLO, as demandas são organizadas de acordo com a necessidade do
        cliente. Então os tempos de solução variam.
        </p>
        <h4>4.2. Existe SLF?</h4>
        <p>
        O SLF é o tempo limite para solução de problemas ligados a fornecedores
        internos. A área de TI não possui SLF.
        </p>

        <h4>OKR (Objectives and Key Results)</h4>
        <p>
        OKR (Objectives and Key Results) é uma metodologia de gestão que funciona
        como um protocolo colaborativo de definição de metas para a organização,
        equipes e indivíduos. Sua finalidade é ajudar a garantir que toda a
        empresa concentre seus esforços nos objetivos mais importantes.
        </p>
        <h4>4.3. Existe OKR para a área de TI? Quais?</h4>
        <p>
        A empresa possui OKR mas não foi liberado o acesso a essa informação por
        este motivo não será apresentada aqui.
        </p>
    @endcomponent

    @component('components.page-comp', ['tittle' => 'Gerenciamento de incidentes e problemas:'])
        <p>
        O gerenciamento de incidentes é um processo ITIL que tem como principal
        objetivo restaurar a operação normal do serviço o mais rápido possível,
        minimizando os prejuízos à operação do negócio e garantindo assim o melhor
        nível de serviço e disponibilidade
        </p>
        <p>
        O gerenciamento de problemas não se trata apenas de encontrar e corrigir
        incidentes, mas identificar e entender as causas associadas a um
        incidente, bem como identificar o melhor método para eliminar a causa
        raiz.
        </p>
        <h4>
        4.4. A TI trata gerenciamento de incidentes e problemas separadamente?
        </h4>
        <p>
        Não. A empresa trata incidentes e problema da mesma maneira, seguindo as
        mesmas regras de atendimento.
        </p>
        <!-- Fim slide 9-->
        <p>Gerenciamento de eventos e alertas</p>
        <p>
        O objetivo do processo de Gerenciamento de Eventos e Alertas é monitorar e
        gerar alertas ou notificações de um Serviço de TI ou item de Configuração
        considerados relevantes para os processos
        </p>
        <h4>
        4.5. A TI trabalha com gerenciamento de eventos e alertas? Para quais
        serviços?
        </h4>
        <p>
        A Ti trabalha com gerenciamento de alertas para serviços de Nuvem, que são
        gerados através de um CRON que caso ache algum problema restaura o ultimo
        backup e caso esse backup tenha alguma anomalia é aberto um chamado para o
        suporte.
        </p>
    @endcomponent

     @component('components.page-comp', ['tittle' => 'Gestão de projetos de TI:'])
        <p>
        Gestão de projetos de TI é uma estratégia que visa organizar, programar e
        delegar tarefas, de modo que sua conclusão e resultados vá ao encontro dos
        objetivos do solicitante, que pode ser um cliente ou a própria empresa.
        </p>
        <h4>4.6. Como os projetos de TI são gerenciados? Descreva.</h4>
        <p>
        O processo de gerenciamento do Quartel é diferente de outras agências. Ele
        consiste nos marcos principais da criação de um projeto:
        </p>
        <ul>
        <li>Escopo</li>
        <li>
            Desenvolvimento
            <ul>
            <li>Wireframe</li>
            <li>Layout</li>
            <li>Desenvolvimento</li>
            <li>Testes</li>
            </ul>
        </li>
        <li>Reunião de apresentação</li>
        <li>Entrega</li>
        </ul>
        <!-- Fim slide 11-->
        <p>
        Além dessas informações, o processo da quartel tem algumas peculiaridades:
        </p>
        <ul>
        <li>
            O cliente só tem o seu projeto apresentado na etapa 6, quando já está na
            plataforma. Isso evita que o cliente desapareça e atrase o projeto.
        </li>
        <li>
            Após a entrega, o cliente tem o direito de solicitar até 2 rodadas de
            ajustes para os itens do escopo. Novos itens ou solicitados após as
            rodadas devem ser cobrados à parte
        </li>
        <li>
            Alguns projetos têm esse formato alterado dependendo da sua
            complexidade, é algo que deve ser avaliado com o Gerente de Projetos e
            Head de TI
        </li>
        <li>
            Se o cliente não enviar o conteúdo na etapa 1, que é o escopo, a Quartel
            não vai cadastrá-lo e isso será feito pelo próprio cliente nas rodadas
            de ajustes ou após a publicação.
        </li>
        <li>
            O gerente de projetos recebe o projeto da gerente comercial (Priscila).
            Geralmente ela inclui o projeto com contrato e escopo nessa. Caso não
            tenha escopo e contrato deve pedir direto para ela.
        </li>
        </ul>
     @endcomponent

      @component('components.page-comp', ['tittle' => 'Regras de Negócio:'])
        <p>
        Regras de Negócio são limites impostos às operações, de forma que elas
        sigam corretamente em direção às políticas e aos objetivos da instituição.
        </p>
        <h4>4.7. Existe documentação de regras de negócio para o suporte?</h4>
        <p>
        R: A empresa possui uma regra de negocio para o atendimento ao cliente,
        que é repassada com os gestores de cada area e funcionarios ligados a area
        de atendimento ao cliente.
        </p>
        <!-- Fim slide 13-->
        <h4>Gerenciamento de capacidade e disponibilidade</h4>
        <p>
        Processo com o objetivo de tornar possível o atendimento dos requisitos
        relacionados à capacidade e a disponibilidade no desempenho do ambiente de
        TI dentro de um acordo de serviço e a um custo viável. Garante que todos
        os processos, infraestruturas, ferramentas, papéis, etc. de TI sejam
        adequados para as metas de nível de serviço acordadas para
        disponibilidade.
        </p>
        <h4>
        5.0. Trabalham com gerenciamento de capacidade, disponibilidade ? Como?
        Utilizam algum sistema? Qual? Os funcionários percebem valor ?
        </h4>
        <p>
        Sim, a empresa utiliza o gerenciamento de capacidade e disponibilidade em
        alguns serviços que são disponibilizados ao cliente, como em relação as
        Hospedagens, é feita um calculo de espaço contratado do servidor, para o
        gasto medio por cliente. Clientes com um grande fluxo de acesso tem mais
        disponibilização de cota para evitar qualquer instabilidade no serviço.
        </p>
        <!-- Fim slide 14-->
      @endcomponent

      @component('components.page-comp', ['tittle' => 'Melhoria Contínua:'])
        <p>
      Melhoria contínua é a prática adotada por diversas empresas visando tornar
      seus resultados cada vez melhores, mais eficientes e eficazes, sejam eles
      em produtos, processos ou serviços. É um processo cíclico sem fim, afinal,
      sempre há novas oportunidades de melhoria para serem identificadas e
      colocadas em prática.
    </p>
    <h4>
      6.0. Descreva o processo de melhoria contínua da TI dessa empresa. Caso
      não tenha, faça a proposição.
    </h4>
    <p>
      R: Sim, a empresa usa algumas estratégias para se manter ativa e mais
      atualizada em segurança e novas tecnologias.
    </p>
    <h4>
      Escrever mais sobre segurança, leis que gerem tecnologia e frameworks que
      funcionam de forma mais Lisinhas
    </h4>
    <p style="color: red;">(COMPLETAR RESPOSTA)</p>
    <!--Escrito em vermelho-->
    <!-- Fim slide 15-->
      @endcomponent

      @component('components.page-comp', ['tittle' => 'Headcount:'])
        <p>
        HeadCount (”Contagem de Cabeças”) se refere a quantos colaborados existem
        na empresa levando em consideração também quais as atividades que os
        colaborados se envolvem, geralmente serve para analisar os recursos
        humanos que a empresa detém, verificar necessidade de treinamentos e
        capacitação entre outros
        </p>
        <h4>7.0. Como foi construído o Headcount de TI?</h4>
        <p>
        O HeadCount é estruturado sobre demanda, que é analisada pela GP, na
        empresa foi analisado que as demandas diarias podem ser supridas por 2
        devs e um head de TI. Em caso de aumento do fluxo de demandas a GP pode
        fazer a contratação de outros devs em formato de freelancer, fazendo a
        contração das horas de trabalho alinhadas com o valor total de horas do
        projeto definidas no escopo. Os devs são escolhidos a partir de uma lista
        de contatos que a empresa mantem com ex funcionários e desenvolvedores
        parceiros, os atuais funcionários também podem ser chamados para suprir a
        demanda, porem essas horas são realizadas fora do seu horário de trabalho
        padrão, seguindo a mesma regra de contratação.
        </p>
        <!-- Fim slide 16-->
        <h4>9.0. Considerações finais do grupo e análises de proposição.</h4>
        <!-- Fim slide 17-->
      @endcomponent
@endsection
