@include('sidebar')
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Pemesanan Pulsa</h1>
    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{url('/')}}>Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a>Daftar Pemesanan Pulsa</a>
            </li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Data Tabel Pemesanan Pulsa
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pemesanan</th>
                            <th>Nama</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr><?php $nomor = 1; ?>
                    </thead>
                    <tbody>
                        @foreach($pemesanans as $pemesanan)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{$pemesanan->kode_transaksi}}</td>
                            <td>{{$pemesanan->name}}</td>
                            <td>@currency($pemesanan->harga)</td>
                            <td>
                                <form action="{{route('pemesananpulsa.update',$pemesanan->id_pemesanan_pulsa)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class=" row">
                                        <div class="col">
                                            <select class="form-control" border="0px" required="required" name="status" aria-label="Default select example" value="{{$pemesanan->status}}">
                                                <option value="PERMINTAAN" {{$pemesanan->status == "PERMINTAAN" ? 'selected' : ''}}>PERMINTAAN</option>
                                                <option value="VERIFIKASI" {{$pemesanan->status == "VERIFIKASI" ? 'selected' : ''}}>VERIFIKASI</option>
                                                <option value="TERIMA" {{$pemesanan->status == "TERIMA" ? 'selected' : ''}}>TERIMA</option>
                                            </select>
                                        </div>
                                    </div>
                            </td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <a href="" type="submit" class="btn btn-success btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a></button>

                                </form>
                                <button class="btn btn-info btn-icon-split">
                                    <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#exampleModalDetail{{$pemesanan->id_pemesanan_pulsa}}">
                                        <span class="text">
                                            <i class="fas fa-info"></i>
                                        </span>
                                    </a>
                                </button>
                                <button class="btn btn-danger btn-icon-split">
                                    <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#exampleModal{{$pemesanan->id_pemesanan_pulsa}}">
                                        <span class="text">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Detail -->
                        <div class="modal fade" id="exampleModalDetail{{$pemesanan->id_pemesanan_pulsa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pemesanan Pulsa Detail</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                Kode Pemesanan
                                            </div>
                                            <div class="col-md-6">
                                            {{$pemesanan->kode_transaksi}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                               Tanggal Pemesanan
                                            </div>
                                            <div class="col-md-6">
                                            {{ Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('d-m-Y') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                               Nomor Telephone
                                            </div>
                                            <div class="col-md-6">
                                            {{$pemesanan->nomor_telephone}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                               Jumlah Pulsa
                                            </div>
                                            <div class="col-md-6">
                                            {{$pemesanan->nama}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                               Total Pembayaran
                                            </div>
                                            <div class="col-md-6">
                                            @currency($pemesanan->harga)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="pemesananpulsa/delete/{{$pemesanan->id_pemesanan_pulsa}}" class="btn btn-danger btn-icon-split">
                                            <span class="text">Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$pemesanan->id_pemesanan_pulsa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                                    </div>
                                    <div class="modal-body">
                                        Anda yakin menghapusnya?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="pemesananpulsa/delete/{{$pemesanan->id_pemesanan_pulsa}}" class="btn btn-danger btn-icon-split">
                                            <span class="text">Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
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