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
                <form action="{{ route('nilai.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <select name="siswa_id" class="form-control">
                        @foreach($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->siswa_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <select name="guru_id" class="form-control">
                        @foreach($guru as $data)
                            <option value="{{ $data->id }}">{{ $data->guru_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Standar Kompetensi</label>
                    <select name="SK_id" class="form-control">
                        @foreach($standarkompetensi as $data)
                            <option value="{{ $data->id }}">{{ $data->SK_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nilai Angka</label>
                    <input type="text" name="nilai_angka" id="nilai_angka" class="form-control" placeholder="Nilai Angka" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nilai Huruf</label>
                    <input type="text" name="nilai_huruf" id="nilai_huruf" class="form-control" placeholder="Nilai Huruf" required>
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