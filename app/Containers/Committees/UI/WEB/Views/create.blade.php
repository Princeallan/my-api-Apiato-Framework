@extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-6">
                    {!! Form::open(['route' => 'web_committees_store']) !!}
                    {{ Form::label('title', 'Committee Name: ') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Committee Name']) }}
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe the committee']) }}
                    {{ Form::submit('Register', array('class'=> 'primary button'))}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
