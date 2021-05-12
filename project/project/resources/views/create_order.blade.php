@extends('header')

@section('head_add')
    <link rel="stylesheet" href="{{asset("css/create_order.css")}}">
@endsection


@section('title')
    Create Order
@endsection

@section('main_content')

    <form method="POST" action="create_order/post" >
        @csrf
        <div>First name :</div>
        <input type="text" name="fname" id="fname">
        <div>Sername :</div>
        <input type="text" name="sname" id="sname">
        <div>Phone number :</div>
        <input type="tel" name="fnamber" id="fnamber">
        <div>Email :</div>
        <input type="email" name="email" id="email">
        <div>Loading address :</div>
        <input type="text" name="la" id="la">
        <div>Unloading address :</div>
        <input type="text" name="unla" id="unla">
        <button type="submit">Send</button>
    </form>

@endsection

@extends('footer')
