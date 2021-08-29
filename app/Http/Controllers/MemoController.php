<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;


class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::orderBy('created_at', 'asc')->paginate(10);
        return view('memo/index', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memo = new Memo;

        $memo->title = $request->title;
        $memo->content = $request->content;
        $memo->user_id = Auth::id();

        if($memo->save()) {
            session()->flash('flash_message_succes', 'メモ作成しました');
            return redirect('/memos');
       }
       else {
            session()->flash('flash_message_failed', '失敗しました');
            return redirect('/memos');
       }
  
       return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memo/show', compact('memo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memo = Memo::find($id);
        return view('memo/edit', compact('memo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $memo = Memo::find($id);

        $memo->title = $request->title;
        $memo->content = $request->content;

        if($memo->save()) {
            session()->flash('flash_message_succes', 'メモ編集しました');
            return redirect('/memos');
       }
       else {
            session()->flash('flash_message_failed', '失敗しました');
            return redirect('/memos');
       }
  
       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memo = Memo::find($id);

        if($memo->delete()) {
            session()->flash('flash_message_succes', 'メモ削除しました');
            return redirect('/memos');
       }
       else {
            session()->flash('flash_message_failed', '失敗しました');
            return redirect('/memos');
       }

    }

    //vue表示用
    public function task_index()
    {
        $memos = Memo::orderBy('created_at', 'asc')->get();
        // $memos = Memo::all();
        return response()->json(['memos' => $memos]);
    }

    public function task_store($request)
    {
        return Memo::create($request->all());
    }

    public function task_show($id)
    {
        $task = Memo::find($id);
        return $task;
    }
}
