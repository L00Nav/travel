@extends('layouts.app')

@section('content')
<ul>
    <li>
        {{$country->name}}<br>{{$country->season}}
        {{-- <div class="controls">
            <a href="{{route('countries-edit', $country)}}">Edit</a>
            <form class="delete" action="{{route('countries-delete', $country)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Destructioning</button>
            </form>
        </div>
        </div> --}}
    </li>
</ul>
@endsection