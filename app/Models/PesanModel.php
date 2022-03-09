<?php
namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model{
    protected $table      ='tb_pesan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal','id_user','no_nota','total_harga','no_meja','status'];
}
?>