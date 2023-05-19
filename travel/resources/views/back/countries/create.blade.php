@extends('layouts.app')

@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add a new country</h3>
                    <p>Fill in the data below</p>
                    <form action="{{route('countries-store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="title" placeholder="Title" value={{old('title')}}>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" placeholder="Season start" type="date" name="season_start" value={{old('season_start')}}>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" placeholder="Season end"  type="date" name="season_end" value={{old('season_end')}}>
                        </div>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Add country</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
