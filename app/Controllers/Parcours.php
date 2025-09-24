<?php
namespace App\Controllers;

class Parcours extends BaseController
{
    public function parcours()
    {
        return view('Header') . view('Parcours') . view('Footer');
    }
}
?>