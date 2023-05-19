@extends('layouts.app')

@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Edit the hotel</h3>
                    <p>Fill in the data below</p>
                    <form action="{{route('hotels-update', $hotel)}}" method="post">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="title" placeholder="Title" value={{old('title', $hotel->title)}}>
                        </div>

                            
                        <div class="col-md-12">
                            <input class="form-control" placeholder="Season start" type="text" name="price" value={{old('price', $hotel->price)}}>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" placeholder="Season end"  type="text" name="days" value={{old('season_end', $hotel->days)}}>
                        </div>


                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Update country</button>
                            @csrf
                            @method('put')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
