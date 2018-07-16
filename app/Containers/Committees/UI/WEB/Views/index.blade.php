@extends('boards::Layouts.master')

@section('content')

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_committees_create')}}">Create committee</a>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Committee Name</th>
                            <th> Committee Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($committees as $committee)
                            <tr>
                                <td>1</td>
                                <td>{{$committee->title}}</td>
                                <td>{{$committee->description}}</td>
                                <td><button type="submit" class="warning button">Edit</button>
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
