<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    //
    public function getAll()
    {
        return view('rendezvous.list');
    }
    public function edit($id)
    {
        return view('rendezvous.edit');
    }
    public function add()
    {
        return view('rendezvous.add');
    }
    public function delete($id)
    {
        return $this->getAll();
    }
    public function update()
    {
        return $this->getAll();
    }
}
