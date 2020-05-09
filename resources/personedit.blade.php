@extends('ookawa1.layouts')

<h1>personedit</h1>

@section('content')
   @if (count($errors) > 0)
   <div>
      <ul>
         @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
         @endforeach
    </div>
    @endif
    <table>
     <form action="/ookawa1/personedit" method="post">
       {{ csrf_field() }}
         <input type="hidden"name="id" value="{{$form->id}}">
         <tr><th>name:</th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
         <tr><th>mail:</th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
         <tr><th>name:</th><td><input type="number" name="age" value="{{$form->age}}"></td></tr>
         <tr><th></th><td><input type="submit" value="send"></td></tr>
      </form>
    
@endsection
