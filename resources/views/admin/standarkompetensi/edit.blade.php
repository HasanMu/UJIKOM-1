<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('standarkompetensi.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id">
                 <div class="form-group">
                  <label for="nama">Kode Standar Kompetensi</label>
                  <input type="text" name="SK_kode" id="SK_kode" class="form-control" placeholder="Kode Standar Kompetensi" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Kompetensi Keahlian</label>
                    <select name="kompetensi_id" class="form-control">
                        @foreach($kompetensikeahlian as $data)
                            <option value="{{ $data->id }}">{{ $data->kompetensi_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Standar Kompetensi</label>
                    <input type="text" name="SK_nama" id="SK_nama" class="form-control" placeholder="Nama Standar Kompetensi" required>
                </div>
                <div class="form-group">
                    <label for="nama">Kelas Standar Kompetensi</label>
                    <input type="text" name="SK_kelas" id="SK_kelas" class="form-control" placeholder="Kelas Standar Kompetensi" required>
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