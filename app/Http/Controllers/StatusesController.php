<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

/**
 * Class StatusesController
 * @package App\Http\Controllers
 */
class StatusesController extends Controller
{
    /**
     * StatusesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);
        \Auth::user()->statuses()->create([
            'content' => $request->input('content')
        ]);
        session()->flash('success', 'Tweeted!');
        return redirect()->back();
    }

    /**
     * @param Status $status
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Status $status)
    {
        $this->authorize('destroy', $status);
        $status->delete();
        session()->flash('success', 'This tweet has been deleted!');
        return redirect()->back();
    }
}
