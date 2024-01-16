@extends('layouts.app')

@section('title', 'Edit Return Data')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Return Car Datas</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Return Car Data</h2>



                <div class="card">
                    <form action="{{ route('giveback.store', $cars) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text"
                                    class="form-control @error('merk')
                                is-invalid
                            @enderror"
                                    name="merk" value="{{ $cars->merk }}">
                                @error('merk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>        
                            
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text"
                                    class="form-control @error('model')
                                is-invalid
                            @enderror"
                                    name="model" value="{{ $cars->model }}">
                                @error('model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>  

                            <div class="form-group">
                                <label>Plat Number</label>
                                <input type="text"
                                    class="form-control @error('plat_no')
                                is-invalid
                            @enderror"
                                    name="plat_no" value="{{ $cars->plat_no }}">
                                @error('plat_no')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>  

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number"
                                    class="form-control @error('tarif')
                                is-invalid
                            @enderror"
                                    name="tarif" value="{{ $cars->tarif }}">
                                @error('tarif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
