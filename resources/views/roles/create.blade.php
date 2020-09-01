@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">Create rol</div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('roles.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                                    <div class="invalid-feedback">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    @error('permissions')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$message}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @enderror
                                    <label for="permissions">Permissions</label>
                                    @forelse ($permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}" id="permission{{$permission->id}}">
                                            <label class="form-check-label" for="permission{{$permission->id}}">
                                                {{$permission->name}}
                                            </label>
                                        </div>
                                    @empty
                                        <h6>No permissions</h6>
                                    @endforelse
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection