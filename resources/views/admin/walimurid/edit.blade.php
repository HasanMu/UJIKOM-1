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
                <form action="{{ route('walimurid.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <select name="siswa_id" class="form-control">
                        @foreach($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->siswa_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Ayah/Wali</label>
                    <input type="text" name="wali_nama_ayah" id="wali_nama_ayah" class="form-control" placeholder="Nama Ayah/Wali" required>
                </div>
                <div class="form-group">
                    <label for="nama">Pekerjaan Ayah/Wali</label>
                    <input type="text" name="wali_pekerjaan_ayah" id="wali_pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah/Wali" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Ibu/Wali</label>
                    <input type="text" name="wali_nama_ibu" id="wali_nama_ibu" class="form-control" placeholder="Nama Ibu/Wali" required>
                </div>
                <div class="form-group">
                    <label for="nama">Pekerjaan Ibu/Wali</label>
                    <input type="text" name="wali_pekerjaan_ibu" id="wali_pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu/Wali" required>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat Wali</label>
                    <textarea name="wali_alamat" id="wali_alamat" cols="30" rows="10" class="form-control" placeholder="Alamat Wali" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nama">Telepon Wali</label>
                    <input type="text" name="wali_telepon" id="wali_telepon" class="form-control" placeholder="Telepon Wali" required>
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