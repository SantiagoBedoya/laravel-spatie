@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                Users
                            </div>
                            @can('create user')    
                                <div class="col-2 text-right">
                                    <a href="{{route('users.create')}}" class="btn btn-sm btn-primary">Add</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User name</th>
                                    <th>Email</th>
                                    @can(['edit user', 'delete user'])
                                        <th>Actions</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        @can(['edit user', 'delete user'])
                                        <td>
                                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    @can('edit user')
                                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                    @endcan
                                                    @can('edit user')
                                                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                    @endcan
                                                </div>
                                            </form>
                                        </td>
                                        @endcan
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection