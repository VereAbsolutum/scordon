@extends('layouts.main')

@section('css')
{{--<link rel="stylesheet" href="{{ asset('plugins/swiperjs/css/swiperjs.min.css') }}">--}}
<!-- Swiperjs -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('scripts')
<!-- Swiperjs -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <!-- Hero -->
    @include('../templates/hero')
    <!-- Services -->
    @include('../templates/services')
    <!-- Destaque Telesuporte -->
    @include('../templates/destaque-telesuporte')
    <!-- Depoimentos -->
    @include('../templates/depoimentos')
    <!-- FAQ -->
    @include('../templates/faq')
</main>
@endsection