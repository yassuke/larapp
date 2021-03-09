@extends('header')

@section('application-title')
    List Series
@endsection

@section('application')
    List Series    
@endsection

@section('content')

@if(!empty($message))
<div class="alert alert-success">
    {{ $message }}
</div>   
@endif

<a href="{{ route('create_serie') }}" class="btn btn-dark mb-2">Create</a>
<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie['name'] }}
            <form action="{{ route('delete_serie', $serie['id']) }}" method="post"
                onsubmit="return confirm('Are you sure to remove {{ addslashes($serie['name']) }}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

@extends('footer')
