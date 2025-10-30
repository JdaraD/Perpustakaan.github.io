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
                        <option value="<?= $kat["id"] ;?>"><?= $kat["Kategori_nama"] ;?></option>
                        <?php endforeach; ?>
                    </select>
    
                    <label for="tema">Tema :</label>
                    <select name="tema_id" id="tema">
                        <option value="" disabled selected>Pilih tema....</option>

                        <?php foreach ($grouped[0] as $parent) : ?>
                            <optgroup label="<?= htmlspecialchars($parent['jenis']) ?>">
                                <?php if (!empty($grouped[$parent['id']])) : ?>
                                    <?php foreach ($grouped[$parent['id']] as $child) : ?>
                                        <option value="<?= $child['id'] ?>"><?= htmlspecialchars($child['jenis']) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </optgroup>
                        <?php endforeach; ?>

                    </select>
    
                    <label for="tahapan">Tahapan :</label>
                    <input type="text" id="tahapan" name="tahapan" placeholder="kelas atau eps" required>

                    <label for="buku">Buku :</label>
                    <input type="file" name="buku" id="buku" placeholder="upload file pdf atau word" required>
    
                    <div class="container-form-btn">
                        <button type="submit" name="sumbit" class="tambah">Tambah</button>
                        <button type="button" onclick="closeTambah()" class="batal">Batal</button>
    
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    <!-- overlay tambah -->

    <!-- pesan tambah berhasil -->
    <div id="pesan">
        <div class="pesan-tambah">
            <div class="tambah-pesan">
                <?php if( isset($tambahBerhasil)) { ; ?>
                <p>Buku berhasil ditambahkan!</p>
                <?php } elseif( isset($tambahGagal)) { ;?>
                <p>Buku gagal ditambahkan!</p>
                <?php } ;?>

            </div>
        </div>
    </div>
    <!-- pesan tambah berhasil -->

    <!-- overlay edit -->
    <div id="edit">
        <div class="overlay-edit">
            <div class="container-form-edit">
                <form action="" method="post" enctype="multipart/form-data">
                    <h2>Edit Buku</h2>
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
                        <option value="<?= $kat["id"] ;?>"><?= $kat["Kategori_nama"] ;?></option>
                        <?php endforeach; ?>
                    </select>
    
                    <label for="tema">Tema :</label>
                    <select name="tema_id" id="tema">
                        <option value="" disabled selected><?= $child['jenis'] ; ?></option>
                        <?php foreach ($grouped[0] as $parent) : ?>
                            <optgroup label="<?= htmlspecialchars($parent['jenis']) ?>">
                                <?php if (!empty($grouped[$parent['id']])) : ?>
                                    <?php foreach ($grouped[$parent['id']] as $child) : ?>
                                        <option value="<?= $child['id'] ?>"><?= htmlspecialchars($child['jenis']) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </optgroup>
                        <?php endforeach; ?>
                    </select>
    
                    <label for="tahapan">Tahapan :</label>
                    <input type="text" id="tahapan" name="tahapan" placeholder="kelas atau eps" required>
    
                    <div class="container-form-edit-btn">
                        <button type="submit" name="update" class="update">Update</button>
                        <button type="button" onclick="closeEdit()" class="batal">Batal</button>
    
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- overlay edit -->

    <!-- pesan edit berhasil -->
    <div id="pesanEdit">
        <div class="container-pesan">
            <div class="pesan-edit">
                <?php if( isset($editBerhasil)) { ; ?>
                    <p>Buku berhasil diedit!</p>
                <?php } elseif (isset($editGagal)) { ; ?>
                    <p>Buku gagal diedit</p>
                <?php } ; ?>
            </div>
        </div>
    </div>
    <!-- pesan edit berhasil -->

    <!-- overlay view -->
    <div id="view">
        <div class="container-view">
            <iframe src="" frameborder="0" style="width:100%; height:90vh;"></iframe>
        </div>
    </div>
    <!-- overlay view -->

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
                <li><a href="#">MTK</a></li>
                <li><a href="#">IPA</a></li>
                <li><a href="#">IPS</a></li>
                <li><a href="#">PKN</a></li>
                <li><a href="#">OLAHRAGA</a></li>
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
            <?php $i = 1; ?>
            <?php foreach($daftarBuku as $dB) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $dB['judul_buku'] ;?></td>
                <td><img src="img/<?= $dB['gambar'] ;?>" alt=""></td>
                <td><?= $dB['pencipta'] ;?></td>
                <td><?= $dB['tahun_terbit'] ;?></td>
                <td><?= $dB['kategori'] ;?></td>
                <td><?= $dB['buku'] ;?></td>
                <td><?= $dB['tahapan'] ;?></td>
                <td>
                    <button class="baca" onclick="openView(<?= $dB['id'] ; ?>)">Baca</button> |
                    <a href="#" class="download">Download</a> |
                    <button class="edit" name="edit" onclick="openEdit(<?= $dB['id'];?>)" data-id="" data-judul="" data-gambar="" data-pencipta="" data-tahun="" data-kategori="" data-tahapan="">Edit</button> |
                    <button class="hapus" name="hapus">Hapus buku</button>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

</div>