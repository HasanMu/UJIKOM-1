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
                <form action="{{ route('bidangstudi.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="nama">Kode Bidang Studi</label>
                  <input type="text" name="bidang_kode" id="bidang_kode" class="form-control" placeholder="Kode Bidang Studi">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Bidang Studi</label>
                    <input type="text" name="bidang_nama" id="bidang_nama" class="form-control" placeholder="Nama Bidang Studi">
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