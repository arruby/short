<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkCatalogModel extends Model
{
    protected $table = 'link_catalog';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nama', 'link', 'keterangan', 'count_click', 'created_who', 'updated_who', 'deleted_who', 'active'];

    public function showAll()
    {
        return $this->where('active', '1')->findAll();
    }
}
