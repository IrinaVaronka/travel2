@extends('layouts.app')

@section('content')

<form class="mt-4">
    <h1 class="text-center">All countries</h1>

    <form action="{{route('countries-index')}}" method="get" class="mt-4">
    </form>

    <div class="container">
        <div class="row">
            @forelse($countries as $country)
            <div class="card photo" style="width: 18rem;">
            
            {{-- @if($story->photo)
            
                <img class="main-img" src="{{asset('/countries-photo') . '/t_'. $story->photo}}" class="card-img-top">
                @else
                <img src="{{asset('/stories-photo') . '/no-image.png'}}" class="card-img-top">
                @endif --}}
           
                <div class="card-body">

                
                    <h5 class="card-title">{{ $country->title }}</h5>
                     <div class="col-md-12"> {{$country->season_start}}</div>
                <div class="col-md-12"> {{$country->season_end}}</div>
                <div class="col-md-12">
                    <a href='{{route('countries-edit', $country)}}' class="btn btn-primary">edit</a>
                </div>
                
                
                <form action="{{route('countries-delete', $country)}}" method="post">
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
