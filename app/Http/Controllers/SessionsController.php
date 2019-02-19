<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SessionsController
 * @package App\Http\Controllers
 */
class SessionsController extends Controller
{
    /**
     * SessionsController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if (\Auth::attempt($credentials, $request->has('remember'))) {
            if (\Auth::user()->activated) {
                session()->flash('success', 'You\'re logged in!');
                $fallback = route('users.show', \Auth::user());
                return redirect()->intended($fallback);
            } else {
                \Auth::logout();
                session()->flash('warning', 'Your account is not activated, please check confirm email in your mailbox.');
                return redirect()->back()->withInput();
            }
        } else {
            session()->flash('danger', 'Please check your credential.');
            return redirect()->back()->withInput();
        }
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy()
    {
        \Auth::logout();
        session()->flash('success', 'You\'ve logged out.');
        return redirect('login');
    }
}
