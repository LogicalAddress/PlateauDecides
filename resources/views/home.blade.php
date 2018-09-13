@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Create Topic</h1>

                    {!! Form::open(array('action' => 'TopicController@store', 'method'=>'POST')) !!}

                    <div class="form-group">
                        {!! Form::label('', 'Title:', array('class' => 'inline')) !!}
                        {!! Form::text('title', old('title'), array('class' => 'form-control', 'id' => 'title', 'placeholder' => "Security")) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('', 'Description:', array('class' => 'inline')) !!}
                        {!! Form::text('description', old('description'), array('class' => 'form-control', 'id' => 'description')) !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="small button alert">Create Topic</button>
                    </div>

                    {!! Form::close() !!}
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
