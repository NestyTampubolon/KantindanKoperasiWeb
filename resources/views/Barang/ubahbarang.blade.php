@include('sidebar')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{url('/dashboard')}}>Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href={{url('/daftarbarangsnack')}}>Daftar Barang dan Snack</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a>Ubah Barang dan Snack</a>
            </li>
        </ol>
    </nav>
    <!-- Basic Card Example -->
    <div class="card shadow col-xl-10 col-md-6 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Daftar Barang dan Snack</h6>
        </div>
        <div class="card-body">
            <form action="{{route('daftarbarangsnack.update',$barangs->id_barang_snack)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_barang_snack" value="{{$barangs->id_barang_snack}}">
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$barangs->nama}}">
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
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{$barangs->harga}}">
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
                    <select class="form-control  @error('kategori') is-invalid @enderror" id="exampleFormControlSelect1" id="kategori" name="kategori" autofocus value="{{ old('kategori') }}">
                            <option value="Kerupuk"{{$barangs->kategori == "Kerupuk" ? 'selected' : ''}}>Kerupuk</option>
                            <option value="Roti"{{$barangs->kategori == "Roti" ? 'selected' : ''}}>Roti</option>
                            <option value="Pizza"{{$barangs->kategori == "Pizza" ? 'selected' : ''}}>Pizza</option>
                            <option value="Masker"{{$barangs->kategori == "Masker" ? 'selected' : ''}}>Masker</option>
                            <option value="Snack"{{$barangs->kategori == "Snack" ? 'selected' : ''}}>Snack</option>
                            <option value="Minuman"{{$barangs->kategori == "Minuman" ? 'selected' : ''}}>Minuman</option>
                            <option value="Sikat Gigi"{{$barangs->kategori == "Sikat Gigi" ? 'selected' : ''}}>Sikat Gigi</option>
                            <option value="Deodorant"{{$barangs->kategori == "Deodorant" ? 'selected' : ''}}>Deodorant</option>
                            <option value="Vitamin"{{$barangs->kategori == "Vitamin" ? 'selected' : ''}}>Vitamin</option>
                            <option value="Pisau Cukur"{{$barangs->kategori == "Pisau Cukur" ? 'selected' : ''}}>Pisau Cukur</option>
                            <option value="Deterjen"{{$barangs->kategori == "Deterjen" ? 'selected' : ''}}>Deterjen</option>
                            <option value="Shampoo"{{$barangs->kategori == "Shampoo" ? 'selected' : ''}}>Shampoo</option>
                            <option value="Sabun Colek"{{$barangs->kategori == "Sabun Colek" ? 'selected' : ''}}>Sabun Colek</option>
                            <option value="Plester"{{$barangs->kategori == "Plester" ? 'selected' : ''}}>Plester</option>
                            <option value="Box"{{$barangs->kategori == "Box" ? 'selected' : ''}}>Box</option>
                            <option value="Body Lotion"{{$barangs->kategori == "Body Lotion" ? 'selected' : ''}}>Box Lotion</option>
                            <option value="Obat"{{$barangs->kategori == "Obat" ? 'selected' : ''}}>Obat</option>
                            <option value="Minuman Saset"{{$barangs->kategori == "Minuman Saset" ? 'selected' : ''}}>Minuman Saset</option>
                        </select>
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
                        <input type="number" class="form-control  @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$barangs->stok}}">
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
                        <img src="{{url('gbr_menu/'.$barangs->gambar)}}" class="img-preview mb-3 col-sm-5" alt="">
                        <input type="file" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{url('gbr_menu/'.$barangs->gambar)}}" onchange="previewImage()">
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
                    <span aria-hidden="true">??</span>
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