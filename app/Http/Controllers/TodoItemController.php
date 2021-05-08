<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;

class TodoItemController extends Controller
{
    public function index()
    {

        $toDo = TodoItem::all();
        return view('index', compact('toDo'));
    }

    public function create(TodoItem $toDo)
    {

        return view('create', compact('toDo'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'time' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $toDo = new TodoItem();
        $toDo->title = $request->title;
        $toDo->description = $request->description;
        $toDo->location = $request->location;
        $toDo->time = $request->time;
        $toDo->start_time = $request->start_time;
        $toDo->end_time = $request->end_time;
        $toDo->save();
        $toDo = TodoItem::all();
        return view('index', compact('toDo'));
    }

    public function edit($id)
    {

        $toDo = TodoItem::where('id', $id)->first();
        return view('create', compact('toDo'));


    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_method', '_token']);
        $toDo = TodoItem::where('id', $id)->update($data);
        $toDo = TodoItem::all();
        return view('index', compact('toDo'));


    }

    public function delete($id)
    {

        TodoItem::where('id', $id)->delete();
        $toDo = TodoItem::all();
        return view('index', compact('toDo'));

    }

    public function done($id)
    {

        $todo = TodoItem::find($id);
        if ($todo->status == "disabled") {
            $todo->status = "active";
            $todo->update();
            $toDo = TodoItem::all();
            return view('index', compact('toDo'));
        } else {

            $todo->status = "disabled";
            $todo->update();
            $toDo = TodoItem::all();
            return view('index', compact('toDo'));

        }

    }


}
