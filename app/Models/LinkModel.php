<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['link_original', 'link_complete', 'link_short', 'count_accessed', 'expires_date', 'created_who', 'updated_who', 'deleted_who', 'active'];

    public function findUniqueShort($short)
    {
        return $this->where('link_short', $short)->countAllResults();
    }

    public function findOriginal($short)
    {
        // $this->select('link_original');
        return $this->where('link_short', $short)->first();
    }
}
