<?php 
namespace App\Models;
use CodeIgniter\Model;

class Uf extends Model
{
    protected $table = 'uf_indicator';

	protected $primaryKey = 'id';

	protected $allowedFields = ['date', 'value'];
}