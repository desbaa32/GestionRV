<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedcinController extends Controller
{
    //
    public function getAll()
    {
        return (view('medecin.list'));
    }
    public function edit($id)
    {
        return (view('medecin.edit'));
    }
    public function add()
    {
        return (view('medecin.add'));
    }
    public function delete($id)
    {
        return $this->getAll();;
    }
    public function update()
    {
        return $this->getAll();
    }
}
