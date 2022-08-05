@extends('layouts.app')

@section('content')
<h2>Create a Hotel</h2>
<ul>
    <form action="{{route('hotels-store')}}" method="post">
        <label for="name">Name</label><br>
        <input id="name" type="text" name="hotel_name" /><br>
        <label for="country">Country</label><br>
        <select id="country" name="country_id">
        @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
        </select><br>
        <label for="price">Price</label><br>
        <input id="price" type="number" step="0.01" name="hotel_price" /><br>
        <br>PHOTO PLACEHOLDER<br>
        <label for="duration">Duration</label><br>
        <input id="duration" type="number" name="trip_duration" /><br><br>
        @csrf
        <button type="submit">Confirm</button>
    </form>
</ul>
@endsection