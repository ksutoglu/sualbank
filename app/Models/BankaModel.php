<?php namespace App\Models;

use CodeIgniter\Model;

class BankaModel extends Model
{
    protected $table      = 'banka';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['ders', 'aciklama', 'grup', 'soru', 'asikki',' bsikki', 'csikki', 'dsikki', 'esikki'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'ders'          =>'required|max_length[50]',
        'aciklama'      =>'required',
        'grup'          =>'required',
        'soru'          =>'required',
        'asikki'        =>'required',
        'bsikki'        =>'required',
        'csikki'        =>'required',
        'dsiiki'        =>'required',
        'esikki'        =>'required',
    ];

}