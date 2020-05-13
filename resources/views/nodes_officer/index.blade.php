@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br>
    <h3 align="center">Nodes Officer Data</h3>
    <br>
    @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    <div class="col-md-4">
      <form action="/search" method="get">
        <div class="form-group">
          <input type="search" name="search" class="form-control">
          <span class="input-group-prepend">
            <button type="submit" name="btn btn-primary">Search</button>
          </span>
        </div>
      </form>
    </div>
    <div align="right">
      <a href="{{route('nodes_officer.create')}}" class="btn btn-primary">Add</a>
      <br>
      <br>
    </div>
    <table class="table table-bordered">
      <tr>
        <th>node_id</th>
        <th>name</th>
        <th>country_codes</th>
        <th>countries</th>
        <th>sourceID</th>
        <!--<th>valid_until</th>
        <th>note</th>-->
      </tr>
      @foreach($nodesofficer as $row)
      <tr>
        <td>{{$row['node_id']}}</td>
        <td>{{$row['name']}}</td>
        <td>{{$row['country_codes']}}</td>
        <td>{{$row['countries']}}</td>
        <td>{{$row['sourceID']}}</td>
        <td><a href="{{action('NodesOfficerController@edit', $row['node_id'])}}">Edit</a></td>
        <td>
          <form class="delete_form" action="{{action('NodesOfficerController@destroy', $row['node_id'])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
        <!--<td>{{$row['valid_until']}}</td>
        <td>{{$row['note']}}</td>-->
      </tr>
      @endforeach
    </table>


  </div>
</div>
<script>
  $(document).ready(function(){
    $('.delete_form').on('submit', function(){
      if(confirm("Are you sure you want to delete this?"))
      {
        return true;
      }
      else
      {
        return false;
      }
    });
  });
</script>
@endsection
