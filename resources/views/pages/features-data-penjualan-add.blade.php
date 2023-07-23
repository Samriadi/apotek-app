@extends('layouts.app')

@section('title', 'Data-Penjualan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Penjualan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Tambah data penjualan</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="modal-title">Tambah</h5>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="section-title mt-0">Tanggal Penjualan</div>
                                                    <div class="form-group">
                                                        <input type="date"
                                                            class="form-control"
                                                            name="tanggal_penjualan" 
                                                            id="tanggal_penjualan"
                                                            >
                                                    </div>
                                                    <div class="section-title mt-0">Nama Obat</div>
                                                    <div class="form-group">
                                                        <label>Choose One</label>
                                                        <select class="custom-select" 
                                                        name="nama_obat"
                                                        id="nama_obat"
                                                        >
                                                            @foreach($data_obat as $p)
                                                            <option  value="{{ $p->nama_obat }}"><?php echo ($p->nama_obat) ?></option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="section-title mt-0">Jumlah</div>
                                                    <div class="form-group">
                                                        <input type="number"
                                                            class="form-control"
                                                            name="jumlah_penjualan" 
                                                            id="jumlah_penjualan"
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
                </div>
             
            </div>
        </section>
  
   
    
    </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
