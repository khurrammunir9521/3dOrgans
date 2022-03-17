<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medical;
use Illuminate\Http\Request;
use App\Models\PublicService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MedicalController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('myfile')) {
            $myfile  = Storage::disk('public')->put('upload/', $request->myfile);
        } else {
            $myfile  = null;
        }
        Medical::create([
            'user_id' => Auth::id(),
            'myfile' => $myfile,
            'procedure' => $request->procedure,
            'parts' => $request->parts,
            'discription' => $request->discription,
            'pa_age' => $request->pa_age,
            'pa_id' => $request->pa_id,
            'pa_name' => $request->pa_name,
            'hospital' => $request->hospital,
            'dr_phone' => $request->dr_phone,
            'dr_email' => $request->dr_email,
            'dr_spec' => $request->dr_spec,
            'dr_name' => $request->dr_name,
            'status' => 1,
        ]);
        $users = User::where('role','admin')->first();
        $users->notify(new MedicalNotification($users));
        return redirect()->route('home')->with('error_code', 5);
    }

    public function payment()
    {
        return redirect()->route('home')->with('error_code', 4);
    }
    public function index()
    {
        $medical = Medical::all();
        return view('pages.admin.dashboard.Medical.index', compact('medical'));
    }
    public function show($id)
    {
        $order = Medical::find($id);
        return view('pages.admin.dashboard.Medical.show', compact('order'));
    }

    public function updated(Request $request)
    {
        $order = Medical::find($request->id);
        $user = User::find($order->user_id);
        if ($request->has('checkbox1')) {
            $order->status = 2;
            $order->save();
        }
        if ($request->has('checkbox2')) {
            $order->status = 3;
            $order->save();
        }
        if ($request->has('checkbox3')) {
            $order->status = 4;
            $order->save();
        }
        if ($request->has('checkbox4')) {
            $order->status = 5;
            $order->save();
        }
        if ($request->has('checkbox5')) {
            $order->status = 6;
            $order->save();
        }
        if ($request->has('checkbox6')) {
            $order->status = 7;
            $order->save();
        }
        if ($request->has('checkbox7')) {
            $order->status = 8;
            $order->save();
        }

        $details = [
            'title' =>  $user->name,
            'body' => $order->status,
        ];

        \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
    public function updatedpublic(Request $request)
    {
        $order = PublicService::find($request->id);
        $user = User::find($order->user_id);
        if ($request->has('checkbox2')) {
            $order->status = 4;
            $order->save();
        }
        $details = [
            'title' =>  $user->name,
            'body' => $order->status,
        ];

        \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
}
