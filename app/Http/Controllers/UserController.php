<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $userModel; 
    protected $kelasModel;

    public function __construct(UserModel $userModel, Kelas $kelasModel) 
    { 
        $this->userModel = $userModel; 
        $this->kelasModel = $kelasModel; 
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas(); 
    
        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas,
        ]);
    }

    public function index() 
    { 
        $users = UserModel::with('kelas')->get(); 
    
        return view('list_user', [
            'title' => 'List User',
            'users' => $users,
        ]); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName(); 
            $foto->move(public_path('uploads/img'), $fotoName); 
            $fotoPath = 'uploads/img/' . $fotoName;
        }

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoPath,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    public function show($id)
    {
        $user = $this->userModel->findOrFail($id);

        return view('profile', [
            'title' => 'User Profile',
            'user' => $user,
            'profile_picture' => $user->foto ?? 'assets/img/default.jpg',
        ]);
    }
}