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
            Create a new <a href="{{ url('/admin/contact-type/create') }}">Contact Type <i class="fas fa-address-card"></i></a>
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
                    <th>Description</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contact_types as $ct)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><a href="{{ url('admin/contact-type/'.$ct->id.'/edit') }}">{{$ct->name}}</a></td>
                        <td>{{$ct->description}}</td>
                        <td><a href="{{ url('admin/contact-type/'.$ct->id.'/edit') }}"><span class="fas fa-edit"></span></a>
                            &nbsp;&nbsp;<span class="fas fa-trash-alt"></span></td>
                        </td>
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

