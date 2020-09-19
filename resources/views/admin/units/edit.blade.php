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
              <h3 class="card-title">Update Unit</h3>
            </div>

            <form class="form-horizontal" action="{{ url('/admin/units/'.$unit->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="card-body">

            <div class="form-group row">
                <label for="unitname" class="col-sm-2 col-form-label">Unit Name</label>
                <div class="col-sm-6 ">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Unit Name" value="{{ $unit->name }}">
                    @error('name')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" value="{{ $unit->address }}">
                    @error('address')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="contact" class="col-sm-2 col-form-label">Contact No #</label>
                <div class="col-sm-6">
                    <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact No." value="{{ $unit->contact }}">
                    @error('contact')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="parentId" class="col-sm-2 col-form-label">Parent Unit</label>
                <div class="col-sm-6">
                <input type="text" name="parent_id" class="form-control" id="parentId" placeholder="Parent Unit" value="{{$unit->parent_id}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-sm-2 col-form-label">State</label>
                <div class="col-sm-6">
                    <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" placeholder="State" value="{{ $unit->state }}">
                    @error('state')
                        <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="mainUnit" name="main_unit" {{ $unit->main_unit ? 'checked': '' }}>
                        <label class="form-check-label" for="mainUnit">Main Unit ?</label>
                    </div>
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

