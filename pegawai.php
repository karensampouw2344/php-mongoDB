<?php 
class Pegawai extends Model {
    public function construct (){
        parent:: construct();
        $this->table = 'pegawai';
    }
}