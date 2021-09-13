<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class AdminController extends Controller
{
    public function index(){

        $people = Guest::paginate(10);

        return view('admin.index', ['people' => $people]);
    }


    public function delete($id){

    $person = Guest::findOrFail($id);

    $person->delete();

    session()->flash('person-delete', 'The person has been deleted');

    return back();
    }

}
