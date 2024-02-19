@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h2>
                Welcome to your Admin dashboard, {{ Auth::user()->name }}
            </h2>
        </div>
        <div class="col-12">
            <table class="table mt-4 table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Project</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($portfolios as $portfolio)
                    <tr>
                        <td scope="row">{{$portfolio->id}}</td>
                        <td>{{ $portfolio->type->name }}</td>
                        <td>{{$portfolio->project}}</td>
                        <td>{{$portfolio->author}}</td>
                        <td>{{$portfolio->description}}</td>
                        <td>{{$portfolio->date}}</td>
                        <td>
                            <a href="{{route('admin.portfolios.show', $portfolio)}}"><button class="btn btn-sm btn-success">Show</button></a>
                            <a href="{{route('admin.portfolios.edit', $portfolio)}}"><button class="btn btn-sm btn-warning">Edit</button></a>
                            <form class="d-inline-block" action="{{route('admin.portfolios.destroy', $portfolio)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">There are not portfolios to show</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection