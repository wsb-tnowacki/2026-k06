@extends('layout.layout')
@section('tytul', 'WSB - Kontakt')
@section('podtytul', 'Strona kontaktowa')
@section('tresc')
<p>Treść strony kontaktowej</p>
    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque officiis illo nisi asperiores eaque quas cumque voluptate dignissimos repudiandae ipsam et soluta aliquid nobis, quis nostrum assumenda quasi, ad nulla.
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores unde sed amet, harum delectus et ut omnis, mollitia id earum recusandae itaque? Commodi modi expedita optio, a nulla quis doloremque.</p>
    @auth
        <p>Treść dla zalogowanych</p>
    @endauth
@endsection