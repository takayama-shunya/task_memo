@extends('layouts.app')

@section('title')
  <h4>task index</h4>
@endsection

@section('content')
<div class="container">
  <div>
    <table class="table-auto border border-collapse">
      <thead>
        <tr>
          <th class="">タイトル</th>
          <th class="">作成日</th>
          <th class="">内容</th>
          <th class=""></th>
        </tr>
      </thead>
      @foreach($memos as $memo)
      <tbody>
        <tr>
          <td class="">{{$memo->title}}</td>
          <td class="">{{$memo->created_at}}</td>
          <td class="">{{$memo->content}}</td>
          <td class=""></td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <div class="float-left">{{$memos->links()}}</div>
</div>
@endsection