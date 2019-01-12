@extends('layouts.admin')
@section('content')
    <h3>Media index</h3>
    @if(count($photos)>0)
    <table class="table table-striped ">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Photo</th>
            <th scope="col"></th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>

        @foreach($photos as $photo)
        <tr>
            <td>{{$photo->id}}</td>
            <td><img src="{{$photo->file}}" width="120px"  height="120px" alt="No such file found"></td>

            <td>
                {!! Form::open(['method'=>'DELETE', 'action'=> ['MediaController@destroy', $photo->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </td>
            <td>{{$photo->created_at?$photo->created_at :'no date'}}</td>
            <td>{{$photo->updated_at}}</td>
        </tr>

            @endforeach
          @else
          <tr>No Files to show</tr>


          @endif
      </tbody>
    </table>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            {{$photos->render()}}
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection