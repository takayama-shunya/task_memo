@extends('layouts.app')

@section('title')
  <h4>memo edit</h4>
@endsection

@section('content')
<div>
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach($errors->all() as $error) 
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>
<div class="container">
   <div class="">
       <div class="">
           <div class="">
             <form action="{{ route('memos.update', [$memo->id]) }}" method="post" >
              @csrf
              @method('patch')
              <div class="pb-2">
                title<br><input type="text" name="title" value="{{ $memo->title }}">
              </div>
              <div class="pb-2">
                content<br><input type="text" name="content" value="{{ $memo->content }}">
              </div>
              <div class="pt-6">
                <input type="submit" class="btn btn-primary" value="登録する" dusk="create-btn">
              </div>
             </form>
           </div>
       </div>
   </div>
</div>
@endsection
