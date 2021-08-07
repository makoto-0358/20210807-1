@extends('layouts.default')
<style>

</style>

@section('content')
@if(count($errors)>0)
<ul>
  @foreach($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<div class="create">
  <h2>Todo List</h2>
  <form action="todo/create" method="post">
  @csrf
    <input type="text" name="content">
    <input type="submit" value="追加">
  </form>
<div>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->created_at}}</td>
    <td>{{$item->content}}</td>
    <td>
      <form action="todo/update" method="post">
      @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="text" name="content" value="{{$item->content}}">
        <input type="submit" value="更新">
      </form>
    </td>
    <td>
      <form action="todo/delete" method="post">
      @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="submit" value="削除">
      </form>
  </td>
  </tr>
  @endforeach
</table>
</div>
@endsection