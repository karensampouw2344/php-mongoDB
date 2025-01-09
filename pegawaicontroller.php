<?php 
use \application\controllers\MainController;

class PegawaiController extends MainController {
    function __construct() {
        parent::__construct();
        $this->model('pegawai');
        $this->model('jabatan');
    }

    public function index() {
        $data = $this->pegawai->select()
            ->join('jabatan', ['pegawai.id_jabatan' => 'jabatan.id_jabatan'], 'LEFT JOIN')
            ->orderBy('pegawai.id_pegawai', 'DESC')
            ->get();
        $this->template('pegawai/index', $data);
    }

    public function add() {
        $data = $this->jabatan->select()->get();
        $this->template('pegawai/add', $data);
    }

    public function edit($id) {
        $pegawai = $this->pegawai->select()
            ->where('id_pegawai', $id)
            ->get();
        $jabatan = $this->jabatan->select()->get();
        $data = [
            'pegawai' => $pegawai,
            'jabatan' => $jabatan
        ];
        $this->template('pegawai/edit', $data);
    }

    public function insert() {
        $foto = $_FILES['foto'];
        if (isset($foto) && $foto['error'] == 0) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($foto['name']);
            
            if (move_uploaded_file($foto['tmp_name'], $uploadFile)) {
                echo "File successfully uploaded!";
            } else {
                echo "File upload failed!";
            }
        } else {
            echo "No file uploaded or an error occurred!";
        }
        
    }
}
