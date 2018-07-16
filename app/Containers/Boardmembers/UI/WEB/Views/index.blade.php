@extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-12">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_boardmembers_create')}}">Add Member</a>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th> Board</th>
                            <th>Committee</th>
                            <th width="150">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($boardmembers as $boardmember)
                            <tr>
                                <td>1</td>
                                <td>{{$boardmember->name}}</td>
                                <td>{{$boardmember->email}}</td>
                                <td>{{$boardmember->board_id}}</td>
                                <td>{{$boardmember->committee_id}}</td>
                                <td>
                                    <button type="submit" class="warning button">Edit</button>
                                    <button type="submit" class="alert button">Del</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection