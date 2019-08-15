<title>Data Bidang Studi</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.app')
@section('content')
@include('admin.bidangstudi.create')
@include('admin.bidangstudi.edit')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Bidang Studi</div>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Bidang Studi</center></th>
                            <th><center>Nama Bidang Studi</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($bidangstudi as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->bidang_kode }}</center></td>
                            <td><center>{{ $data->bidang_nama }}</center></td>

                            <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" data-id="{{ $data->id }}" data-kode="{{ $data->bidang_kode }}"  data-nama="{{ $data->bidang_nama }}">Edit</button>
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
    <script>
        $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var kode = button.data('kode')
        var nama = button.data('nama')
        var modal = $(this)
    
        modal.find('input[name="id"]').val(id)
        modal.find('input[name="bidang_kode"]').val(kode)
        modal.find('input[name="bidang_nama"]').val(nama)
    })  
        </script>
  
@endsection
