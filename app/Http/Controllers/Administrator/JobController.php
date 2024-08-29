<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class JobController extends Controller
{
    public function index()
    {
        try {
            $jobs = Vacancy::all();
            return view('administrator.jobs.index',compact('jobs'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage());
        }
    }

    public function add() {
        return view('administrator.jobs.add');
    }

    public function show($id)
    {
        try {
            $job = Vacancy::find($id);
            return view('administrator.jobs.show',compact('job'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'name' => 'required',
            ]);
            if($data['job_id'] <= 0){
                $job = Vacancy::create($data);
            } else {
                $job = Vacancy::findOrFail($data['job_id']);
                $job->update($data);
            }
            return redirect()->back()->with('message', 'Vacancy updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = Vacancy::findOrFail($id);
        $course->delete();
        return redirect('/administrator/jobs');
    }

}
