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
            <button class="tambah" name="tambah" onclick="openTambah()">tambah buku</button>
            <button class="edit" name="edit">Edit</button>
            <button class="hapus" name="hapus">Hapus buku</button>
        </div>
    </div>

    <!-- overlay tambah -->
    <div id="tambah">
        <div class="overlay-tambah">
            <div class="container-form">
                <form action="" method="post">
                    <h2>Tambah Buku</h2>
                    <label for="judul">Judul Buku :</label>
                    <input type="text" id="judul" name="judul" required>
    
                    <label for="gambar">Sampul Buku :</label>
                    <input type="file" id="gambar" name="gambar" required>
    
                    <label for="pencipta">Pencipta :</label>
                    <input type="text" id="pencipta" name="pencipta" required>
    
                    <label for="tahun">Tahun Terbit :</label>
                    <input type="number" id="tahun" name="tahun" required>
    
                    <label for="kategori">Kategori :</label>
                    <select name="kategori" id="kategori" required>
                        <option value="" disabled selected>Pilih kategori....</option>
                        <option value="pelajaran_sd">Pelajaran SD</option>
                        <option value="pelajaran_smp">Pelajaran SMP</option>
                        <option value="pelajaran_sma">Pelajaran SMA</option>
                        <option value="pelajaran_smk">Pelajaran SMK</option>
                        <option value="novel">Novel</option>
                        <option value="komik">Komik</option>
                        <option value="umum">Umum</option>
                    </select>
    
                    <label for="tema">Tema :</label>
                    <select name="tema" id="tema">
                        <option value="" disabled selected>Pilih tema....</option>
                        <optgroup label="Pelajaran Sekolah">
                            <option value="mtk">MTK</option>
                            <option value="ipa">IPA</option>
                            <option value="ips">IPS</option>
                            <option value="pkn">PKN</option>
                            <option value="olahraga">OLAHRAGA</option>
                        </optgroup>
                        <optgroup label="Genre">
                            <option value="romance">Romance</option>
                            <option value="action">Action</option>
                            <option value="horror">Horror</option>
                            <option value="comedy">Comedy</option>
                            <option value="fantasi">Fantasi</option>
                            <option value="humor">Humor</option>
                            <option value="misteri">Misteri</option>
                            <option value="spiritual">Spiritual</option>
                        </optgroup>
                    </select>
    
                    <label for="tahapan">Tahapan :</label>
                    <input type="text" id="tahapan" name="tahapan" placeholder="kelas atau eps" required>
    
                    <div class="container-form-btn">
                        <button type="submit" name="submit" class="tambah">Tambah</button>
                        <button type="button" onclick="closeTambah()" class="batal">Batal</button>
    
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    <!-- overlay tambah -->

    <div class="container-buku">
        <p>kategori buku</p>
    
        <div class="buku">
            <ul id="buku-list">
                <li><a href="#">Pelajaran SD</a></li>
                <li><a href="#">Pelajaran SMP</a></li>
                <li><a href="#">Pelajaran SMA</a></li>
                <li><a href="#">Pelajaran SMK</a></li>
                <li><a href="#">Novel</a></li>
                <li><a href="#">Komik</a></li>
                <li><a href="#">Umum</a></li>
            </ul>
        </div>

        <div class="mapel">
            <ul id="mapel-list">
                <li><a href="">MTK</a></li>
                <li><a href="">IPA</a></li>
                <li><a href="">IPS</a></li>
                <li><a href="">PKN</a></li>
                <li><a href="">OLAHRAGA</a></li>
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