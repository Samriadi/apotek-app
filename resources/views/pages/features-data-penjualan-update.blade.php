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
                    <div class="breadcrumb-item">Edit Data Penjualan</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="modal-title">Edit Data</h5>
                            </div>
                            <div class="card-body p-0">
                                @foreach($data_penjualan as $p)
                                <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <input type="hidden" name="id_penjualan" value="{{ $p->id_penjualan }}"> <br/>
                                                    <div class="form-group">
                                                        <label>Tanggal Penjualan</label>
                                                        <input type="date"
                                                        class="form-control"
                                                        name="tanggal_penjualan" 
                                                        id="tanggal_penjualan"
                                                        value="{{ $p->tanggal_penjualan }}"
                                                        >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Obat</label>
                                                         <select class="custom-select" 
                                                        name="nama_obat"
                                                        id="nama_obat"
                                                        >
                                                            @foreach($data_obat as $q)
                                                            <option  value="{{ $p->nama_obat }}"><?php echo ($q->nama_obat) ?></option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah</label>
                                                        <input type="number"
                                                            class="form-control"
                                                            name="jumlah_penjualan" 
                                                            id="jumlah_penjualan"
                                                            value="{{ $p->jumlah_penjualan }}"
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
                                 @endforeach
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
