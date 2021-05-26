@extends('template.main')

@section('judul','quiz menu')

@section('konten')
    <br>
    <br>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md p-4">
                <a href="#">
                    <img src="{{asset('gambar/bahasa indonesia.png')}}" class="gambar rounded" alt="bahasa indonesia">
                </a>
            </div>
            <div class="col-md p-4">
                <a href="#">
                    <img src="{{asset('gambar/bahasa inggris.png')}}" class="gambar rounded" alt="bahasa inggris" >
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md p-4">
                <a href="https://www.github.com/">
                    <img src="{{asset('gambar/biologi.png')}}" class="gambar rounded" alt="biologi">
                </a>
            </div>
            <div class="col-md p-4">
                <a href="https://www.facebook.com/">
                    <img src="{{asset('gambar/kimia.png')}}" class="gambar rounded" alt="kimia">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md p-4">
                <a href="https://www.google.com/">
                    <img src="{{asset('gambar/matematika.png')}}" class="gambar rounded" alt="matematika">
                </a>
            </div>
            <div class="col-md p-4">
                
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

@section('style')
    <style>
        .gambar{
            width: 98%;
            height: auto;
            transition: transform 0.5s;
        }
        .gambar:hover{
            transform: scale(1.03);
        }
    </style>
@endsection