@extends('layouts.app')

@section('content')

<form class="mt-4">
    <h1 class="text-center">All countries</h1>

    <form action="{{route('countries-index')}}" method="get" class="mt-4">

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Sort</label>
                        <select class="form-select" name="sort">
                            @foreach($sortSelect as $value => $text)
                            <option value="{{$value}}" @if($value===$sort) selected @endif>{{$text}}</option>
                            @endforeach
                        </select>
                        <div class="form-text">Please select your sort preferences</div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="sort-filter-buttons">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('countries-index')}}" class="btn btn-danger">clear</a>
                    </div>
                </div>
            </div>
        </div> 
    </form>

    <div class="container">
        <div class="row">
            @forelse($countries as $country)

             <table class="table table-sm table-light table-striped table-bordered ml-4">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">season_start</th>
                    <th scope="col">season_end</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
<tbody>
            
                <tr>
                    <td scope="col">{{ $country->title }}</td>
                    <td scope="col">{{ $country->season_start }}</td>
                    <td scope="col">{{ $country->season_end }}</td>
                    <th scope="col"><a href='{{route('countries-edit', $country)}}' class="btn btn-primary">edit</a></th>
                    <th scope="col"> <form action="{{route('countries-delete', $country)}}" method="post">
                    <button type="submit" class="btn btn-danger">delete</button></th>
                    @csrf
                    @method('delete')
                </form> 
                </tr>
            </tbody>

 </table>




           
@empty
<div class="card" style="width: 18rem;">


    <div class="empty">No stories yet</div>

</div>
@endforelse
</ul>

    </div>
</div>
@endsection
