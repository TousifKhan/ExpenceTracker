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
              <h3 class="card-title">Update Contact Type</h3>
            </div>

            <form class="form-horizontal" action="{{ url('/admin/contact-type/'.$type->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="card-body">

                <div class="form-group row">
                    <label for="contact_type" class="col-sm-2 col-form-label">Contact Type</label>
                    <div class="col-sm-6 ">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Contact Type" value="{{ $type->name }}">
                        @error('name')
                            <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Contact Description" value="{{ $type->description }}">
                        @error('description')
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

