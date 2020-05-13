@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br>
    <h3 align="center">Add data</h3>
    <br>

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-sucess">
      <p>{{\Session::get('success')}}</p>
    </div>
    @endif

    <form action="{{url('nodes_officer')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <input type="text" name="node_id" class="form-control" placeholder="Enter node_id">
      </div>

      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter name">
      </div>

      <div class="form-group">
        <input type="text" name="country_codes" class="form-control" placeholder="Enter country_codes">
      </div>

      <div class="form-group">
        <input type="text" name="countries" class="form-control" placeholder="Enter countries">
      </div>

      <div class="form-group">
        <input type="text" name="sourceID" class="form-control" placeholder="Enter sourceID">
      </div>

      <div class="form-group">
        <input type="text" name="valid_until" class="form-control" placeholder="Enter valid_until">
      </div>

      <div class="form-group">
        <input type="text" name="note" class="form-control" placeholder="Enter note">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary">
      </div>

    </form>
  </div>
</div>
@endsection
