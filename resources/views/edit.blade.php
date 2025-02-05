@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row mb-3">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Data Barang</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pt-5 px-5">
                    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row mb-3">
                            <div class="form-group col-lg-6 align-items-center mb-2">
                                <div class="col-lg-12">
                                    <label><h6>Nama Barang <small style="color: red">*</small></h6></label>
                                    <fieldset class="form-group">
                                        <input type="text" name="nama_barang" id="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ $product->nama_barang }}" placeholder="Nama Barang" required>
                                        @error('nama_barang')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-6 align-items-center mb-2">
                                <div class="col-lg-12">
                                    <label><h6>Stok Barang <small style="color: red">*</small></h6></label>
                                    <fieldset class="form-group">
                                        <input type="number" name="stok_barang" id="stok_barang" class="form-control @error('stok_barang') is-invalid @enderror" value="{{ $product->stok_barang }}" placeholder="contoh: 50000" required>
                                        @error('stok_barang')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-lg-6 align-items-center mb-2">
                                <div class="col-lg-12">
                                    <label><h6>Jenis Barang <small style="color: red">*</small></h6></label>
                                    <fieldset class="form-group">
                                        <select name="jenis_barang" class="form-select form-control @error('jenis_barang') is-invalid @enderror" data-width="100%" required>
                                            <option value="alat-tulis-kantor" {{ $product->jenis_barang == "alat-tulis-kantor" ? 'selected' : '' }}>Alat Tulis Kantor</option>
                                            <option value="printer" {{ $product->jenis_barang == "printer" ? 'selected' : '' }}>Printer</option>
                                            <option value="alat-lab" {{ $product->jenis_barang == "alat-lab" ? 'selected' : '' }}>Alat Laboratorium</option>
                                        </select>
                                        @error('jenis_barang')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-6 text-center">
                                <button type="submit" class="btn btn-primary col-lg-6"> Submit                                
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection