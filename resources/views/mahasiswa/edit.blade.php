@extends('layout.main')
@section('title', 'Index')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Mahasiswa</h4>
                    <p class="card-description">
                        Formulir tambah mahasiswa

                    </p>
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Foto</th>
                                    <th>Nama Prodi</th>
                                    <th>Nama Fakultas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $item['npm'] }}</td>
                                        <td>{{ $item['nama'] }}</td>
                                        <td>{{ $item['tempat_lahir'] }}</td>
                                        <td>{{ $item['tanggal_lahir'] }}</td>
                                        <td><img src="foto/{{ $item['foto'] }}" class="rounded-circle" width="70px" />
                                        </td>
                                        <td>{{ $item['prodi']['nama'] }}</td>
                                        <td>{{ $item['prodi']['fakultas']['nama'] }}</td>
                                        <td>
                                            <div class='d-flex justify-content-center'>
                                                <a href="{{ route('mahasiswa.edit', $item->id)}}">
                                                    <button class="btn btn-success btn-sm">edit</button>
                                                </a>
                                                <form method="post" action="{{ route('mahasiswa.destroy', $item->id) }}">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
       @if (Session::get('success'))
            toastr.success("{{ Session::get('success')}}")
       @endif
    </script>

@endsection
