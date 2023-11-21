@extends ('layout.main')
@section ('title','fakultas')

@section ('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
                  <div class="row">
                <div class="card-body">
                  <h4 class="card-title">Fakultas Table</h4>
                  <p class="card-description">
                    daftar fakultas di universitas mdp
                  </p>
                  <a href="{{route('fakultas.create')}}"class="btn btn-dark btn-rounded btn-fw">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>Nama fakultas</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach ($fakultas as $item)
                        <tr>
                            <td>{{$item['nama']}}</td>
                            <td>
                              <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                              
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
