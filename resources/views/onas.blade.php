@extends('layout.layout')
@section('tytul', 'WSB - O nas')
@section('podtytul', 'Strona informacyjna')
@section('tresc')
<p>Treść strony O nas</p>
    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque officiis illo nisi asperiores eaque quas cumque voluptate dignissimos repudiandae ipsam et soluta aliquid nobis, quis nostrum assumenda quasi, ad nulla.
    </div>
    {{-- @dump($zadania) --}}
    <ol>
        @foreach ($zadania as $zadanie)
            <li>
               {{$zadanie}} 
            </li>
        @endforeach        
    </ol>

@endsection