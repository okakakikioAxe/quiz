@extends('template/main')

@section('judul','home')

@section('konten')
    <div class="container-fluid">
        <img src="{{asset('gambar/quiz.png')}}" class="mw-100" alt="">
    </div>

    <br>
    <br>
    <div class="container text-center">
        <figure>
            <blockquote class="blockquote">
              <p>“For the things we have to learn before we can do them, we learn by doing them.”</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <cite title="Source Title">Aristotle</cite>
            </figcaption>
        </figure>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <p>Wanna try now?</p>
    </div>

    <div class="container text-center">
        <a href="{{url('/quiz')}}">
            <button type="button" style="width: 300px;height: 80px;font-size: 30px;" class="btn btn-primary">Lets Go</button>
        </a>
        
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <hr>
    </div>
@endsection