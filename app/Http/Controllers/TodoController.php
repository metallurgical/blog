<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('completed', 0)->latest()->get();
        
        $completedTodos = Todo::where('completed', 1)->latest()->get();
        
        return view('app-todos.index', compact('todos', 'completedTodos'));
    }

    public function create()
    {
        return view('app-todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request->all(), [
           'title' => 'required',
           'body' => 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->completed = false;
        $todo->save();
        
        return redirect('/todos');
    }

    public function show(Todo $todo)
    {
        return view('app-todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('app-todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $this->validate($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);
    
        $todo->update([
            'title' => $request->title,
            'body' => $request->body,
            'completed' => false
        ]);
        
        return redirect('/todos');
    }

    public function destroy()
    {
        //Todo::where('id', request()->deleteId)->delete();
        
        return [
            'message' => 'Todo has been deleted',
            'status' => 200
        ];
    }
    
    public function todoComplete(Request $request){
        Todo::where('id', $request->comeletedId)->update([
            'completed' => true
        ]);
    
        return [
            'message' => 'Todo has been completed',
            'status' => 200
        ];
    }
}
