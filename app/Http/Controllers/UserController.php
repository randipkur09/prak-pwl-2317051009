<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // ==========================
    // List User
    // ==========================
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    // ==========================
    // Tambah User
    // ==========================
    public function create()
    {
        $kelas = Kelas::all();

        return view('create_user', [
            'title' => 'Tambah Pengguna',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'name' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'email' => strtolower(str_replace(' ', '', $request->input('nama'))) . '@example.com',
            'password' => bcrypt('password123'),
        ]);

        return redirect()->to('/user')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    // ==========================
    // Edit User
    // ==========================
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $kelas = Kelas::all();

        return view('edit_user', [
            'title' => 'Edit Pengguna',
            'user' => $user,
            'kelas' => $kelas
        ]);
    }

    // ==========================
    // Update User
    // ==========================
   public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'nim' => 'required|string|max:20',
        'kelas_id' => 'required|exists:kelas,id',
        'email' => 'required|email|unique:users,email,' . $id,
    ]);

    $user = User::findOrFail($id);

    // update manual biar semua kolom kebaca
    $user->name = $request->name;
    $user->nim = $request->nim;
    $user->kelas_id = $request->kelas_id;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('user.index')->with('success', 'Data pengguna berhasil diperbarui!');
}


    // ==========================
    // Delete User
    // ==========================
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data pengguna berhasil dihapus!');
    }
}
