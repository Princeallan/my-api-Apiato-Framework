@extends('boards::Layouts.master')

@section('content')
    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10">
                    <div class="form-group">
                        <a class="button primary" href="{{route('web_committeemembers_index')}}">View Committee Members</a>
                    </div>
                    <form action="{{route('web_committeemembers_store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Full Name: </label>
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Committee
                                <select name="committee_id">
                                    @foreach($committees as $committee)
                                        <option value="{{ $committee['id'] }}">
                                            {{ $committee['title'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="success button">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection