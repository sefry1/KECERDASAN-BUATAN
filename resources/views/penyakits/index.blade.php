@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Data Penyakit</h1>
    <div class="header">
        <div class="search-bar">
            <select>
                <option>10</option>
                <option>25</option>
                <option>50</option>
            </select>
            <input type="text" placeholder="Search...">
        </div>
        <a href="{{ route('penyakits.create') }}" class="add-btn">+ Tambah Penyakit</a>
    </div>
    <table>
        <thead>
            <tr>
                <th class="checkbox-cell"><input type="checkbox"></th>
                <th>#</th>
                <th>Kode</th>
                <th>Nama Penyakit</th>
                <th>Gejala</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penyakits as $index => $penyakit)
            <tr>
                <td class="checkbox-cell"><input type="checkbox"></td>
                <td>{{ $index + 1 }}</td>
                <td>{{ $penyakit->kode }}</td>
                <td>{{ $penyakit->nama_penyakit }}</td>
                <td>{{ $penyakit->gejala }}</td>
                <td>
                    <span class="status {{ strtolower($penyakit->status) }}">{{ $penyakit->status }}</span>
                </td>
                <td>
                    <a href="{{ route('penyakits.edit', $penyakit) }}" class="action-btn update">Update</a>
                    <form action="{{ route('penyakits.destroy', $penyakit) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection