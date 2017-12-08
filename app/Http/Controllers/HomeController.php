<?php

namespace App\Http\Controllers;
use App\User;
use App\IndividualAgent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    protected $limit;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $users = User::paginate(5);
        return view('home');
    }
    
    public function getUsers($limit = null)
    {
        $limit = request('limit') ? request('limit') : 10;
        return $users = User::paginate($limit); 
    }
    
    public function getIndividuals($limit = null)
    {
        $limit = request('limit') ? request('limit') : 10;
        return $agents = IndividualAgent::paginate($limit); 
    }
    
    public function searchIndividuals($text, $limit = null)
    {
        $limit = $limit ? $limit : 10;
        return $users = IndividualAgent::where('firstName', 'like', '%'.$text.'%')
                        ->paginate($limit);
    }

    
    public function searchUsers($text, $limit = null)
    {
        $limit = $limit ? $limit : 10;
        return $users = User::where('name', 'like', '%'.$text.'%')
                        ->orWhere('email', 'like', '%'.$text.'%')
                        ->paginate($limit);
    }
}
