@extends('boards::Layouts.master')

@section('content')

    @extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_committeemembers_create')}}">Add New Committee Member</a>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th> Email</th>
                            <th>Committee</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($committeemembers as $committeemember)
                            <tr>
                                <td>#</td>
                                <td>{{$committeemember->name}}</td>
                                <td>{{$committeemember->email}}</td>
                                <td>{{$committeemember->committee_id}}</td>
                                <td><button type="submit" class="warning button">Edit</button>
                                    <button type="submit" class="alert button">Delete</button>
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

    @endsection