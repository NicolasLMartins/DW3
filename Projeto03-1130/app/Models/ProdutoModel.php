<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'produtos';
    protected $primaryKey       = 'id_produto';
    protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = [
        'id_produto',
        'nome',
        'descricao',
        'quantidade',
        'quantidade_minima',
        'valor_de_compra',
        'valor_de_venda',
        'margem_de_lucro',
        'validade',
    ];

    // // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
