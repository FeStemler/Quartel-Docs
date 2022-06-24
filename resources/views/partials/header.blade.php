<header class="banner">
    <div class="container">
        <a class="brand" href="{{ home_url('/') }}"><svg id="qrtl_logo_trace" xmlns="http://www.w3.org/2000/svg"
                width="163.654" height="29.611" viewBox="0 0 163.654 29.611" style="display: inline;">
                <g id="Grupo_1" data-name="Grupo 1" transform="translate(-307.059 -382.269)">
                    <path id="Caminho_1" data-name="Caminho 1"
                        d="M343.959,405.036V382.769h5.124V406.6h8.931V382.769h5.124v22.266a6.177,6.177,0,0,1-1.805,4.514,6.112,6.112,0,0,1-4.539,1.83H350.3a6.251,6.251,0,0,1-6.344-6.344Z"
                        transform="translate(-10.292 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="137.90953063964844" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_2" data-name="Caminho 2"
                        d="M386.7,382.769h6.49a6.25,6.25,0,0,1,6.344,6.344V411.38h-5.124v-8.571h-8.931v8.571h-5.124V389.113a6.251,6.251,0,0,1,6.344-6.344Zm7.71,4.783h-8.931v10.474h8.931Z"
                        transform="translate(-20.584 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="146.1694793701172" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_3" data-name="Caminho 3"
                        d="M434.108,384.6a6.133,6.133,0,0,1,1.83,4.514v3.695a4.589,4.589,0,0,1-2.489,4.291,5.207,5.207,0,0,1,2.489,4.441v9.84h-5.123V399.49h-8.931v11.89h-5.124V382.769h12.835A6.133,6.133,0,0,1,434.108,384.6Zm-3.294,2.953h-8.931v7.156h8.931Z"
                        transform="translate(-30.876 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="150.69168090820312" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_4" data-name="Caminho 4"
                        d="M447.786,387.552v-4.783h19.227v4.783h-7.028V411.38h-5.124V387.552Z"
                        transform="translate(-39.649 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="95.67596435546875" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_5" data-name="Caminho 5"
                        d="M497.025,382.769v4.783h-10.98v7.156h10.589v4.782H486.044V406.6h10.98v4.783h-16.1V382.769Z"
                        transform="translate(-49.017 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="132.56793212890625" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_6" data-name="Caminho 6" d="M517.818,382.769V406.6h10.4v4.783H512.7V382.769Z"
                        transform="translate(-58.001 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="88.26397705078125" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                    <path id="Caminho_7" data-name="Caminho 7"
                        d="M329.006,406.6h-2.268V389.113a6.252,6.252,0,0,0-6.344-6.344H313.9a6.251,6.251,0,0,0-6.344,6.344v15.922a6.141,6.141,0,0,0,1.781,4.49,6.24,6.24,0,0,0,4.514,1.854h15.151Zm-16.323,0V387.552h8.931V406.6Z"
                        transform="translate(0 0)" stroke="rgba(17, 17, 17, 0)" stroke-width="0"
                        stroke-dasharray="148.04977416992188" style="stroke-dashoffset: 0px; fill: rgb(255, 255, 255);">
                    </path>
                </g>
            </svg></a>
        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>
    </div>
</header>
