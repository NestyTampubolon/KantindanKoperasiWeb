@include('sidebar')
<!-- Begin Page Content -->
<div class="container-fluid">

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Daftar Pulsa </h1>
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href={{url('/')}}>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a>Daftar Pulsa</a>
                    </li>
                </ol>
            </nav>
            <div class=" py-3">
                <div><button class="btn btn-success btn-icon-split" style="text-align: right;" data-toggle="modal" data-target="#ModalTambah">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Tabel Pulsa
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr><?php $nomor = 1; ?>
                            </thead>
                            <tbody>
                                @foreach($pulsas as $pulsa)
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <form action="{{route('daftarpulsa.update',$pulsa->id_pulsa)}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <td><input type="number" class="form-control form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$pulsa->nama}}" autofocus value="{{ old('nama') }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                        <td><input type="text" class="form-control form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="@currency($pulsa->harga)" autofocus value="{{ old('harga') }}">
                                            @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-icon-split" type="submit">
                                                <span class=" icon text-white-50">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                            </button>
                                            <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#exampleModal{{$pulsa->id_pulsa}}">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </form>
                                </tr>

                                <div class="modal fade" id="exampleModal{{$pulsa->id_pulsa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin menghapusnya?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="daftarpulsa/delete/{{$pulsa->id_pulsa}}" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Modal -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('daftarpulsa.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Jumlah Pulsa cth:10000" autofocus value="{{ old('nama') }}">
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
                                <input type="number" class="form-control form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="cth: 12000" autofocus value="{{ old('harga') }}">
                                @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-success btn-icon-split" type="submit"><span class="text">Tambah</span></button>
                    </form>
                </div>
            </div>
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