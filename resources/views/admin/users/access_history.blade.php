@extends('layouts.template')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Users Access History</h1>
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
    
    <div class="row">
        <div class="col-8">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-2">
                    <i class="fas fa-user pr-2"></i>User Details
                </h3>
                <ul class="nav nav-pills ml-auto">
                <li class="nav-item p-1"><a href="{{ url('admin/users/'.$user->id.'/edit') }}"><i class="fas fa-edit pr-2"></i></a></li>
                </ul>
              </div>
              <div class="card-body p-3">
                <dl class="row">
                    <dt class="col-sm-4">Name</dt>
                    <dd class="col-sm-8">{{$user->name}}</dd>
                    <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-8"><a href="mailto: {{$user->email}}">{{ $user->email }}</a></dd>
                    <dt class="col-sm-4">Role</dt>
                    <dd class="col-sm-8">{{ $user->role }}</dd>
                    <dt class="col-sm-4">Unit</dt>
                    <dd class="col-sm-8">{{ $user->unit->name}}</dd>
                    <dt class="col-sm-4">Create Date</dt>
                    <dd class="col-sm-8">{{ $user->created_at }}</dd>
                  </dl>
              </div><!-- /.card-body -->
            </div>
          </div>
        
    </div>
    
    <div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Access History</h3>
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
                    <th>IP Address</th>
                    <th>Date</th>
                    <th style="width: 120px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$history->last_login_ip}}</td>
                        <td>{{$history->last_login_at}}</td>
                        <td><span class="fas fa-trash-alt"></span></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <ul class="float-right">
                {{ $histories->links() }}
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

