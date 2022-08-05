@extends('layouts.app')

@section('content')
{{-- <a href="{{route('orders-index', ['sort' => 'asc'])}}">A-Z</a>
<a href="{{route('orders-index', ['sort' => 'desc'])}}">Z-A</a>
<a href="{{route('orders-index')}}">Reset</a> --}}
<ul>
    @forelse($orders as $order)
        <li class="order-box">
            <div>
                {{$order->getCountry()->get()->first()->name}}<br>
                {{$order->getCountry()->get()->first()->name}}
            </div>
            <div class="controls">
                {{-- <a href="{{route('orders-show', $order->id)}}">Show</a> --}}
                @if( Auth::user()->role > 9) 
                <a href="{{route('orders-edit', $order->id)}}">Edit</a>
                <form class="delete" action="{{route('orders-delete', $order)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                @elseif( Auth::user()->role < 9)
                CONTENT
                @endif
            </div>
        </li>
    @empty
        <li>No orders have been made.</li>
    @endforelse
    @if( Auth::user()->role > 9) 
    <hr>
    <a href="{{route('orders-create')}}">Add a order</a>
    @endif
</ul>
@endsection