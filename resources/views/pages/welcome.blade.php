@extends('layouts.app')

@section('page-title' , 'Dc Comics | Home')

@section('main')
    <main>
        <div class="jumbotron">
        
        </div>
        <div>
            <h2>CURRENT SERIES</h2>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                        </figure>
                        <h4>{{ $comic['title'] }}</h4>
                    </div>
                    
                @endforeach

            </div>
        </div>
        <div class="bg-blue">
            <div>
                <ul>
                    @foreach ($menuItems as $item)
                    <li>
                        <figure>
                            <img src="{{ Vite::asset('resources/img/' . $item['img']) }}" alt="{{ $item['name'] }}">
                        </figure>
                        <span>
                            {{ $item['name'] }}
                        </span>
                    </li>
                    
                @endforeach
                </ul>
             

            </div>
        </div>
    </main>

@endsection


