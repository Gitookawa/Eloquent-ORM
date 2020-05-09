@extends('ookawa1.layouts')

<h1>Person</h1>

@section('content')
  <table>
  <tr><th>Name</th><th>mail</th><th>Age</th></tr>
    @foreach ($items as $item)
      <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->mail}}</td>
          <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
@endsection

