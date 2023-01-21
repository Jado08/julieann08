@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card m-auto" style="width:70%">
        <div class="card-body">
            {{--Table--}}
            <table class = "table" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>








            </table>

        </div>
    </div>
</div>
@endsection