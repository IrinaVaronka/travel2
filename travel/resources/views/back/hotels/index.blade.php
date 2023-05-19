@extends('layouts.app')

@section('content')

<form class="mt-4">
    <h1 class="text-center">All hotels</h1>

    <form action="{{route('hotels-index')}}" method="get" class="mt-4">
    </form>

    <div class="container">
        <div class="row">
            @forelse($hotels as $hotel)
            <div class="card photo" style="width: 18rem;">
            
            
           
                <div class="card-body">

                
                    <h5 class="card-title">{{ $hotel->title }}</h5>
                     <div class="col-md-12"> {{$hotel->price}}</div>
                     <div class="col-md-12"> {{$hotel->country}}</div>
                     <div class="col-md-12"> {{$hotel->days}}</div>
                     <div class="col-md-12"> {{$hotel->photo}}</div>
                
                <div class="col-md-12">
                    <a href='{{route('hotels-edit', $hotel)}}' class="btn btn-primary">edit</a>
                </div>
                
                
                <form action="{{route('hotels-delete', $hotel)}}" method="post">
                    <button type="submit" class="btn btn-danger">delete</button>
                    @csrf
                    @method('delete')
                </form> 
               
</div>
</div>
@empty
<div class="card" style="width: 18rem;">


    <div class="empty">No stories yet</div>

</div>
@endforelse
</ul>

    </div>
</div>
@endsection
