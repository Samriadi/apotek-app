@extends('layouts.app')

@section('title', 'Data-obat')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Obat</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Obat</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary"
                                id="modal-1" data-toggle="modal"
                                data-target="#addModal">+</button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-md table">
                                        <tr>
                                            <td>No</td>
                                            <th>Nama Obat</th>
                                            <th>Stock</th>
                                            <th>Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($data_obat as $p)
                                        <?php $no=1 ?>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->nama_obat }}</td>
                                            <td>{{ $p->stock }}</td>
                                            <td>{{ $p->satuan }}</td>
                                            <td>
                                                <a href="#"
                                                    class="btn btn-warning">Edit</a>
                                                    <a href="#"
                                                    class="btn btn-danger">Hapus</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                       

                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                                href="#"
                                                tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </section>
    <div class="modal fade"
        tabindex="-1"
        role="dialog"
        id="addModal">
        <div class="modal-dialog"
            role="document">
            <form action="{{ '/features-data-obat' }}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Obat</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/store" method="post">
                        <div class="card">
                            <div class="card-body">
                            
                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <input type="text"
                                        class="form-control"
                                        name="nama_obat" 
                                        id="nama_obat"
                                        >
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number"
                                        class="form-control"
                                        name="stock" 
                                        id="stock"
                                        >
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input type="text"
                                        class="form-control"
                                        name="satuan" 
                                        id="satuan"
                                        >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit"
                            class="btn btn-primary" value="Simpan Data">Save changes</button>
                    </div>
                </div>
             </form>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
