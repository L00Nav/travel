@extends('layouts.app')

@section('content')
<h2>Edit a country</h2>
<form action="{{route('countries-update', $country)}}" method="post">
    <label for="country_name">Name</label><br>
    <input type="text" name="country_name" value="{{$country->name}}"/><br>
    <label for="country_season">Season</label><br>
    <input type="text" name="country_season" value="{{$country->season}}"/><br><br>
    @csrf
    @method('put')
    <button type="submit">Confirm changes</button>
</form>
@endsection