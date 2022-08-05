@extends('layouts.app')

@section('content')
<ul>
    @forelse($countries as $country)
        <li class="list-unit">
            <div>{{$country->name}} | {{$country->season}}</div>
            <div class="controls">
                {{-- <a href="{{route('countries-show', $country->id)}}">Show</a><br> --}}
                @if( Auth::user()->role > 9) 
                <a href="{{route('countries-edit', $country->id)}}">Edit</a>
                <form class="delete" action="{{route('countries-delete', $country)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                @endif
            </div>
        </li>
    @empty
        <li>No countries available at this time.</li>
    @endforelse
    <hr>
    @if( Auth::user()->role > 9) 
    <a href="{{route('countries-create')}}">Add a country</a>
    @endif
</ul>
@endsection