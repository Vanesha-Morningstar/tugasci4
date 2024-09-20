<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>Perpustakaan Digital</h1>   
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/perpus/tambah" class="btn btn-primary mb-3 mt-5">Tambah Data Buku</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Id Buku</th>
                            <th>judul</th>
                            <th>penulis</th>
                            <th>penerbit</th>
                            <th>tahun terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($buku as $perpus): ?>
                            <tr>
                                <td><?= $no?></td>
                                <td><?= $perpus['id_buku']?></td>
                                <td><?= $perpus['judul']?></td>
                                <td><?= $perpus['penulis']?></td>
                                <td><?= $perpus['penerbit']?></td>
                                <td><?= $perpus['tahun_terbit']?></td>
                                <td>
                                    <form action="perpus/edit" method="post">
                                        <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
                                        <button type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="perpus/hapus" method="post">
                                        <input type="hidden" name="id_buku" value="<?= $perpus['id_buku']?>">
                                        <button type="submit" class="btn btn-danger">hapus</button>
                                    </form> 
                                </td>
                            </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>