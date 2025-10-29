@extends('admin.template')
@section('title', 'Tambah User')
@section('content')

<div class="py-4">
    <h1 class="h4">Tambah User</h1>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<form action="{{ route('user.store') }}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
