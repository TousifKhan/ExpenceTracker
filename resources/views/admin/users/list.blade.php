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
        Register a new <a href="{{ url('/admin/users/create') }}"> User <i class="fas fa-user-plus pl-1"></i></a>
        </div>
    </div>
    
    <div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">User List</h3>
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
                    <th style="width: 120px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><a href="{{ url('admin/users/'.$user->id.'/edit') }}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td><a href="{{ url('admin/users/'.$user->id.'/edit') }}"><span class="fas fa-edit"></span></a>
                            <span class="fas fa-trash-alt pl-2"></span>
                            @if (count($user->history) > 0)
                                <a href="{{ url('admin/users/'.$user->id.'/access-history') }}">
                                    <span class="fas fa-history pl-2"></span>
                                </a>
                            @endif
                        </td>
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

