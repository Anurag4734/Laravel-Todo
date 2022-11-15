<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;

class TodoListController extends Controller
{


    public function index()
    {
        return view('welcome', ['lists' => todoList::all()]);
    }
    public function saveTodo(Request $req)
    {
        // print_r($req->all());   for testing only
        //to save data to database

        $todoObj = new todoList();
        $todoObj->Title = $req->todo;

        $todoObj->save();

        return redirect('/');
    }

    public function deleteItem($id)
    {
        $todo = todoList::find($id);
        $todo->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $data = todoList::find($id);

        return view('/edit', ['data' => $data]);
    }

    public function updateTodo(Request $req)
    {
        // print_r($req->all());   for testing only
        //to save data to database

        $todoObj = todoList::find($req->id);
        $todoObj->Title = $req->todo;

        $todoObj->save();

        return redirect('/');
    }
}