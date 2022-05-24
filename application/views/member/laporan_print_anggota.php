<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <style type="text/css">
    .table-data{
    width: 100%;
    border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    font-family:Verdana;
    padding: 10px 10px 10px 10px;
    }
    .table-data th{
        background-color: gray;
    }
    h3{
    font-family:Verdana;
    }
    </style>
    <h3><center>LAPORAN DATA PEMINJAMAN BUKU</center></h3>
    <br/>
    <table class="table-data">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Anggota</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col" nowrap>Member Sejak</th>
            <!-- <th scope="col">Image</th> -->
            <th scope="col">Role Id</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $a = 1;
    foreach ($anggota as $u) { ?>
    <tr>
        <th scope="row"><?= $a++; ?></th>
        <td><?= $u['nama']; ?></td>
        <td><?= $u['alamat']; ?></td>
        <td><?= $u['email']; ?></td>
        <td><?= date('d F Y', $u['tanggal_input']); ?></td>
        <!-- <td>
            <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
        </td> -->
        <td><?= $u['role_id']; ?></td> 
    </tr>
    <?php } ?>
    </tbody>
</table>
<script type="text/javascript">
window.print();
</script>
</body>
</html>
