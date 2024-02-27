<x-app>
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Form Validation</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Forms</a>
                    <span class="breadcrumb-item active">Form Validation</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <p style="margin-top:5px; color:black">Tambah Data Produk</p>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{url('HalamanProduk')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="">Nama Produk</label>
                                        <input type="text" class="form-control" name="produk" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Kategori</label>
                                        <input type="text" class="form-control" name="kategori" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control" name="harga" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Stok</label>
                                        <input type="text" class="form-control" name="stok" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="status" required="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Foto</label>
                                        <input type="file" class="form-control" name="foto" required="">
                                    </div>

                                </div>
                                <div class="button-group float-lg-right">
                                    <button  class="btn btn-sm btn-success">simpan</button>
                                </div>
                            </form>
                            <a href="" class="btn btn-sm btn-danger float-lg-right mr-2">batal</a>
                        </div>
                    </div>
                <div class="m-t-25" style="max-width: 1000px">

                </div>

            </div>
        </div>
    </div>
</x-app>
