@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">Edit user</div>
                    <div class="card-body">
                        <form action="{{route('users.update', $user->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="roles">Roles</label>
                                @forelse ($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="role{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                    <label class="form-check-label" for="role{{$role->id}}">
                                      {{$role->name}}
                                    </label>
                                </div>
                                @empty
                                    <h6 class="text-danger">No roles in system</h6>
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