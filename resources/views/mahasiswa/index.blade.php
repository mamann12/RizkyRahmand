@extends('layout.main')
@section('title', 'mahasiswa')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mahasiswa</h4>
                    <p class="card-description">
                        Daftar Mahasiswa di Universitas MDP

        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Foto</th>
            <th>Nama Prodi</th>
            <th>Nama Fakultas</th>
        </tr>
        @foreach ($mahasiswa as $item)
        <tr>
        <td>{{$item['npm']}}</td>
        <td>{{$item['nama']}}</td>
        <td>{{$item['tempat_lahir']}}</td>
        <td>{{$item['tanggal_lahir']}}</td>
        <td>{{$item['foto']}}</td>
        <td>{{$item['prodi']['nama']}}</td>
        <td>{{$item['prodi']['fakultas']['nama']}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
