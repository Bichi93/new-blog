@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="padding-top: 20%;">
            @if($errors->any())
            <div class="col-md-12">
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            </div>
            @endif
            {!! Form::open(['method'=> 'POST', 'url' => route('posts.store'), 'class' => 'col-md-12' ]) !!}
            {!! csrf_field() !!}
            <div class="form-group">
                {!! Form::label('title','Title') !!}
                {!! Form::text('title',null,['id' => 'title','class' => 'form-control']) !!}
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
