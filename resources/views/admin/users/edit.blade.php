@extends('layouts.template')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
</section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update User Details</h3>
            </div>

            <form class="form-horizontal" action="{{ url('/admin/users/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="card-body">

                <div class="form-group row">
                    <label for="unitname" class="col-sm-2 col-form-label">User name</label>
                    <div class="col-sm-6 ">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="User Name" value="{{ $user->name }}">
                        @error('name')
                            <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ $user->email }}">
                        @error('email')
                            <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="unit_id" class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="unit_id">
                            @foreach ($units as $unit)
                            <option value="{{$unit->id}}" {{$unit->id === $user->unit->id ? 'selectd': ''}}>{{$unit->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">User Role</label>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="role" value="admin" {{$user->role === 'admin' ? 'checked': ''}}>
                              <label class="form-check-label">Administrator</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="role" value="auditor" {{$user->role === 'auditor' ? 'checked': ''}}>
                              <label class="form-check-label">Auditor</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="role" value="user" {{$user->role === 'user' ? 'checked': ''}}>
                              <label class="form-check-label">System User</label>
                            </div>
                        </div>
                        @error('role')
                            <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
         
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Update</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

