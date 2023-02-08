@extends('layouts.app')

@section('template_title')
    {{ $task->name ?? 'Show Task' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $task->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
