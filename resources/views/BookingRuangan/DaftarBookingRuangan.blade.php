@include('sidebar')
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Booking Ruangan</h1>
    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{url('/')}}>Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a>Daftar Booking Ruangan</a>
            </li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Data Tabel Booking Ruangan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Booking</th>
                            <th>Nama</th>
                            <th>Tanggal Booking</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr><?php $nomor = 1; ?>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{$booking->kode_booking}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->tanggal_pemesanan }}</td>
                            <td>
                                <form action="{{route('bookingruangan.update',$booking->id_booking)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class=" row">
                                        <div class="col">
                                            <select class="form-control" border="0px" required="required" name="status" aria-label="Default select example" value="{{$booking->status}}">
                                            <option value="PERMINTAAN"{{$booking->status == "PERMINTAAN" ? 'selected' : ''}}>PERMINTAAN</option>
                                                <option value="VERIFIKASI"{{$booking->status == "VERIFIKASI" ? 'selected' : ''}}>VERIFIKASI</option>
                                                <option value="TERIMA"{{$booking->status == "TERIMA" ? 'selected' : ''}}>TERIMA</option>
                                            </select>
                                        </div>
                                    </div>
                            </td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <a class="btn btn-success btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a></button>

                                </form>
                                <button class="btn btn-info btn-icon-split">
                                    <a href="bookingruangandetail/{{$booking->id_booking}}" class="btn btn-info btn-icon-split">
                                        <span class="text">
                                            <i class="fas fa-info"></i>
                                        </span>
                                    </a>
                                </button>
                                <button class="btn btn-danger btn-icon-split">
                                    <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#exampleModal{{$booking->id_booking}}">
                                        <span class="text">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$booking->id_booking}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a href="bookingruangan/delete/{{$booking->id_booking}}" class="btn btn-danger btn-icon-split">
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
