@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">
                            Title: {{ $project->title }}
                        </h5>
                        <p class="card-text">
                            <span class="fw-bold text-black">Author: </span> {{ $project->author }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Date: </span> {{ $project->date }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Type: </span> {{ $project->type->name }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Status: </span> {{ $project->status }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Description: </span> {{ $project->description }}
                        </p>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
