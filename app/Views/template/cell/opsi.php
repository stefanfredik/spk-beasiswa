<div class="btn-group" role="group" aria-label="Basic example">
    <a onclick="hapus(event,this)" class="btn btn-danger" href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash mr-2"></i></a>
    <a onclick="edit(event,this)" class="btn  btn-info" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square mr-2"></i></a>
</div>