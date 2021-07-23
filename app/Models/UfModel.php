<?php 
namespace App\Models;
use CodeIgniter\Model;

class UfModel extends Model
{
    protected $table = 'uf_indicator';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fecha', 'valor'];
}

