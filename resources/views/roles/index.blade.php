@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                Roles
                            </div>
                            @can('create role')    
                            <div class="col-2 text-right">
                                <a href="{{route('roles.create')}}" class="btn btn-sm btn-primary">Add</a>
                            </div>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    @can(['edit role', 'delete role'])
                                    <th>Actions</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($roles as $role)
                                    <tr>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    @can('edit role')
                                                        <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                    @endcan
                                                    @can('delete role')
                                                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                    @endcan
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No roles</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                Permissions
                            </div>
                            <div class="col-2 text-right">
                                <a href="{{route('permissions.create')}}" class="btn btn-sm btn-primary">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    @can(['edit permission', 'delete permission'])
                                        <th>Actions</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($permissions as $permission)
                                    <tr>
                                        <td>{{$permission->name}}</td>
                                        @can(['edit permission', 'delete permission'])
                                        <td>
                                            <form action="{{route('permissions.destroy', $permission->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    @can('edit permission')
                                                        <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                    @endcan
                                                    @can('delete permission')
                                                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                    @endcan
                                                </div>
                                            </form>
                                        </td>
                                        @endcan
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No permissions</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection