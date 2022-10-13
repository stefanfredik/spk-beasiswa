<script>
    async function simpanData(e, id = null) {
        e.preventDefault();
        let form = document.querySelector("form");
        const modal = $("#modal");

        if (id !== null) {
            url = `/${baseUrl}/save/${id}`;
        } else {
            url = `/${baseUrl}/save`;
        }

        const formData = new FormData(form);

        await axios.post(url, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }).then((res) => {
                // console.log(res);
                if (res.data.status == 'success') {
                    Toast.fire({
                        icon: res.data.status,
                        title: res.data.msg
                    })

                    modal.modal('hide');
                    getTable(baseUrl);
                } else {
                    validation(res.data.error);
                    console.log(res.data);
                    return;
                }

            })
            .catch((err) => {
                console.log(err);
                Toast.fire({
                    icon: 'error',
                    title: 'Gagal menambah data!'
                })
            });
    }

    async function hapus(event, target) {
        event.preventDefault();
        let url = target.getAttribute('href');

        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah anda yakin untuk menghapus?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then(async (result) => {
            if (result.isConfirmed) {
                $.get(url, function(res, status) {
                    if (status === 'success') {
                        console.log(res);
                        Toast.fire({
                            icon: res.status,
                            title: res.msg
                        })
                    }
                });

                getTable(baseUrl);
            }
        })
    }

    async function edit(event, target) {
        event.preventDefault();
        const url = target.getAttribute('href');

        $.get(url, function(data, status) {
            if (status === 'success') {
                // console.log(data);
                $("#modalArea").html(data);
                $("#modal").modal("show");
            }
        }).catch((err) => {
            Toast.fire({
                icon: 'error',
                title: 'Gagal mengedit data!'
            })
            console.log(err);
        });
    }

    async function tambah(target) {
        const url = target.getAttribute('data-url');

        $.get(url, function(data, status) {
            if (status === 'success') {
                // console.log(data);
                $("#modalArea").html(data);
                $("#modal").modal("show");
            }
        }).catch((err) => {
            console.log(err);
        });
    }

    async function getTable(url) {
        $.get(url + "/table", function(data, status) {
            $('#data').html(data);
            $(`#${url}`).DataTable({
                columnDefs: [{
                    width: 20,
                    targets: 0
                }],
                "language": {
                    "paginate": {
                        "first": "Awal",
                        "last": "Akhir",
                        "next": '<i class="bi bi-arrow-right-circle"></i>',
                        "previous": '<i class="bi bi-arrow-left-circle"></i>'
                    },
                    "zeroRecords": "Belum ada data.",
                    "search": "Cari:",
                    "lengthMenu": "Tampil _MENU_ kolom",
                    "info": "Kolom _START_ sampai _END_ dari _TOTAL_ kolom",
                }
                // fixedColumns: false
            });
        }).fail((e) => {
            Toast.fire({
                icon: 'error',
                title: 'Gagal mendapatkan data.'
            });
            console.log(e);
        });
    }
</script>