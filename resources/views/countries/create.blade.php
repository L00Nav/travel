@extends('layouts.app')

@section('content')
<h2>Add a country</h2>
<ul>
    <form action="{{route('countries-store')}}" method="post">
        <label for="country_name">Name</label><br>
        <input type="text" name="country_name" /><br>
        <label for="country_season">Season</label><br>
        <input type="text" name="country_season" /><br><br>
        </select>
        @csrf
        <button type="submit">Confirm</button>
    </form>
</ul>
@endsection