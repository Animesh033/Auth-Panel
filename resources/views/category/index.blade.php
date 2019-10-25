@extends('layouts.auth_panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('error_success.error_success')
            <label>Add Category</label>
            <form method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name">
                </div>
                <input type="submit" value="Create" class="btn btn-primary">
            </form>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Categoty lists:</label>
                <ul>
                    @if(isset($categories) && count($categories) > 0)
                        @foreach($categories as $category)
                        <li><a  href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            {{$categories->links()}}
        </div>
    </div>
</div>
@endsection
