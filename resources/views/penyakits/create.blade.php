@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-semibold mb-4">Tambah Penyakit</h1>
    <form action="{{ route('penyakits.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Kode</label>
            <input type="text" name="kode" class="border rounded w-full p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Nama Penyakit</label>
            <input type="text" name="nama_penyakit" class="border rounded w-full p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Gejala</label>
            <textarea name="gejala" class="border rounded w-full p-2" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Status</label>
            <select name="status" class="border rounded w-full p-2" required>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection