<?php
namespace App\Controllers;


use CodeIngniter\Controller;
use App\Models\DetailPesanModel;
// use CodeIgniter\HTTP\Request;

    class DetailPesanController Extends Controller{
        /**
         * instance of the main Request object.
         * 
         * @var HTTP\IncomingRequest
         */
         protected $request;
         function __construct()
         {
             $this->detailpesan= new DetailPesanModel();
         }
        # code....
        //$detailpesans = new DetailPesanModel();
    }
