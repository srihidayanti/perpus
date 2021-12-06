@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>0</div>
                        <div></div>
                    </div>
                    <div>
                        <div>
                            <label for="" class="text-secondary">
                                jumlah buku yang di pinjam
                            </label>
                        </div>
                        <div>
                            <a href class="btn btn-primary">
                                 lihat daftar pinjam
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="card border-0 shadow=sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>5</div>
                            <div></div>
                        </div>
                        <div>
                            <div>
                                <label for="" class="text-secondary">
                                    daftar buku
                                </label>
                            </div>
                        <div>
                            <a href class="btn btn-primary">
                                cek daftar buku
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
