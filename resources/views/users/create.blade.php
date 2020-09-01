@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">Create user</div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="roles">Roles</label>
                                @forelse ($roles as $role)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="role{{$role->id}}">
                                        <label class="form-check-label" for="role{{$role->id}}">
                                            {{$role->name}}
                                        </label>
                                    </div>
                                @empty
                                    <h6>No roles</h6>
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