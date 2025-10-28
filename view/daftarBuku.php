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
                <form action="" method="post" enctype="multipart/form-data">
                    <h2>Tambah Buku</h2>
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul" name="judul_buku" required>
    
                    <label for="gambar">Sampul Buku :</label>
                    <input type="file" id="gambar" name="gambar" required>
    
                    <label for="pencipta">Pencipta :</label>
                    <input type="text" id="pencipta" name="pencipta" required>
    
                    <label for="tahun_terbit">Tahun Terbit :</label>
                    <input type="date" id="tahun" name="tahun_terbit" required>
    
                    <label for="kategori">Kategori :</label>
                    <select name="kategori_id" id="kategori" required>
                        <option value="" disabled selected>Pilih kategori....</option>
                        <?php foreach($kategori as $kat) : ?>
                        <option value="<?= $kat["id"] ;?>"><?= $kat["kategori"] ;?></option>
                        <?php endforeach; ?>
                    </select>
    
                    <label for="tema">Tema :</label>
                    <select name="tema_id" id="tema">
                        <option value="" disabled selected>Pilih tema....</option>
                        <optgroup label="Pelajaran Sekolah">
                            <?php foreach($mapel as $map) : ?>
                            <option value="<?= $map["id"] ; ?>"><?= $map["mapel"] ; ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="Genre">
                            <?php foreach($genre as $gen) : ?>
                            <option value="<?= $gen["id"] ; ?>"><?= $gen["genre"] ; ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                    </select>
    
                    <label for="tahapan">Tahapan :</label>
                    <input type="text" id="tahapan" name="tahapan" placeholder="kelas atau eps" required>
    
                    <div class="container-form-btn">
                        <button type="submit" name="sumbit" class="tambah">Tambah</button>
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
                <th>gambar</th>
                <th>Pencipta</th>
                <th>Tahun</th>
                <th>kategori</th>
                <th>genre buku</th>
                <th>Tahapan</th>
                <th>Aksi</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>sadasdasdasdasdsaddd</td>
                <td><img src="/perpustakaan/img/logo.png" alt=""></td>
                <td>asdasdasdsa</td>
                <td>2021</td>
                <td>asdasdasdasd</td>
                <td>asdasdasdasd</td>
                <td>kelas 1</td>
                <td>
                    <a href="" class="baca">Baca</a> |
                    <a href="" class="download">Download</a>
                </td>
            </tr>
            <?php endfor; ?>

        </table>
    </div>

</div>