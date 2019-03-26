@extends('layouts.master')
@section('content')
    <h2>All Users</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            {{--<th>Role</th>--}}
            <th>Status</th>
            <th>Email</th>
            <th>created</th>
        </tr>
        </thead>
        <tbody>
        @if($users)

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    {{--<td>{{$user->roles()->name}}</td>--}}
                    <td>{{$user->is_active == 0 ? 'Not Active' : 'Active'}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
            @endforeach

        @endif
        </tbody>
    </table>

@endsection