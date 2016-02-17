@extends('layouts.main')
@section('content')
    {{{$data['name']}}}
    {{{$data['email']}}}
    {{{$data['location']}}}

    @if(isset($data['last_name']))

        {{{$data['last_name']}}}
        
    @else

        No last name

    @endif


    @foreach ($data as $item)

        <li>{{{$item}}}</li>

    @endforeach
@stop