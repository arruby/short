<?php

namespace App\Controllers;

use \App\Models\LinkModel;

class Landing extends BaseController
{
    protected $linkModel;

    public function __construct()
    {
        $this->linkModel = new LinkModel();
    }

    public function index()
    {
        $data = [
            "title" => "Landing Short"
        ];
        return view('index', $data);
    }

    public function controlShort($short)
    {
        $lastShort = substr($short, -1);

        if ($lastShort == "=") {
            $realShort = substr($short, 0, 5);

            $dataLink = $this->linkModel->findOriginal($realShort);

            $data = [
                "title" => "Control Short",
                "linkOriginal" => $dataLink['link_original'],
                "linkComplete" => $dataLink['link_complete'],
                "count" => $dataLink['count_accessed'],
                "created_at" => $dataLink['created_at']
            ];
            return view('control', $data);
        } else {
            $linkOriginal = $this->linkModel->findOriginal($short);

            $idShort = $linkOriginal['id'];
            $countShort = $linkOriginal['count_accessed'];

            $update = $this->linkModel->save([
                'id' => $idShort,
                'count_accessed' => $countShort + 1
            ]);

            return redirect()->to($linkOriginal['link_original']);
        }
    }
}
