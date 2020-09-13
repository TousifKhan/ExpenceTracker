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
              <h3 class="card-title">Create New Unit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>


            <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-12">
                        Start creating your amazing application!  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control form-control-sm" placeholder="Email">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control form-control-sm" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control form-control-sm" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder=".col-3">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" placeholder=".col-4">
                    </div>
                    <div class="col-5 input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
  
                  <div class="input-group mb-3">
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-check"></i></span>
                    </div>
                  </div>
  
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                      <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                    </div>
                  </div>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Create</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

