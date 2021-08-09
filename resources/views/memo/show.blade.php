@extends('layouts.app')

@section('title')
  <h4>memo show</h4>
@endsection

@section('content')
  <div>
    <a href="{{ route('memos.edit', [$memo->id]) }}" class="btn btn-outline-success" >編集</a>
  </div>
  </div>
  <div class="container">
    <h4>title</h4>
    <div>{{$memo->title}}</div>
    <h4>content</h4>
    <div>{{$memo->content}}</div>
    <h4>created_at</h4>
    <div>{{$memo->created_at->format('Y/m/d')}}</div>
  </div>
@endsection
