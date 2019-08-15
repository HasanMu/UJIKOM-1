<title>Data Kompetensi Keahlian</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.app')
@section('content')
@include('admin.kompetensikeahlian.create')
@include('admin.kompetensikeahlian.edit')
@include('layouts.flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Kompetensi Keahlian</div>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Kompetensi</center></th>
                            <th><center>Nama Bidang Studi</center></th>
                            <th><center>Nama Kompetensi</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($kompetensikeahlian as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->kompetensi_kode }}</center></td>
                            <td><center>{{ $data->bidangstudi->bidang_nama }}</center></td>
                            <td><center>{{ $data->kompetensi_nama }}</center></td>

                            <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" data-id="{{ $data->id }}" 
                                data-kode="{{ $data->kompetensi_kode }}"
                                data-bidang="{{ $data->bidangstudi->bidang_nama }}"
                                data-nama="{{ $data->kompetensi_nama }}">Edit</button>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('bidangstudi.destroy',$data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        Hapus Data
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection