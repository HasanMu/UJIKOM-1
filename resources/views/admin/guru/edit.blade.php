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
                <form action="{{ route('guru.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                  <label for="nama">Kode Guru</label>
                  <input type="text" name="guru_kode" id="guru_kode" class="form-control" placeholder="Kode Guru" required>
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
                    <label for="nama">NIP Guru</label>
                    <input type="text" name="guru_NIP" id="guru_NIP" class="form-control" placeholder="NIP Guru" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Guru</label>
                    <input type="text" name="guru_nama" id="guru_nama" class="form-control" placeholder="Nama Guru" required>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat Guru</label>
                    <textarea name="guru_alamat" id="guru_alamat" cols="30" rows="10" class="form-control" placeholder="Alamat Guru" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nama">Telepon Guru</label>
                    <input type="text" name="guru_telpon" id="guru_telpon" class="form-control" placeholder="Telepon Guru" required>
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