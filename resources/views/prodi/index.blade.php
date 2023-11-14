@extends('layout.main')
@section('title','Prodi')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Program Studi</h4>
                    <p class="card-description">
                        Ini Adalah Daftar Program Studi Universitas Multi Data Palembang

                        <h1>Halaman Program Studi</h1>
    <table class="table table-striped">
        <tr>
            <th>Nama Prodi</th>
            <th>Nama Fakultas</th>
        </tr>
        @foreach ($prodi as $item )
        <tr>
            <td>{{ $item['nama']}}</td>
            <td>{{ $item['fakultas']['nama']}}</td>
        </tr>
        @endforeach
    </table>
@endsection
