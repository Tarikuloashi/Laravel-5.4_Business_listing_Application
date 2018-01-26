@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create Listing <a class="pull-right btn btn-primary btn-xs" href="/dashboard">Back</a></div>

            <div class="panel-body">
              {!! Form::open(['action' => 'ListingsController@store','method' =>'POST']) !!}
                 {{ Form::bsText('name','',['placeholder'=>'Company Name'])}}
                 {{ Form::bsText('website','',['placeholder'=>'Company Website'])}}
                 {{ Form::bsText('email','',['placeholder'=>'Company Email'])}}
                 {{ Form::bsText('phone','',['placeholder'=>'Company phone'])}}
                 {{ Form::bsText('address','',['placeholder'=>'Company Address'])}}
                 {{ Form::bsTextArea('bio','',['placeholder'=>'About This Business'])}}
                 {{ Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
