<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
//index function (main list)
{
    public function index()
    {
        //In memory data (mock data)
        // $todos = [
        // ['id' => 1, 'title' => 'Buy groceries', 'completed' => false],
        //  ['id' => 2, 'title' => 'Clean the house', 'completed' => true],
        // ['id' => 3, 'title' => 'Pay Bills', 'completed' => false],
        // ['id' => 4, 'title' => 'Reserve the table', 'completed' => true],
        // ];
        //$todos = DB::table('todos')->get();
        //return $todos;
        //return  view('todos.index', [
        //'todos' => $todos
        // ]);

        $completeTodos = DB::table('todos')
            ->select('id', 'title', 'completed')
            ->where('completed', true)
            ->get();
        //return $completeTodos;
        // all todos from database
        $uncompletedTodos = DB::table('todos')
            //filter uncompleted todos
            ->select('id', 'title', 'completed')
            ->where('completed', false)
            ->get();
        //return $uncompletedTodos;
        return view('todos.index', compact('completeTodos', 'uncompletedTodos'));
    }
}
