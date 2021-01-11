@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Package Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form method="post" action="{{ route('package.store') }}">
          @csrf
          <div class="form-group">    
              <label for="truck_number">Truck Number </label>
              <input type="text" class="form-control" name="truck_number"/>
          </div>
          <div class="form-group">
              <label for="no_of_items">Package Number</label>
              <input type="number" class="form-control" name="package_number"/>
          </div>
          <div class="form-group">
              <label for="postman_name">Destination</label>
              <input type="text" class="form-control" name="destination"/>
          </div>
          <div class="form-group">
              <label for="date_of_operation">Date of Operation</label>
              <input type="date" class="form-control" name="date_of_operation"/>
          </div>
          
          <div class="row justify-content-center">
          <a href="{{ route('package.index')}}" class="btn btn-primary bg-danger">Return</a>&nbsp;&nbsp;                        
          <button type="submit" class="btn btn-primary text-center bg-success">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection