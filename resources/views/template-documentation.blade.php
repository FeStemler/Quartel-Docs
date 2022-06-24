{{-- Template Name: Documentação --}}

@extends('layouts.doc')

@section('content')
    <div class="full doc">
        @include('partials.sidebar-doc')
        <div class="qrtl-color-bar"></div>
        @include('partials.conteudo-doc')
    </div>
@endsection
