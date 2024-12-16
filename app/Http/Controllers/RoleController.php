<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    use AuthorizesRequests;

    public function index(Request $request)
    {
        $this->authorize('read konfigurasi/roles');
        // if(!Gate::allows('read role')){
        //     abort(403, 'unauthorized');
        // }
        return view('konfigurasi.role');
    }

    // public function create()
    // {
    //     $this->authorize('create konfigurasi/roles');
    //     return 'create role page';
    // }
}
