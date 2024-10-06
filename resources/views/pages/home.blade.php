@extends('layouts.main')

@section('css')
    {{--<link rel="stylesheet" href="{{ asset('plugins/swiperjs/css/swiperjs.min.css') }}">--}}
    <!-- Swiperjs -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endsection

@section('scripts')
    <!-- Swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <!-- Hero -->
    @include('../partials/hero')
    <!-- Servicos -->
    @include('../partials/services')
    <!-- Suporte -->
    @include('../partials/suporte')
    <!-- Depoimentos -->
    @include('../partials/depoimentos')
    <!-- FAQ list -->
    @include('../partials/faq')
</main>
@endsection