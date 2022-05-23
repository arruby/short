<?php

namespace App\Controllers;

// use \App\Models\LinkCatalogModel;

class LoginCont extends BaseController
{
    // protected $linkCatalogModel;

    public function __construct()
    {
        // $this->linkCatalogModel = new LinkCatalogModel();
    }

    public function index()
    {
        $data = [
            "title" => "Login"
        ];
        return view('login', $data);
    }
}
