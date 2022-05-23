<?php

namespace App\Controllers;

use \App\Models\LinkCatalogModel;

class ListLinkCont extends BaseController
{
    protected $linkCatalogModel;

    public function __construct()
    {
        $this->linkCatalogModel = new LinkCatalogModel();
    }

    public function index()
    {
        $listLink = $this->linkCatalogModel->showAll();
        // dd($listLink);
        $data = [
            "title" => "List Link",
            "list" => $listLink
        ];
        return view('listLink', $data);
    }
}
