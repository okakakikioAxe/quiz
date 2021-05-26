@extends('template.main')

@section('judul','contact us')

@section('konten')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <img src="{{asset('gambar/foto.png')}}" class="rounded-circle mx-auto d-block" alt="..." style="width: 60%;height: auto;">
                <br>
                <h4>Lukman Muhamad Ilham</h4>
            </div>
            <div class="col-md">
                
                <div class="row m-4">
                  <h5>Tentang saya</h5>
                  <p>My name is Lukman Muhamad Ilham. I was born in Kediri, 23 March 2001. Now study in University of 17 August 1945 Surabaya. My hobby is writing programs and playing youtube.</p>
                </div>
                
                <div class="row m-4">
                  <h5>My contact : </h5>
                </div>
                <div class="row m-4">
                  <div class="col-2">
                    <img src="{{asset('gambar/phone.png')}}" class="rounded d-block " alt="..." style="display: block;max-width: 25px;height: auto;">
                  </div>
                  <div class="col-8">
                    <h5 style="float: left;">082245851632</h5>
                  </div>
                </div>

                <div class="row m-4">
                  <div class="col-2">
                    <img src="{{asset('gambar/email.png')}}" class="rounded d-block " alt="..." style="display: block;max-width: 25px;height: auto;">
                  </div>
                  <div class="col-8">
                    <h5 style="float: left;">lukmanmuhamadilham@gmail.com</h5>
                  </div>
                </div>

                <div class="row m-4 text-center">
                  <h7>Follow me on :</h7>
                </div>

                <div class="row m-4">
                  <div class="col">
                    <a href="https://www.facebook.com/lukman.m.16">
                      <img src="{{asset('gambar/facebook.png')}}" class="rounded m-2 float-end" alt="..." style="max-width: 35px;height: auto;">
                    </a>
                  </div>
                  <div class="col">
                    <a href="https://www.instagram.com/lukman_10101/">
                      <img src="{{asset('gambar/instagram.png')}}" class="rounded m-2 float-start" alt="..." style="max-width: 35px;height: auto;">
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection