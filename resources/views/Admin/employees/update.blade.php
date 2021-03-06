@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="page-header">
            <h1>Edit Employee</h1>
        </div>

    <div class="row">

        <div class="col-sm-12">
            <img title="profile image" class="img-circle profile-user-img pull-left" src="{{URL::to('images/'.$employee->photo->file)}}">
        </div>
    </div>
        <div class="well">
                {!! Form::model($employee,['method' => 'PATCH','action' => ['EmployeesController@update',$employee->id], 'files'=>true]) !!}
                {{ csrf_field() }}
            <legend class="profile-username">{{$employee->name}}</legend>
                <div class="form-group">
                    {!! Form::label('Employee Name', 'Employee Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{ Form::hidden('user_id', $id) }}
                </div>
                <div class="form-group">
                    {!! Form::label('Role', 'Role') !!}
                    {!! Form::select('role_id',array('Select-Role',$role[1],$role[2],$role[3]), null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('CNIC', 'CNIC') !!}
                    {!! Form::number('CNIC', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Adress', 'Adress') !!}
                    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Contact', 'Contact') !!}
                    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Gender', 'Gender') !!}
                    {!! Form::select('gender',array('Select Gender','Male'=>'Male','Female'=>'Female'), null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Qualification', 'Qualification') !!}
                    {!! Form::text('qualification', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Salary', 'Salary') !!}
                    {!! Form::number('Salary', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('D.O.B', 'D.O.B') !!}
                    {!! Form::date('DOB', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Picture', 'Picture') !!}
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

                {!! Form::close() !!}
        </div>

        @include('includes.form_errors')

    </div>


@endsection
