@extends('layouts.base')
@section('konten')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create User</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="/user/tambah/simpan" method="post" class="form form-vertical"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Nama</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="name"
                                        placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">NIP</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="nip"
                                        placeholder="Masukan NIP">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Kode</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="kode"
                                        placeholder="Masukan Kode">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Username</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="username"
                                        placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">email</label>
                                    <input type="email" id="first-name-vertical" class="form-control" name="email"
                                        placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">password</label>
                                    <input type="password" id="first-name-vertical" class="form-control" name="password"
                                        placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Jabatan</label>
                                    <select class="form-select form-select" name="jabatan"
                                        aria-label="Small select example">
                                        <option value="Kepala Bidang">Kepala Bidang</option>
                                        <option value="Staff">Staff</option>
                                        <option value="HRD">HRD</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Roles</label>
                                    <select class="form-select form-select" name="role"
                                        aria-label="Small select example">
                                        <option value="Admin">Admin</option>
                                        <option value="user">Staff</option>
                                    </select>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Masukan Foto</label>
                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="col-12 d-flex justify-content-end" style="margin-top: 20px">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection