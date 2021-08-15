@extends('layouts.app')

@section('title')
  <h4>memo index</h4>
@endsection

@section('content')

<div class="container">
  <div>
    <a href="{{ route('memos.create') }}" class="btn btn-primary" >新規作成</a>
  </div>
  <div>
    <table class="table table-bordered">
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
          <td class="">{{$memo->created_at->format('Y/m/d') }}</td>
          <td class="">{{$memo->content}}</td>
          <td class="">
            <div class="">
              <a href="{{ route('memos.show', [$memo->id]) }}" class="btn btn-outline-info">詳細</a>
            </div> 
            <div>
              <a href="{{ route('memos.edit', [$memo->id]) }}" class="btn btn-outline-success" >編集</a>
            </div>
            <div class="">                       
              <form action="{{ route('memos.destroy', [$memo->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="memo_id" value="{{ $memo->id }}">
                <button class="btn btn-outline-danger" onClick="delete_alert(event);return false;" dusk="memo-destroy-{{$memo->id}}">削除</button>
              </form>
            </div>

          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <div>{{$memos->links()}}</div>
</div>

@endsection