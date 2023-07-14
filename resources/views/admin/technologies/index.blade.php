@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-between">
            @foreach ($technologies as $technology)
                <div class="card p-0 mb-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $technology->name }}</h5>
                    </div>
                </div>
            @endforeach
            {{-- <form method="POST" action="{{ route('admin.technologies.destroy'), $technology }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary">Rimuovi</button>
            </form> --}}
        </div>
    </div>
@endsection
