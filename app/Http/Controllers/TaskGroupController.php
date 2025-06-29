<?php

namespace App\Http\Controllers;

use App\Models\TaskGroup;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class TaskGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(TaskGroup::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TaskGroup::insert([
            'task_group_name' => $request->task_group_name,
            'active' => 1
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show( $task_group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $task_group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $taskGroup = TaskGroup::find($id);
        if ($taskGroup) {
            $taskGroup->update([
                'task_group_name' => $request->task_group_name,
            ]);
            return redirect()->back()->with('success', 'Tugas berhasil diedit');
        }
        alert('Tugas tidak ditemukan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $taskGroup = TaskGroup::find($id);
        if ($taskGroup) {
            $taskGroup->delete();
            // return response()->isOk();
            return redirect(url()->current());
            // return view('admin.tugas', compact($taskGroup::all()))->with('success', 'Tugas berhasil dihapus');
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Tugas berhasil dihapus'
            // ]);
        }
        alert('Tugas tidak ditemukan');
        // return response()->json([
        //     'status' => 'error',
        //     'message' => 'Tugas tidak ditemukan'
        // ], 404);
    }
}
