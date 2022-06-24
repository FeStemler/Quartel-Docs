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
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
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
    @endcomponent
    @component('components.page-comp', ['tittle' => 'Sobre a empresa:'])
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
    @endcomponent
    @component('components.page-comp', ['tittle' => 'Sobre a empresa:'])
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>

        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
    @endcomponent
    @component('components.page-comp', ['tittle' => 'Sobre a empresa:'])
        <h4>Labore sit voluptate</h4>
        <p>Labore sit voluptate duis minim nisi labore eu dolor laborum. Ea dolor irure duis tempor dolor nulla
            exercitation fugiat commodo dolor aute. Id id do nisi cupidatat anim proident do est proident duis commodo
            irure labore ex. Quis commodo esse ullamco aliqua esse qui nisi aliquip aliquip ex.</p>
    @endcomponent
@endsection
