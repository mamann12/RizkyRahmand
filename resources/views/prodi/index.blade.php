@extends ('layout.main')
@section ('title','mahasiswa')

@section ('content')
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prodi Table</h4>
                  <p class="card-description">
                    daftar prodi
                  </p>
                    <a href="{{route('prodi.create')}}"class="btn btn-dark btn-rounded btn-fw">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>Nama Prodi</th>
                            <th>Nama fakultas</th>
                        </tr>
                      </thead>
                    @foreach ($prodi as $item)
                        <tr>
                            <td>{{$item['nama']}}</td>
                            <td>{{$item['fakultas']['name']}}</td>
                        </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection

