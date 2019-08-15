<title>Data Guru</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.app')
@section('content')
@include('admin.guru.create')
@include('admin.guru.edit')
@include('layouts.flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Guru</div>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Guru</center></th>
                            <th><center>Nama Kompetensi Keahlian</center></th>
                            <th><center>NIP Guru</center></th>
                            <th><center>Nama Guru</center></th>
                            <th><center>Alamat Guru</center></th>
                            <th><center>Telepon Guru</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($guru as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->guru_kode }}</center></td>
                            <td><center>{{ $data->kompetensikeahlian->kompetensi_nama }}</center></td>
                            <td><center>{{ $data->guru_NIP }}</center></td>
                            <td><center>{{ $data->guru_nama }}</center></td>
                            <td><center>{{ $data->guru_alamat }}</center></td>
                            <td><center>{{ $data->guru_telpon }}</center></td>

                            <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" 
                                data-id="{{ $data->id }}" 
                                data-kode="{{ $data->guru_kode }}"
                                data-komp="{{ $data->kompetensikeahlian->kompetensi_nama }}"
                                data-nip="{{ $data->guru_NIP }}"
                                data-nama="{{ $data->guru_nama }}"
                                data-alamat="{{ $data->guru_alamat }}"
                                data-telpon="{{ $data->guru_telpon }}">Edit</button>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('guru.destroy',$data->id) }}" method="post">
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
        var nip = button.data('nip')
        var nama = button.data('nama')
        var alamat = button.data('alamat')
        var telpon = button.data('telpon')
        var modal = $(this)
    
        modal.find('input[name="id"]').val(id)
        modal.find('input[name="guru_kode"]').val(kode)
        modal.find('input[name="kompetensi_id"]').val(komp)
        modal.find('input[name="guru_NIP"]').val(nip)
        modal.find('input[name="guru_nama"]').val(nama)
        modal.find('input[name="guru_alamat"]').val(alamat)
        modal.find('input[name="guru_telpon"]').val(telpon)
    })  
        </script>
@endsection