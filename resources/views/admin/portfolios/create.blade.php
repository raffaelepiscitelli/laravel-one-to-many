@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">

            @include('partials.errors')

            <form action="{{ route('admin.portfolios.store') }}" method="POST">
                @csrf

                <h2 class="m-4">Create a new project and add to your portfolio:</h2>
                <div class="mb-3 input-group">
                    <label for="project" class="input-group-text">Project's name:</label>
                    <input class="form-control" type="text" name="project" id="project" value="{{ old('project') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Author of the project:</label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Description:</label>
                    <textarea class="form-control" name="description" id="description" cols="20" rows="5">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date') }}">
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2">
                        Create new project
                    </button>
                    <button type="reset" class="btn btn-warning m-2">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection