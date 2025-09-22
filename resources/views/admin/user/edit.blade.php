@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h5 class="fw-bold mb-3">Edit User</h5>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            {{-- Ganti route berikut sesuai dengan route update user Anda --}}
            <form action="{{ route('admin.user.update', Crypt::encrypt($users->id)) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- ID hanya ditampilkan readonly --}}
                    <div class="col-md-6 mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $users->id }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name', $users->name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                               value="{{ old('username', $users->username) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Kosongkan jika tidak diubah">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="admin" {{ old('role', $users->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="operator" {{ old('role', $users->role) == 'operator' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
