@extends('layouts.template')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Users</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Layout</a></li>
        <li class="breadcrumb-item active">Boxed Layout</li>
        </ol>
    </div>
    </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        Register a new <a href="{{ url('/admin/users/create') }}">User <i class="fas fa-user-plus"></i></a>
        </div>
    </div>
    
    <div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width: 80px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>1.</td>
                        <td><a href="{{ url('admin/users/'.$user->id) }}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td><span class="fas fa-user-edit"></span>&nbsp;&nbsp;<span class="fas fa-user-slash"></span></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <ul class="float-right">
                {{ $users->links() }}
            </ul>
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
    </div>
</div>
</section>
<!-- /.content -->


@endsection

