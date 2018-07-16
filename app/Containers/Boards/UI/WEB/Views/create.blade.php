@extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-2 medium-5">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_boardmembers_index')}}">View Boards</a>
                    </div>
                    <form action="{{route('web_boards_store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Board Name</label>
                            <input type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea placeholder="Describe the board..." name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="button primary" type="submit">Add New Board</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--{!! Form::open(['url' => 'boards/store']) !!}--}}
{{--{{ Form::label('title', 'Board Name') }}--}}
{{--{{ Form::text('title', null, ['class' => 'form-control medium-6 cell', 'placeholder' => 'Email']) }}--}}
{{--{{ Form::label('description', 'Description') }}--}}
{{--{!! Form::textarea('description', null, ['class' => 'form-control medium-6 cell', 'placeholder' => 'Describe the Board']); !!}--}}
{{--{{ Form::submit('Add New Board', array( 'class'=>'primary button' )) }}--}}
{{--{!! Form::close() !!}--}}