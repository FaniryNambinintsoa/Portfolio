<?php
namespace App\Controllers;

class Apropos extends BaseController
{
    public function apropos()
    {
        return view('Header') . view('Apropos') . view('Footer');
    }
}
?>