@extends('layouts.admin')

@section('content')
    <h1>Create Project</h1>
    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif


    <form action="{{ route('admin.projects.store') }}" method="POST" class="needs-validation">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="type_id">Categoria</label>
            <select class="form-select" name="type_id">
                <option selected disabled>Choose project type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        @foreach ($technologies as $technology)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $technology->name }}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $technology->name }}
                </label>
            </div>
        @endforeach


        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="img">URL IMG</label>
            <input type="text" name="img" class="form-control" id="img" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary my-4">Submit</button>

    </form>
@endsection
