@extends('layouts.app')

{{-- <h1>lalla</h1> --}}

@section('content')
    @foreach ($results as $result)
        {{-- {{$result}} --}}
        @php
            var_export($result);
        @endphp
    @endforeach
    {{-- @php
        var_dump($results);
    @endphp --}}
@endsection

@section('js')
    
@endsection    
