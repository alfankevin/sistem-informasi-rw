@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kependudukan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('penduduk.index') }}">Penduduk</a></div>
                <div class="breadcrumb-item"><a href="#">Management</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Manajemen Kependudukan</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validasi Tambah Penduduk</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('penduduk.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="no_kk">No. KK</label>
                            <input id="no_kk" name="no_kk" type="text" spellcheck="false" autocomplete="off"
                            class="form-control @error('no_kk') is-invalid @enderror" value="{{ old('no_kk') }}">
                            @error('no_kk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input id="nik" name="nik" type="text" spellcheck="false" autocomplete="off"
                            class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                            @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama" value="{{ old('nama') }} " spellcheck="false" autocomplete="off">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input id="tempat_lahir" name="tempat_lahir" type="text" spellcheck="false" autocomplete="off"
                                class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input id="tanggal_lahir" name="tanggal_lahir" type="date" spellcheck="false" autocomplete="off"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror" value={{ old('tanggal_lahir') }}>
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                <option value=""></option>
                                <option value="L" @if (old('jenis_kelamin') == "L") {{ 'selected' }} @endif>Laki-laki</option>
                                <option value="P" @if (old('jenis_kelamin') == "P") {{ 'selected' }} @endif>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <select class="form-control select2 @error('golongan_darah') is-invalid @enderror" name="golongan_darah">
                                <option value=""></option>
                                <option value="-" @if (old('golongan_darah') == "-") {{ 'selected' }} @endif>-</option>
                                <option value="A" @if (old('golongan_darah') == "A") {{ 'selected' }} @endif>A</option>
                                <option value="B" @if (old('golongan_darah') == "B") {{ 'selected' }} @endif>B</option>
                                <option value="AB" @if (old('golongan_darah') == "AB") {{ 'selected' }} @endif>AB</option>
                                <option value="O" @if (old('golongan_darah') == "O") {{ 'selected' }} @endif>O</option>
                            </select>
                            @error('golongan_darah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control select2 @error('agama') is-invalid @enderror" name="agama">
                                <option value=""></option>
                                <option value="Islam" @if (old('agama') == "Islam") {{ 'selected' }} @endif>Islam</option>
                                <option value="Katolik" @if (old('agama') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
                                <option value="Protestan" @if (old('agama') == "Protestan") {{ 'selected' }} @endif>Protestan</option>
                                <option value="Hindu" @if (old('agama') == "Hindu") {{ 'selected' }} @endif>Hindu</option>
                                <option value="Budha" @if (old('agama') == "Budha") {{ 'selected' }} @endif>Budha</option>
                                <option value="Konghucu" @if (old('agama') == "Konghucu") {{ 'selected' }} @endif>Konghucu</option>
                            </select>
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="form-control select2 @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan">
                                <option value=""></option>
                                <option value="Kawin" @if (old('status_perkawinan') == "Kawin") {{ 'selected' }} @endif>Kawin</option>
                                <option value="Belum Kawin" @if (old('status_perkawinan') == "Belum Kawin") {{ 'selected' }} @endif>Belum Kawin</option>
                                <option value="Kawin Tercatat" @if (old('status_perkawinan') == "Kawin Tercatat") {{ 'selected' }} @endif>Kawin Tercatat</option>
                                <option value="Kawin Belum Tercatat" @if (old('status_perkawinan') == "Kawin Belum Tercatat") {{ 'selected' }} @endif>Kawin Belum Tercatat</option>
                                <option value="Cerai Hidup Tercatat" @if (old('status_perkawinan') == "Cerai Hidup Tercatat") {{ 'selected' }} @endif>Cerai Hidup Tercatat</option>
                                <option value="Cerai Mati" @if (old('status_perkawinan') == "Cerai Mati") {{ 'selected' }} @endif>Cerai Mati</option>
                            </select>
                            @error('status_perkawinan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status Hubungan Dalam Keluarga</label>
                            <select class="form-control select2 @error('status_keluarga') is-invalid @enderror" name="status_keluarga">
                                <option value=""></option>
                                <option value="0" @if (old('status_keluarga') == "0") {{ 'selected' }} @endif>-</option>
                                <option value="1" @if (old('status_keluarga') == "1") {{ 'selected' }} @endif>Kepala Keluarga</option>
                            </select>
                            @error('status_keluarga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input id="pekerjaan" name="pekerjaan" type="text" spellcheck="false" autocomplete="off"
                                class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan') }}">
                            @error('pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input id="alamat" name="alamat" type="text" spellcheck="false" autocomplete="off"
                                class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>RT</label>
                            <select class="form-control select2 @error('rt') is-invalid @enderror" name="rt">
                                <option value=""></option>
                                <option value="1" @if (old('rt') == "1") {{ 'selected' }} @endif>001</option>
                                <option value="2" @if (old('rt') == "2") {{ 'selected' }} @endif>002</option>
                                <option value="3" @if (old('rt') == "3") {{ 'selected' }} @endif>003</option>
                                <option value="4" @if (old('rt') == "4") {{ 'selected' }} @endif>004</option>
                                <option value="5" @if (old('rt') == "5") {{ 'selected' }} @endif>005</option>
                            </select>
                            @error('rt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control select2 @error('keterangan') is-invalid @enderror" name="keterangan">
                                <option value=""></option>
                                <option value="Hidup" @if (old('keterangan') == "Hidup") {{ 'selected' }} @endif>Hidup</option>
                                <option value="Meninggal" @if (old('keterangan') == "Meniggal") {{ 'selected' }} @endif>Meninggal</option>
                            </select>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group" style="display: none">
                            <label>Bantuan Sosial</label>
                            <select class="form-control select2" name="id_sosial">
                                <option value="1"></option>
                            </select>
                            @error('id_sosial')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('penduduk.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('customScript')
    <script src="/assets/js/select2.min.js"></script>
@endpush

@push('customStyle')
    <link rel="stylesheet" href="/assets/css/select2.min.css">
@endpush