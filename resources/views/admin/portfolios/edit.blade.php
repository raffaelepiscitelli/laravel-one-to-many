@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">

            @include('partials.errors')

            <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST">
                @csrf
                @method ('PUT')

                <h2 class="m-4">Create a new project and add to your portfolio:</h2>
                <div class="mb-3 input-group">
                    <label for="project" class="input-group-text">Project's name:</label>
                    <input class="form-control" type="text" name="project" id="project" value="{{ old('project', $portfolio->project) }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="type_id" class="input-group-text">Type:</label>
                    <select class="form-select" type="text" name="type_id" id="type_id">
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}" style="color: {{ $type->color }}" {{ $type->id == old('type_id', $type->type_id) ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Author of the project:</label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ old('author', $portfolio->author) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Description:</label>
                    <textarea class="form-control" name="description" id="description" cols="20" rows="5">{{ old('description', $portfolio->description) }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date', $portfolio->date) }}">
                </div>
                <div class="mb-3 input-group">
                    <a href="{{route('admin.portfolios.edit', $portfolio)}}"><button class="btn btn-sm btn-success">Show</button></a>
                    <button type="reset" class="btn btn-warning m-2">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection