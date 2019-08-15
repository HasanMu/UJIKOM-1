<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kompetensikeahlian.store') }}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="nama">Kode Kompetensi</label>
                  <input type="text" name="kompetensi_kode" id="kompetensi_kode" class="form-control" placeholder="Kompetensi Kode" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Bidang Studi</label>
                    <select name="bidang_id" class="form-control">
                        @foreach($bidangstudi as $data)
                            <option value="{{ $data->id }}">{{ $data->bidang_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kompetensi</label>
                    <input type="text" name="kompetensi_nama" id="kompetensi_nama" class="form-control" placeholder="Nama Kompetensi" required>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>