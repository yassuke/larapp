@extends('header')

@section('application-title')
    Series - Create
@endsection
`
@section('application')
    Create serie
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('store_serie') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="seriesName">Series Name: </label>
        <input type="text" class="form-control" id="seriesName" name="seriesName" placeholder="Series name: ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection
