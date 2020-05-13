@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br>
    <h3 align="center">Edit Node Officer</h3>
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
    <form action="{{action('NodesOfficerController@update', $id)}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{$nodesofficer->name}}" placeholder="Enter name">
      </div>
      <div class="form-group">
        <input type="text" name="country_codes" class="form-control" value="{{$nodesofficer->country_codes}}" placeholder="Enter country code">
      </div>
      <div class="form-group">
        <input type="text" name="countries" class="form-control" value="{{$nodesofficer->countries}}" placeholder="Enter country">
      </div>
      <div class="form-group">
        <input type="text" name="sourceID" class="form-control" value="{{$nodesofficer->sourceID}}" placeholder="Enter source ID">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>
    </form>


  </div>
</div>
@endsection
