@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add Prisoner
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">First Name</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('prisoner.store') }}" method="Post" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="firstname" id="firstname" name="firstname" value="{{ old('firstname') }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="lastname" id="lastname" name="lastname"  value="{{ old('lastname') }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{auth()->user()->firstname }} {{ auth()->user()->lastname}}
                        <div>
                            @foreach( auth()->user()->getRoleNames() as $role)
                            <p>role: {{$role}}</p>
                            @endforeach
                        </div>
                    {{ __('You are logged in!') }}

                        <div style="margin: 15px">
                            <h3>My prisoner</h3>
                        </div>
                        <div style="margin: 15px">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prisoners as $prisoner)
                                    <tr>
                                        <th scope="row">{{$prisoner->id}}</th>
                                        <td>{{$prisoner->firstname}}</td>
                                        <td>{{$prisoner->lastname}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div style="margin: 15px">
                            <h3>All Prisoner</h3>
                        </div>
                        <div style="margin: 15px">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Staff</th>

                                </tr>
                                </thead>
                                <tbody>
{{--                                {{$prisoners_all}}--}}
                                @foreach($prisoners_all as $pri)
                                    <tr>
                                        <th scope="row">{{$pri->id}}</th>
                                        <td>{{$pri->firstname}}</td>
                                        <td>{{$pri->lastname}}</td>
                                        <td>{{$pri->user->firstname}} {{$pri->user->lastname}}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
