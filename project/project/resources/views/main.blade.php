@extends('header')

@section('head_add')
<link rel="stylesheet" href="{{asset("css/main.css")}}">
@endsection

@section('title')
    Main Page
@endsection

@section('main_content')
    <section class="main_logo">
    <picture><img src="{{asset("img/intro.jpg")}}" alt=""></picture>
        <div class="present">
            <div class="loc_logo">Lorem Ipsum</div>
            <div class="about_us">Transport company</div>
        </div>
    </section>
    <section class=tagline>
        <div class="sub_tagline">
            <div class="self_tagline">aaaaaaaaaa</div>
        </div>
    </section>
@endsection

@extends('footer')
