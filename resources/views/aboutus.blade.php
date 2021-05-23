@extends('template.main')

@section('judul','contact us')

@section('konten')
    <div class="container">
        <img src="{{asset('gambar/foto.png')}}" class="rounded-circle mx-auto d-block" alt="..." style="width: 20%;height: auto;">
        <br>
        <br>
        <div class="container">
            <div class="row">
              <div class="col">
                
              </div>
              <div class="col-5">
                <div class="container">
                  <div class="row">
                    <div class="col-2">
                      <img src="{{asset('gambar/phone.png')}}" class="rounded d-block " alt="..." style="display: block;max-width: 35px;height: auto;">
                    </div>
                    <div class="col">
                      <h5 style="float: left;">082245851632</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                
              </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
              <div class="col">
                
              </div>
              <div class="col-5">
                <div class="container">
                  <div class="row">
                    <div class="col-2">
                      <img src="{{asset('gambar/email.png')}}" class="rounded d-block " alt="..." style="display: block;max-width: 35px;height: auto;">
                    </div>
                    <div class="col">
                      <h5 style="float: left;">lukmanmuhamadilham@gmail.com</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                
              </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              Follow me :
            </div>
          </div>
        </div>
        <br>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                
              </div>
              <div class="col">
                <div class="container text-center">
                  <div class="row">
                    <div class="col">
                      <a href="https://www.facebook.com/lukman.m.16">
                        <img src="{{asset('gambar/facebook.png')}}" class="rounded d-inline-block m-2" alt="..." style="max-width: 35px;height: auto;">
                      </a>
                    </div>
                    <div class="col">
                      <a href="https://www.instagram.com/lukman_10101/">
                        <img src="{{asset('gambar/instagram.png')}}" class="rounded d-inline-block m-2" alt="..." style="max-width: 35px;height: auto;">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                
              </div>
            </div>
        </div>
    </div>
@endsection