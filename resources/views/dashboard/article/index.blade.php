@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }} </h1>

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/articles/create" class="btn btn-primary">Create</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $article->title }} </td>
                        <td> {{ $article->content }} </td>
                        <td> {{ $article->image }} </td>
                        <td> {{ $article->category_id }} </td>
                        <td>
                            <a href="#" class="btn btn-info badge">
                                <span data-feather="eye"></span>
                            </a>
                            <a href="#" class="btn btn-warning badge">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/dashboard/articles/{{$article->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0 badge"
                                    onclick="return confirm('Are you sure to delete ?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
