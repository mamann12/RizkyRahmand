@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mahasiswa</h4>
                    <p class="card-description">
                        Ini Adalah Daftar Fakultas Universitas Multi Data Palembang

                    </p>
                    <div class="card-body">
                        <h4 class="card-title">Default form</h4>
                        <p class="card-description">
                            Formulit Tambah Mahasiswa
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('mahasiswa.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nomor Pokok Mahasiswa</label>
                                <input type="text" class="form-control" name="npm" placeholder="Nomor Pokok Mahasiswa">
                                @error('npm')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Tempat Lahir Mahasiswa</label>
                                <input type="text" class="form-control" name="Tempat Lahir" placeholder="Tempat Lahir Mahasiswa">
                                @error('Tempat Lahir')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama" placeholder="Name Mahasiswa">
                                @error('nama')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Tanggal Lahir Mahasiswa</label>
                                <input type="text" class="form-control" name="Tanggal Lahir" placeholder="Tanggal Lahir Mahasiswa">
                                @error('Tanggal Lahir')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Foto Mahasiswa</label>
                                <input type="text" class="form-control" name="Foto" placeholder="Foto Mahasiswa">
                                @error('Foto')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('fakultas') }}" class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
