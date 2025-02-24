@extends('layouts.landing-page')
@section('content')

    <!-- Carousel Start -->
    @include('komponen-site.slideshow')
    <!-- Carousel End -->

    <!-- Product Card -->
    @include('komponen-site.produk-section')


{{--    <!-- Service Start -->--}}
{{--    @include('komponen-site.service-section')--}}
{{--    <!-- Service End -->--}}

    <!-- About Start -->
    @include('komponen-site.about-section')
    <!-- About End -->

    <!-- Fact Start -->
    @include('komponen-site.fact-section')
    <!-- Fact End -->

{{--    @include('komponen-site.service-2-section')--}}

{{--    <!-- Booking Start -->--}}
{{--    @include('komponen-site.booking-section')--}}
{{--    <!-- Booking End -->--}}

{{--    <!-- Team Start -->--}}
{{--    @include('komponen-site.team-section')--}}
{{--    <!-- Team End -->--}}

    <!-- Testimonial Start -->
    @include('komponen-site.testimonial')
    <!-- Testimonial End -->

@endsection
