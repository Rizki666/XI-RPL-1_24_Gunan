@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/Gunan.jpg" alt="Gunan" width="250px">
    @endsection