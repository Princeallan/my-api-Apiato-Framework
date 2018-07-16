@extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_boards_create')}}">Add New Board</a>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th >#</th>
                            <th>Board Name</th>
                            <th> Board Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($boards as $board)
                            <tr>
                                <td>1</td>
                                <td>{{$board->title}}</td>
                                <td>{{$board->description}}</td>
                                <td><button type="submit" class="warning button">Edit</button>
                                    <button type="submit" class="alert button">Delete</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection