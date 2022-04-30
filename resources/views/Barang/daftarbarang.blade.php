@include('sidebar')
<!-- Begin Page Content -->
<div class="container-fluid">

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Daftar Barang dan Snack</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href={{url('/beranda')}}>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a>Daftar Barang dan Snack</a>
                    </li>
                </ol>
            </nav>
            <div class=" py-3">
                <div><a href="/tambahbarangsnack" class="btn btn-success btn-icon-split" style="text-align: right;">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </a></div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Tabel barang
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Kuantitas</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr><?php $nomor = 1; ?>
                            </thead>
                            <tbody>
                                @foreach($barangs as $barang)
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td>{{$barang->nama}}</td>
                                    <td>@currency($barang->harga)</td>
                                    <td>{{$barang->kategori}}</td>
                                    <td>{{$barang->stok}}</td>
                                    <td><img src="{{url('gbr_barang/'.$barang->gambar)}}" class="py-1 width=" 50" height="100" alt=""></td>
                                    <td>
                                        <a href="/daftarbarangsnack/edit/{{$barang->id_barang_snack}}" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                        </a>
                                        <a class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#exampleModal{{$barang->id_barang_snack}}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal{{$barang->id_barang_snack}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <a href="daftarbarangsnack/delete/{{$barang->id_barang_snack}}" class="btn btn-danger btn-icon-split">
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