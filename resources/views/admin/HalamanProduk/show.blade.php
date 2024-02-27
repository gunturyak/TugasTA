<x-app>
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Show Data Produk</h4>
                                    <a href="{{ url('DataPegawai') }}" class="btn btn-sm btn-default mb-2"
                                        style="border: 1px solid #696CFF; color:#696CFF"><i
                                            class="bx bx-chevron-left "></i>Kembali</a>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <dl class="row">
                                                <dt class="col-md-4">Produk</dt>
                                                <dd class="col-md-8">: {{ $halamanproduk->produk }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Kategori</dt>
                                                <dd class="col-md-8">: {{ $halamanproduk->kategori }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Harga</dt>
                                                <dd class="col-md-8">: {{ $halamanproduk->harga }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Stok</dt>
                                                <dd class="col-md-8">: {{ $halamanproduk->stok }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Status</dt>
                                                <dd class="col-md-8">: {{ $halamanproduk->status }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Status</dt>
                                                <dd class="col-md-8">: {{ $pegawai->status }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Pendidikan</dt>
                                                <dd class="col-md-8">: {{ $pegawai->pendidikan}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Sekolah/Universitas</dt>
                                                <dd class="col-md-8">: {{ $pegawai->sekolah_universitas }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Alamat KTP</dt>
                                                <dd class="col-md-8">: {{ $pegawai->alamat_ktp }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Alamat Domisili</dt>
                                                <dd class="col-md-8">: {{ $pegawai->alamat_domisil }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Nomor HP</dt>
                                                <dd class="col-md-8">: {{ $pegawai->no_hp }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Email</dt>
                                                <dd class="col-md-8">: {{ $pegawai->email}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">FTK/NON-FTK</dt>
                                                <dd class="col-md-8">: {{ $pegawai->ftk_nonftk}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jabatan</dt>
                                                <dd class="col-md-8">: {{ $pegawai->jabatan}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Klasifikasi Bidang</dt>
                                                <dd class="col-md-8">: {{ $pegawai->klasifikasi_bidang }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">foto</dt>
                                                <dd class="col-md-8">: {{ $pegawai->foto }}</dd>
                                            </dl>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
</x-app>