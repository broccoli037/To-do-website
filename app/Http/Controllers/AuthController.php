<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Auth;

class AuthController extends Controller
{
    public function login_view(){
            return view('auth.login');
        
    }
    public function login(Request $request){
        
        $cred = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login')->withError('Error');
    
    }
    public function register_view(){
        return view('auth.register');
    
    }
    public function register(Request $request){
        $request->validate([
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('register')->withError('Error');
    
    }
    public function home(){
        $user = Auth::user();
        $tasks = Task::where('email', $user->email)
             ->where('status', 'in_process')
             ->get();
        return view('welcome', compact('tasks'));
        
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    
    }
    public function done($taskId){
        
        $task = Task::findOrFail($taskId);

        // Check if the task belongs to the authenticated user
        if ($task->email !== Auth::user()->email) {
            abort(403); // Unauthorized
        }

        // Update the status to 'completed'
        $task->update(['status' => 'completed']);

        return redirect()->back()->with('success', 'Task marked as completed.');
    
    }

    public function addtodo(Request $request){
        $data = new task;

        $data->task=$request->task;
        $data->time=$request->time;
        $data->email=$request->email;

        $data->save();
        return redirect('home');
    }
    
}
