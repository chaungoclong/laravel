<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = ClassRoom::all();
        // dd($classrooms);
        return view("classrooms.index", ["classrooms" => $classrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("classrooms.create");
    }

    /**
     * Store a newly created resource in storage. way 1 it by its'class
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "class_name" => ["required"]
        ]);
        
        ClassRoom::create($request->all());
        return redirect()->route('class.list');
    }

      /**
     * Store a newly created resource in storage. way 2 . it by it
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $request->validate([
            "class_name" => ["required"]
        ]);

        $classRoom = new ClassRoom;
        $classRoom->class_name = $request->input('class_name');
        $classRoom->save();

        return redirect()->route('class.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRoom $classRoom)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRoom $classRoom, $id)
    {
        $classRoom = $classRoom->findOrFail($id);
        return view("classrooms.edit", ["classRoom" => $classRoom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassRoom $classRoom)
    {
        $request->validate([
            "class_name" => ["required"]
        ]);

    //    way 1:
    //    $classRoom = ClassRoom::where('class_id', $request->class_id)->firstOrFail();
    //    $classRoom->update(["class_name" => $request->class_name]);
    //    way 2: Model::where(...)->update(...) || $model->where(...)->update(...)
    //    way 3: Model = new Model -> set attributes -> $model->save()
    //    ...
        $classRoom = $classRoom->findOrFail($request->class_id);
        $classRoom->update(["class_name" => $request->class_name]);

       return redirect()->route('class.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      ClassRoom::findOrFail($id)->delete();
      return redirect()->route('class.list');
    }

    public function debug()
    {
       foreach (ClassRoom::all() as $item) {
           var_dump($item->class_name);
       }
    }
}
