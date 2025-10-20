<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

   public function index(){
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(), // ubah 'user' jadi 'users'
    ];
    return view('list_user', $data); // ubah 'List_user' jadi huruf kecil semua
}


    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function store(Request $request)
{
    $this->userModel->create([
        'name' => $request->input('nama'),
        'nim' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
        'email' => strtolower(str_replace(' ', '', $request->input('nama'))) . '@example.com', // buat email otomatis
        'password' => bcrypt('password123'), // isi password dummy biar valid
    ]);

    return redirect()->to('/user');
}

    //
     public function create()
    {
        $kelas = Kelas::all();

        return view('create_user', [
            'title' => 'Tambah Pengguna',
            'kelas' => $kelas
        ]);
    }
}
