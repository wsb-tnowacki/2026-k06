@extends('layout.layout')
@section('tytul', 'WSB - Edytuj posta')
@section('podtytul', 'Edytuj posta')
@section('tresc')
<p>Formularz edytujący posta</p>
    <div class="w-full ">
    @isset($post)
    <form action="{{ route('post.update', $post->id) }}" method="POST" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 max00 font-bold mb-2 ">
    @csrf
    @method('PUT')
        <div class="mb-2"><label for="tytul" class="block text-gray-700 font-bold mb-2">Tytuł</label>
            <input type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
        </div>
        <div class="mb-2"><label for="autor" class="block text-gray-700 font-bold mb-2">Autor</label>
            <input type="text" name="autor" id="autor" placeholder="Podaj autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->autor}}@endif">
        </div>
        <div class="mb-2"><label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="text" name="email" id="email" placeholder="Podaj email autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif">
        </div>
        <div class="mb-2">
            <label for="tresc" class="block text-gray-700 font-bold mb-2">Treść</label>
            <textarea name="tresc" id="tresc" rows="4" placeholder="Wpisz treść posta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        </div>
        <div class="flex items-center gap-x-2">
            <a href="{{route('post.index')}}">
                <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Powrót do listy</button>
            </a>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Zmień post</button>
        </div>
    </form>
    @endisset
</div>

@endsection