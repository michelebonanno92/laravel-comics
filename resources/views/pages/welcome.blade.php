@extends('layouts.app')

@section('page-title', ' Dc Comics | Home')

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
        <div>
            <h2>Current Items</h2>
            <div class="row">
                @foreach ($menuItems as $item)
                    <div>
                        <figure>
                            <img src="{{ $item['item'] }}" :alt="{{ $item['name'] }}">
                        </figure>
                        <span>{{ $item['name'] }}</span>
                    </div>
                    
                @endforeach

            </div>
        </div>
    </main>

@endsection


