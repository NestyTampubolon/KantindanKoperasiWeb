@include('sidebar')
<div class="container-fluid">
    <!-- <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href=>Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href=>Daftar Pulsa</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a>Update Pulsa</a>
            </li>
        </ol>
    </nav> -->
    <!-- Basic Card Example -->
    <div class="card shadow col-xl-10 col-md-6 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Daftar Pulsa</h6>
        </div>
        <div class="card-body">
            <form action="{{route('daftarpulsa.update',$pulsas->id_pulsa)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nominal Pulsa" autofocus value="{{ old('nama', $pulsas->nama) }}">
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
                        <input type="text" class="form-control form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="cth: 150000" autofocus value="{{ old('harga', $pulsas->harga) }}">
                        @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Update</button>
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