@extends('layout.main')
@section('title', 'Fakultas')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fakultas</h4>
                    <p class="card-description">
                        Daftar Fakultas di Universitas MDP
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover table-stripped"></table>
                        <thead>
                            <tr>
                                <th>Nama Fakultas</th>
                            </tr>
                        </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
