@extends('admin.template')
@section('title', 'Edit User')
@section('content')

<div class="py-4">
    <h1 class="h4">Edit User</h1>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<form action="{{ route('user.update', $user->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password (biarkan kosong jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
