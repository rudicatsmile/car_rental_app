@extends('layouts.app')

@section('title', 'Rent Car Create')

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
                    <div class="breadcrumb-item">Rent Car  Data</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Rent Car  Data</h2>



                <div class="card">
                    <form action="{{ route('rent.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Date Start</label>
                                <input type="date"
                                    class="form-control @error('date_start')
                                is-invalid
                            @enderror"
                                    name="date_start">
                                @error('date_start')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Date End</label>
                                <input type="date"
                                    class="form-control @error('date_end')
                                is-invalid
                            @enderror"
                                    name="date_end">
                                @error('date_end')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Car</label>
                                <select class="form-control selectric @error('car_data_id') is-invalid @enderror"
                                    name="car_data_id">
                                    <option value="">-- Select Car --</option>
                                    @foreach ($carDatas as $carData)
                                        <option value="{{ $carData->id }}">
                                            {{ $carData->model }} ({{ $carData->plat_no }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">User</label>
                                <select class="form-control selectric @error('user_id') is-invalid @enderror"
                                    name="user_id">
                                    <option value="">-- Select User --</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}</option>
                                    @endforeach
                                </select>
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
