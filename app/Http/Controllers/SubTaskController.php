<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\sub_task;
use App\Models\SubTask;
use App\Models\task_group;
use App\Models\TaskGroup;
use Illuminate\Http\Request;

class SubTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskGroups = TaskGroup::with('subTasks')->get();
        // $images = $filePaths = FileManager::pluck('file_path');
        return view('admin.tugas', compact('taskGroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
             'task_group_id'  =>$request->task_group_id ,
             'task_name' => $request->task_name ,
             'task_description' => $request->task_description ,
             'task_due' => $request->task_due 
        ];
        SubTask::insert($data);
        return redirect()->back()->with('success', 'Tugas Berhasil Ditambahkan');
    }

    public function list_tugas(){
        $images = $filePaths = FileManager::pluck('file_path');
        return view('admin.listTugas', compact('images'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = SubTask::find($id);
        return view('admin.viewTugas', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $sub_task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $sub_task)
    {
        //
    }
}
