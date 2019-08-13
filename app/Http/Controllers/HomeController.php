<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laraturst;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Laratrush::hasRole('admin')){
            return $this->adminDashboard();
        }
        if(Laratrush::hasRole('member')){
            return $this->memberDashboard();
        }
        return view('home');
    }

    protected function adminDashboard()
    {
        return redirect('/admin/home');
    }
    protected function memberDashboard()
    {
        return view('home');
    }
}