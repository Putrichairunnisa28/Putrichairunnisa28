<?php
namespace  App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model{
   protected    $table       ="tb_detailpesan";
   // uncomment below if you want add primary key
   protected $primaryKey     ="id";
   protected $allowedFields  = ['id','id_pesan','id_menu','jumlah','harga'];
}
