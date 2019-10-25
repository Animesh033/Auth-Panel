@extends('layouts.auth_panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label>Edit Category</label>
            <span class="float-right"><a href="{{url('/categories')}}">Back to Category List</a></span>
            <form method="post" id="category-update" action="{{ route('categories.update', $category->id) }}">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Enter category name">
                </div>
            </form>
            <a class="btn btn-primary float-left" href="{{ route('categories.update', $category->id) }}"
                onclick="event.preventDefault();
                                document.getElementById('category-update').submit();">
                {{ __('Update') }}
            </a>
            <a class="btn btn-danger float-right" href="{{ route('categories.destroy', $category->id) }}"
                onclick="event.preventDefault();
                                document.getElementById('category-delete').submit();">
                {{ __('Delete') }}
            </a>
            <form method="post" id="category-delete" action="{{ route('categories.destroy', $category->id) }}">
                @csrf @method('DELETE')
            </form>
        </div> 
    </div>
</div>
@endsection