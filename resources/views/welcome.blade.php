@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
<h1>
    Laravel Start 1
</h1>

<h2>
    Ciao {{ $firstName }} {{ $lastName }}
</h2>
@endsection
