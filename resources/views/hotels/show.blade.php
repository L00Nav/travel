@extends('layouts.app')

@section('content')
<ul>
    <li>
        <div class="hotel-box" style="background:{{$hotel->hotel}}">{{$hotel->title}}<br>{{$hotel->hotel}}</div>
        <div class="controls">
            <a href="{{route('hotels-edit', $hotel)}}">Edit</a>
            <form class="delete" action="{{route('hotels-delete', $hotel)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Destructioning</button>
            </form>
        </div>
        </div>
    </li>
</ul>
@endsection