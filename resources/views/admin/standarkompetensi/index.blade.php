<title>Data Standar Kompetensi</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.app')
@section('content')
@include('admin.standarkompetensi.create')
@include('admin.standarkompetensi.edit')
@include('layouts.flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Standar Kompetensi</div>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Standar Kompetensi</center></th>
                            <th><center>Nama Kompetensi Keahlian</center></th>
                            <th><center>Nama Standar Kompetensi</center></th>
                            <th><center>Kelas Standar Kompetensi</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($standarkompetensi as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->SK_kode }}</center></td>
                            <td><center>{{ $data->kompetensikeahlian->kompetensi_nama }}</center></td>
                            <td><center>{{ $data->SK_nama }}</center></td>
                            <td><center>{{ $data->SK_kelas }}</center></td>
                            <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" 
                                data-id="{{ $data->id }}" 
                                data-kode="{{ $data->SK_kode }}"
                                data-komp="{{ $data->kompetensikeahlian->kompetensi_nama }}"
                                data-nama="{{ $data->SK_nama }}"
                                data-kelas="{{ $data->SK_kelas }}">Edit</button>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('standarkompetensi.destroy',$data->id) }}" method="post">
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
    <script>
        $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var kode = button.data('kode')
        var komp = button.data('komp')
        var nama = button.data('nama')
        var kelas = button.data('kelas')
        var modal = $(this)
    
        modal.find('input[name="id"]').val(id)
        modal.find('input[name="SK_kode"]').val(kode)
        modal.find('input[name="kompetensi_id"]').val(komp)
        modal.find('input[name="SK_nama"]').val(nama)
        modal.find('input[name="SK_kelas"]').val(kelas)
    })  
        </script>
@endsection