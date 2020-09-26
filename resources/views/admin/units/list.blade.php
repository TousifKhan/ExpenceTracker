@extends('layouts.template')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Units</h1>
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
        Create a new <a href="{{ url('/admin/units/create') }}">Unit <i class="fas fa-user-plus"></i></a>
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
                    <th>Contact</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($units as $unit)
                    <tr>
                        <td>1.</td>
                        <td><a href="{{ url('admin/units/'.$unit->id.'/edit') }}">{{$unit->name}}</a></td>
                        <td>{{$unit->contact}}</td>
                        <td><span class="fas fa-edit"></span> <span class="fas fa-times"></span></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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

