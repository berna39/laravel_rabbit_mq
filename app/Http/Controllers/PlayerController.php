<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MyJob;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::paginate(10);
        return view('index', compact('players'));
    }

    public function store(Reuqest $request)
    {

    }

    public function job()
    {
        $data = Player::all();
        MyJob::dispatch($data);
    }

    public function edit($id)
    {

    }
}
