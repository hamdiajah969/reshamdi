<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    //     User
    public function userView()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function editView(string $id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('danger', 'ID tidak valid.');
        }

        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('danger', 'ID tidak valid.');
        }

        $user = User::findOrFail($id);

        // ✅ validasi dengan pengecualian id yang sedang diedit
        $validasi = $request->validate([
            'name'     => 'required|string|max:225',
            'username' => 'required|string|max:225|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:6',
            'role'     => 'required|in:admin,operator',
        ]);

        // ✅ hash password hanya bila field password diisi
        if ($request->filled('password')) {
            $validasi['password'] = bcrypt($request->password);
        } else {
            $validasi['password'] = $user->password;
        }

        // ✅ update model, BUKAN $request
        $user->update($validasi);

        return redirect()
            ->route('admin.user.index')
            ->with('success', 'Berhasil mengupdate data.');
    }

    public function destroy(string $id)
{
    try {
        $id = Crypt::decrypt($id);
    } catch (DecryptException $e) {
        return redirect()->back()->with('danger', 'ID tidak valid.');
    }

    $user = User::findOrFail($id);
    $user->delete();

    return redirect()
        ->route('admin.user.index')
        ->with('success', 'User berhasil dihapus.');
}

    // public function userView(){
    //     $data['users'] = User::all();
    //     return view('admin.user.index', $data);
    // }

    // public function editView(string $id){
    //     try{
    //         $id = Crypt::decrypt($id);
    //     } catch (DecryptException $e){
    //         return redirect()->back()->with('danger', $e->getMessage());
    //     }
    //     $data['users'] = User::find($id);
    //     return view('admin.user.edit', $data);
    // }

    // public function updateView(Request $request, string $id)
    // {
    //     try{
    //         $id = Crypt::decrypt($id);
    //     } catch (DecryptException $e) {
    //         return redirect()->back()->with('danger', $e->getMessage());
    //     }

    //     $user = User::find($id);

    //     $validasi = $request->validate([
    //         'name' => 'required|string|max:225',
    //         'username' => 'required|string|max:225|unique:users',
    //         'password' => 'required|string',
    //         'role' => 'required|in:admin,operator',
    //     ]);

    //     if ($request->filled('password')) {
    //         $validasi['password'] = bcrypt($validasi['password']);
    //     } else {
    //         $validasi['password'] = $user->password;
    //     }

    //    $request->update([
    //     'name' => $request->name,
    //     'username' => $request->username,
    //     'password' => $request->password,
    //     'role' => $request->role,
    //    ]);

    //    return redirect()->route('admin.user.index')->with('success','berhasil megupdate data.');

    // }
}
