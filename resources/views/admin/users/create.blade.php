@extends('layouts.admin')
@section('content')

    <h1>User Index</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['method'=>'post','action'=>'UserController@store']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name','Name : ') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email : ') !!}
                    {!! Form::email('email', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('role_id','Role : ') !!}
                    {!! Form::select('role_id',array_merge([''=>'Choose Role'],$roles),null,['class'=>'form-control']) !!}
                    <br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('is_active','Status : ') !!}
                    {!! Form::select('is_active',array(1  =>'Active',0=>'Non Active'), 0,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password : ') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                    <br>
                </div>
            </div>
        </div>
        {!! Form::submit('Create User',['class'=>'btn btn-primary' ]) !!}


        {!! Form::close() !!}



    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @include('includes.error')
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>





@stop