<?php

?>

<div class="buku-container">

    <div class="container-navigasiBuku">
        <div class="kosong"></div>

        <div class="search">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Cari buku...">
                <button type="submit" name="cari">Cari</button>
            </form>

        </div>

        <div class="aksi">
            <button class="tambah" name="tambah">tambah buku</button>
            <button class="edit" name="edit">Edit</button>
            <button class="hapus" name="hapus">Hapus buku</button>
        </div>
    </div>

    <div class="container-buku">
        <p>kategori buku</p>
    
        <div class="buku">
            <ul id="buku-list">
                <li><a href="#">Pelajaran SD</a></li>
                <li><a href="#">Pelajaran SMP</a></li>
                <li><a href="#">Pelajaran SMA</a></li>
                <li><a href="#">Novel</a></li>
                <li><a href="#">Komik</a></li>
                <li><a href="#">Umum</a></li>
            </ul>
        </div>

        <div class="genre">
            <ul id="genre-list">
                <li><a href="#">Romance</a></li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Horror</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Fantasi</a></li>
                <li><a href="#">Humor</a></li>
                <li><a href="#">Misteri</a></li>
                <li><a href="#">Spiritual</a></li>   
            </ul>
        </div>

    </div>

    <div class="container-tabel">
        <table>
            <tr>
                <th>No</th>
                <th>judul Buku</th>
                <th>Pencipta</th>
                <th>Tahun</th>
                <th>kategori</th>
                <th>genre buku</th>
                <th>Aksi</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>sadasdasdasdasd</td>
                <td>asdasdasdsa</td>
                <td>asdasdasdasdasdasdas</td>
                <td>asdasdasdasd</td>
                <td>asdasdasdasd</td>
                <td>
                    <a href="" class="baca">Baca</a> |
                    <a href="" class="download">Download</a>
                </td>
            </tr>
            <?php endfor; ?>

        </table>
    </div>

</div>