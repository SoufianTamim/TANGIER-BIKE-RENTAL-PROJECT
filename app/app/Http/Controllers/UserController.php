<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::paginate(15);
        return view('user.user', ['users' => $users]);
    }

    public function contact(Request $request)
    {
        $mail = Mail::to($request->email)->send(new ContactEmail($request));
        return redirect()->route('contact')->with('confirm', 'Successfully received');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function banUser($id)
    {
        // Retrieve the user that we want to ban
        $user = User::where('user_id', $id)->first();
        $user->status = 'banned';
        $user->save();
        return redirect('/user');
    }
}
