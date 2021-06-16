<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('welcome', compact('workers'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $worker = new Worker();
        $worker->idworker = $request['idworker'];
        $worker->group = $request['group'];
        $worker->name = $request['name'];
        $worker->dob = $request['dob'];
        $worker->gender = $request['gender'];
        $worker->phone = $request['phone'];
        $worker->CMND = $request['CMND'];
        $worker->email = $request->input('email');
        $worker->address = $request['address'];
        $worker->save();
        return redirect()->route('worker.index');
    }

    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        return view('edit', compact('worker'));
    }

    public function update(Request $request, $id)
    {
        $worker = Worker::findOrFail($id);
        $worker->idworker = $request['idworker'];
        $worker->group = $request['group'];
        $worker->name = $request['name'];
        $worker->dob = $request['dob'];
        $worker->gender = $request['gender'];
        $worker->phone = $request['phone'];
        $worker->CMND = $request['CMND'];
        $worker->email = $request->input('email');
        $worker->address = $request['address'];
        $worker->save();
        return redirect()->route('worker.index');
    }

    public function destroy($id)
    {
        $worker = Worker::findOrFail($id);
        $worker->delete();
        return redirect()->route('worker.index');
    }

    public function search(Request $request)
    {
        $search = $request['search'];
        $workers = Worker::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('idworker', 'LIKE', '%' . $search . '%')->get();
        return view('welcome', compact('workers'));
    }
}
