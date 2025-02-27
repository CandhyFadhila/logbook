@extends('layouts.base')
@section('headunit', 'active')
@section('konten')
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Unit
                </h5>
                <div class="card-options">
                    <a href="/laporunit/tambah" id="Detail" class="btn btn-primary me-1 mb-1">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>kode</th>
                                <th>unit</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($unit as $a)

                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$a->kode}}</td>
                                <td>{{$a->unit}}</td>
                                <td>
                                    <a href="/laporunit/edit/{{$a->id}}" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a href="#" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus?')) { document.getElementById('delete-form-{{ $a->id }}').submit(); }" type="button" class="btn btn-danger">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $a->id }}" action="/laporunit/delete/{{ $a->id }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection 