@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">Edit role</div>
                    <div class="card-body">
                        <form action="{{route('roles.update', $role->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$role->name}}">
                            </div>
                            <div class="form-group">
                                <label for="permissions">Permissions</label>
                                @forelse ($permissions as $permission)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}" @if($role->permissions->pluck('id')->contains($permission->id)) checked @endif>
                                    <label class="form-check-label" for="permission{{$permission->id}}">
                                      {{$permission->name}}
                                    </label>
                                </div>
                                @empty
                                    <h6>Don't exists permissions</h6>
                                @endforelse
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection