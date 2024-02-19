@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2>
                {{ $portfolio->Project }}
            </h2>
        </div>
        <div class="col-12 mx-auto text-center">
            <h1>
                {{ $portfolio->project }}
            </h1>
            <h2>
                Author: {{ $portfolio->author }}
            </h2>
            <p>
                {{ $portfolio->type->name}}
            </p>
            <p class="mt-3">
                {{ $portfolio->description }}
            </p>
            <p>
                {{ $portfolio->date }}
            </p>
            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-decoration-none">
                <button class="btn btn-sm btn-success">
                    Edit
                </button>
            </a>
            <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning btn-sm d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $portfolio->id }}">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection