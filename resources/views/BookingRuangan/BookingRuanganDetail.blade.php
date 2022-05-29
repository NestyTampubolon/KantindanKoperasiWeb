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
                        <a href={{url('/bookingruangan')}}>Daftar Pemesanan</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a>Daftar Pemesanan Detail</a>
                    </li>
                </ol>
            </nav>
            <div class="col-md-6">
                @foreach($bookings as $booking)
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kode Booking</label>
                        <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$booking->kode_booking}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Atas Nama</label>
                        <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$booking->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Ruangan</label>
                        <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$booking->nama_ruangan}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jam Mulai</label>
                        <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$booking->jam_mulai}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jam Selesai</label>
                        <input type="email" class="form-control" disabled id="exampleFormControlInput1" value="{{$booking->jam_selesai}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Deskripsi</label>
                        <br>
                        <textarea name="" class="form-control" id="" cols="95" disabled rows="4">{{$booking->deskripsi}}</textarea>
                    </div>
                </form>
                @endforeach
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