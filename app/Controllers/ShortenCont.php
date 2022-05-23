<?php

namespace App\Controllers;

use \App\Models\LinkModel;

class ShortenCont extends BaseController
{
    protected $linkModel;
    protected $linknya;

    public function __construct()
    {
        $this->linkModel = new LinkModel();

        // $this->linknya = "https://masprint.id/";
        $this->linknya = base_url() . "/";
    }

    public function shorten()
    {
        $validationRule = [
            'url_original' => [
                'label' => 'URL Original',
                'rules' => 'valid_url_strict[https,http]',
                'errors' => [
                    'valid_url_strict' => 'URL tidak valid!'
                ]
            ]
        ];

        $url = $this->request->getVar('url_original');

        if ($url == "") {
            $respon = [
                'kode' => '4X1',
                'judul' => '&nbsp;<strong>Gagal!</strong><br>',
                'pesan' => 'URL belum diisi!',
                'type' => 'warning'
            ];
        } else {
            if (!$this->validate($validationRule)) {
                $data = ['errors' => $this->validator->getErrors()];

                $respon = [
                    'kode' => '4X2',
                    'judul' => '<strong>Gagal!</strong>',
                    'pesan' => $data['errors']['url_original'],
                    'type' => 'danger'
                ];
            } else {
                $i = 0;
                do {
                    $randShort = random_string('alnum', 5);
                    $findShort = $this->linkModel->findUniqueShort($randShort);
                    $i++;
                } while ($findShort  > 0);

                $kirim =  $this->linkModel->save([
                    'link_original' => $url,
                    'link_complete' => $this->linknya . $randShort,
                    'link_short' => $randShort,
                    'expires_date' => $this->dateTime_now,
                ]);

                if ($kirim) {
                    $respon = [
                        'kode' => '1X1',
                        'judul' => '<strong>Sukses!</strong>',
                        'pesan' => 'URL berhasil dipendekin!',
                        'type' => 'success',
                        'dataShort' => $randShort . '='
                    ];
                }
            }
        }

        echo json_encode($respon);
    }
}
