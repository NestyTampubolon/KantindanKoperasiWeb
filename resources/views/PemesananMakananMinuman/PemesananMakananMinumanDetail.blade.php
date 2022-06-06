@include('sidebar')

<!-- Begin Page Content -->
<div class="container-fluid">
    <main>
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href={{url('/dashboard')}}>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href={{url('/pemesananmakananminuman')}}>Daftar Pemesanan</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a>Daftar Pemesanan Detail</a>
                    </li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-4">
                    @foreach($pemesanan as $pemesanans)
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pemesanan</label>
                            <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{ Carbon\Carbon::parse($pemesanans->tanggal_pemesanan_makanan_minuman)->format('d-m-Y') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Penerima</label>
                            <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$pemesanans->nama_penerima}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Telephone Penerima</label>
                            <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$pemesanans->nomor_telephone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah Item</label>
                            <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$pemesanans->total_item}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Catatan</label>
                            <br>
                            <textarea name="" id="" class="form-control" cols="95" disabled rows="4">{{$pemesanans->catatan}}</textarea>
                        </div>
                    </form>
                    @endforeach
                </div>

                <div class="card col-md-8">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Data Tabel Daftar Pemesanan Detail
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kuantitas</th>
                                        <th>Total Harga</th>
                                    </tr><?php $nomor = 1; ?>
                                </thead>
                                <tbody>
                                    @foreach($daftarjoin as $daftarjoin)
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td>{{$daftarjoin->nama}}</td>
                                        <td>{{$daftarjoin->kuantitas}}</td>
                                        <td>@currency($daftarjoin->total_harga)</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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