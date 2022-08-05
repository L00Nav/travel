@extends('layouts.app')

@section('content')
{{-- <a href="{{route('hotels-index', ['sort' => 'asc'])}}">A-Z</a>
<a href="{{route('hotels-index', ['sort' => 'desc'])}}">Z-A</a>
<a href="{{route('hotels-index')}}">Reset</a> --}}
<ul>
    @forelse($hotels as $hotel)
        <li class="hotel-box">
            <div>{{$hotel->getCountry()->get()->first()->name}}<br>{{$hotel->name}}</div>
            <div class="controls">
                {{-- <a href="{{route('hotels-show', $hotel->id)}}">Show</a> --}}
                <a href="{{route('hotels-edit', $hotel->id)}}">Edit</a>
                <form class="delete" action="{{route('hotels-delete', $hotel)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
            </div>
        </li>
    @empty
        <li>No hotels available at this time.</li>
    @endforelse
    <hr>
    <a href="{{route('hotels-create')}}">Add a hotel</a>
</ul>
@endsection