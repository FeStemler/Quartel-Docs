<div class="content-box">
    <div class="content">
        <h2>{{ the_title() }}</h2>
        @if (the_content() == null)
            <p>Nenhuma informação cadastrada</p>
        @else
            {{ the_content() }}
        @endif
    </div>
    <div class="participants">
        <div class="participant">
            <img src="">
            <div class="text">
                <h5>Keyla</h5>
                <p>Gerente de projetos</p>
            </div>
        </div>

        <div class="participant">
            <img src="">
            <div class="text">
                <h5>Keyla</h5>
                <p>Gerente de projetos</p>
            </div>
        </div>
    </div>
</div>
