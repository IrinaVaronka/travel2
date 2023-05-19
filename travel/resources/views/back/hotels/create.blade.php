@extends('layouts.app')

@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add a new hotel</h3>
                    <p>Fill in the data below</p>
                    <form action="{{route('hotels-store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="title" placeholder="Title" value={{old('title')}}>
                        </div>

                        <div class="col-md-12">
                            <div class="form-text">Please select country</div>
                            <select class="form-select" name="country">
                            <option value="0">Country list</option>
                                @foreach($countries as $country)
                                <option value="{{$country->title}}">{{$country->title}}</option>
                                @endforeach
                            </select>
                            
                        </div>

                        <div class="col-md-12">
                        
                            <input class="form-control" placeholder="Price" type="text" name="price" value={{old('price')}}>
                        </div>

                        <div class="col-md-12">
                        <div class="form-text">Please enter trip duration</div>
                            <input class="form-control"   type="text" name="days" value={{old('days')}}>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Main photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div> 

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Add hotel</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
