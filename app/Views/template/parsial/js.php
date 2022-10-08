<script src="/sb/vendor/jquery/jquery.min.js"></script>
<script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/sb/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/sb/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="/sb/vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="/sb/js/demo/chart-area-demo.js"></script> -->
<!-- <script src="/sb/js/demo/chart-pie-demo.js"></script> -->

<!-- Page level plugins -->
<script src="/sb/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/sb/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/assets/sweetalert2/dist/sweetalert2.all.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Page level custom scripts -->
<script src="/sb/js/demo/datatables-demo.js"></script>
<?= $this->include("/template/parsial/customjs"); ?>

<script>
    const Toast = Swal.mixin({
        position: 'center',
        timer: 1000,
        showConfirmButton: false,
    })

    const Confirm = Swal.mixin({
        title: 'Hapus Data',
        text: "Apakah anda yakin untuk menghapus?",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
    })
</script>