@extends('ookawa1.layouts')

<h1>person1</h1>

@section('content')

<table>
  <tr><th>Data</th></tr>
  @foreach ($items as $item)
    <tr>
	 <td>{{$item->getData()}}</td>
    </tr>
  @endforeach
</table>

@endsection
   
