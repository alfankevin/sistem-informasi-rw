@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Agenda</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validasi Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('agenda.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul_agenda">Judul Agenda</label>
                            <input id="judul_agenda" name="judul_agenda" type="text"
                            class="form-control @error('judul_agenda') is-invalid @enderror" value="{{ old('judul_agenda') }}">
                            @error('judul_agenda')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_agenda">Tanggal Agenda</label>
                            <input id="tanggal_agenda" name="tanggal_agenda" type="date"
                            class="form-control @error('tanggal_agenda') is-invalid @enderror" value="{{ old('tanggal_agenda') }}">
                            @error('tanggal_agenda')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_agenda">Deskripsi Agenda</label>
                            <input type="text" class="form-control @error('deskripsi_agenda') is-invalid @enderror" id="deskripsi_agenda"
                                name="deskripsi_agenda" value="{{ old('deskripsi_agenda') }}">
                            @error('deskripsi_agenda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar_agenda">Gambar Agenda</label>
                            <input type="file" class="form-control @error('gambar_agenda') is-invalid @enderror" id="gambar_agenda"
                                name="gambar_agenda" value="{{ old('gambar_agenda') }}">
                            @error('gambar_agenda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('agenda.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
