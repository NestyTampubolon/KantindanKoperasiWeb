@include('sidebar')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{url('/dashboard')}}>Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href={{url('/daftarmenu')}}>Daftar Menu</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a>Ubah Menu</a>
            </li>
        </ol>
    </nav>
    <!-- Basic Card Example -->
    <div class="card shadow col-xl-10 col-md-6 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Daftar produk</h6>
        </div>
        <div class="card-body">
            <form action="{{route('daftarmenu.update',$menus->id_makanan_minuman)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_makanan_minuman" value="{{$menus->id_makanan_minuman}}">
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$menus->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hargatipea" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{$menus->harga}}">
                        @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hargatipea" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{$menus->kategori}}">
                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hargatipea" class="col-sm-2 col-form-label">Kuantitas</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control  @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$menus->stok}}">
                        @error('stok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hargatipea" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <img src="{{url('gbr_menu/'.$menus->gambar)}}" class="img-preview mb-3 col-sm-5" alt="">
                        <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{url('gbr_menu/'.$menus->gambar)}}" onchange="previewImage()">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row py-xl-5">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@include('footer')