@extends('ookawa1.layouts')

<h1>Person hasOne</h1>

@section('content')
  <table>
  <tr><th>Person</th><th>Board</th></tr>
  @foreach ($items as $item)
   <tr>
      <td>{{$item->getData()}}</td>
      <td>@if ($item->board != null)
           {{$item->board->getData()}}
          @endif
      </td>
   </tr>
  @endforeach
  </table>

@endsection
