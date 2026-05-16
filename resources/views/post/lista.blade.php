@extends('layout.layout')
@section('tytul', 'WSB - Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
<div class="w-full">
@auth
    <div class="m-3">
        <a href="{{route('post.create')}}">
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Dodaj post</button>
        </a>
    </div>
@endauth
<table class="table-fixed border border-gray-300 divide-y divide-gray-200 w-full rounded-lg">
    <thead>
        <tr>
            <th scope="col" class="border border-gray-300 px-4 py-2">Lp</th>
            <th scope="col" class="border border-gray-300 px-4 py-2">Tytuł</th>
            <th scope="col" class="border border-gray-300 px-4 py-2">Autor</th>
            <th scope="col" class="border border-gray-300 px-4 py-2">Data utworzenia</th>
            @auth
            <th scope="col" class="border border-gray-300 px-4 py-2">Akcja</th>   
            @endauth

        </tr>
    </thead>
    @isset($posty)
        <tbody>
            @php($lp=1)
            @forelse ($posty as $post)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{$lp++}}</td>
                <td class="border border-gray-300 px-4 py-2"><a href="{{route('post.show',$post->id)}}">{{$post->tytul}}</a></td>
                <td class="border border-gray-300 px-4 py-2">{{$post->autor}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$post->created_at->setTimezone('Europe/Warsaw')->locale('pl')->translatedFormat('j F Y')}}</td>
                @auth
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex items-center gap-x-2">
                        <a href="{{route('post.edit',$post->id)}}">
                            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">E</button>
                        </a>
                        <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirm('Czy na pewno usunąć ten post o id {{$post->id}} i tytule {{$post->tytul}}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"  >X</button>
                        </form>
                    </div>
                </td>
                @endauth
            </tr>
            @empty
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-center" scope="row" colspan="@auth 5 @else 4 @endauth">Nie ma żadnych postów</th>
            </tr>
                
            @endforelse
        </tbody>
        @else
        <tbody>
            <th class="border border-gray-300 px-4 py-2 text-center" scope="row" colspan="@auth 5 @else 4 @endauth">Nie ma żadnych postów - brak definicji postów</th>
        </tbody>
    @endisset
</table>
</div>
@endsection