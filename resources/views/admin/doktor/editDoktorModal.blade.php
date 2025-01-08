<div class="modal fade" id="editDoktorModal" tabindex="-1" aria-labelledby="editDoktorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container">
                <span class="close-btn" data-bs-dismiss="modal">&times;</span>
                <h2>EDIT DATA DOKTER</h2>
                <form action="{{ route('updateDoktor') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit-id" name="id">
                    <input type="text" id="edit-nama" name="dokter_nama" placeholder="Nama Lengkap" required>
                    <input type="number" id="edit-telepon" name="telepon" placeholder="Nomor Telepon" required>
                    <input type="text" id="edit-lahirdokter" name="dokter_Ttl" placeholder="Tempat, Tanggal Lahir" required>
                    <select class="form-select" id="edit-kelamin" name="dokter_JK" required>
                        <option disabled selected>Jenis Kelamin</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <input type="number" id="dokter_NIK" name="dokter_NIK" placeholder="No. KTA/SIP/NIP" required>
                    <input type="text" id="edit-alamat" name="alamat" placeholder="Alamat" required>
                    <input type="email" id="edit-email" name="email" placeholder="Email" required>
                    <button type="submit" class="submit-btn">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
