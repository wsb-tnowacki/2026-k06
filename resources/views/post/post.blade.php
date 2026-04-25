@extends('layout.layout')
@section('tytul', 'WSB - Szcegóły posta')
@section('podtytul', 'Szczegóły posta')
@section('tresc')
@isset($post)
   <div class="w-full ">
        <div class="mb-2">
            <label for="tytul" class="block text-gray-700 font-bold mb-2">Tytuł</label>
            <input type="text" name="tytul" id="tytul" value="{{$post->tytul}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
        </div>
        <div class="mb-2">
            <label for="autor" class="block text-gray-700 font-bold mb-2">Autor</label>
            <input type="text" name="autor" id="autor" value="{{$post->autor}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
        </div>
        <div class="mb-2"><label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="text" name="email" id="email" value="{{$post->email}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
        </div>
        <div class="mb-2">
            <label for="tresc" class="block text-gray-700 font-bold mb-2">Treść</label>
            <textarea name="tresc" id="tresc" rows="4"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>{{$post->tresc}}</textarea>
        </div>
<div class="mb-2 text-right">
        <div><b>Czas utworzenia: </b> {{$post->created_at->setTimezone('Europe/Warsaw')->locale('pl')->translatedFormat('j F Y H:i:s')}}</div>
        <div><b>Czas edycji: </b> {{$post->updated_at->setTimezone('Europe/Warsaw')->locale('pl')->translatedFormat('j F Y H:i:s')}}</div>
    </div>
        <div class="flex items-center gap-x-2">
            <a href="{{route('post.index')}}">
                <button type="button" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Powrót do listy</button>
            </a>
            <a href="{{route('post.edit',$post->id)}}">
                <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Edytuj post</button>
            </a>
        </div>
    
@endisset
 
</div>  
@endsection