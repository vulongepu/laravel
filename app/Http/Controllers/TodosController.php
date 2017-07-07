<?php

namespace App\Http\Controllers;
use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

    	$todos = Todo::all();

    	return view('todos')->with('todos',$todos);
    }

    public function store(Request $request)

    {

          // dd($request->all());

          $todo = new Todo;

          $todo->todo = $request->todo;

          $todo->save();

           Session::flash('sussess', 'Tạo trường mới thành công !');

          return redirect()->back();
    }

    public function delete($id){
    	$todo = Todo::find($id);

    	$todo->delete();
           Session::flash('sussess', 'Xóa trường mới thành công !');

    	return redirect()->back();
    }

    public function update($id){
    	$todo = Todo::find($id);
           Session::flash('sussess', 'Update trường mới thành công !');

    	return view('update')->with('todo',$todo);
    }

    public function save(Request $request, $id)

    {
    	$todo = Todo::find($id);

    	$todo->todo = $request->todo;
    	$todo->save();

    	return redirect()->route('todos');
    }
    
    public function completed($id){

    	$todo = Todo::find($id);

    	$todo->completed = 1;
    	$todo->save();
           Session::flash('sussess', 'completed trường mới thành công !');

    	return redirect()->back();
    }
}
