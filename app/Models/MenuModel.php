<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'tb_menu';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'gambar','harga','kategori'];


    public function getMenu(){
        return $this->findAll();
    }
    
    public function getMenuById($id){
        return $this->where(['id'=>$id])->find();
    }
    public function getMenuAdminById($id){
        return $this->where(['id'=>$id])->first();
    }
    public function getMenuPetugasById($id){
        return $this->where(['id'=>$id])->first();
    }
    public function getMenuKategori($kategori){
        return $this->where(['kategori'=>$kategori])->orderBy('id','DESC')->paginate(5);
    }
 
  
 

    
}