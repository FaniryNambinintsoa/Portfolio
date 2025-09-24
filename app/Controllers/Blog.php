<?php
namespace App\Controllers;

class Blog extends BaseController
{
    public function blog()
    {
        return view('Header') . view('Blog') . view('Footer');
    }
}