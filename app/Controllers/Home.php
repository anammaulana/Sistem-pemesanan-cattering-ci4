<?php

namespace App\Controllers;


class Home extends BaseController
{
    protected $filters = ['auth'];

    public function index(): string
    {
        return view('blank');
    }
}
