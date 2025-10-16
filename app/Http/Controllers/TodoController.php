<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
//index function (main list)
{
    public function index()
    {
        //In memory data (mock data)
        $todos = [
            ['id' => 1, 'title' => 'Buy groceries', 'completed' => false],
            ['id' => 2, 'title' => 'Clean the house', 'completed' => true],
            ['id' => 3, 'title' => 'Pay Bills', 'completed' => false],
            ['id' => 4, 'title' => 'Reserve the table', 'completed' => true],
        ];
        return  view('todos.index', [
            'todos' => $todos
        ]);
    }
}
