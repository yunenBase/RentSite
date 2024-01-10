<main>
  <div class="konten1"><?= ucfirst($namaDB)?></div>
  <div class="isitable">
    <?php
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Kode Gedung</th><th>Tanggal</th><th>Status</th><th>Instansi Peminjam</th><th>Aksi</th></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["Kode_Gedung"] . "</td>";
          echo "<td>" . date('l, j F Y', strtotime($row["Tanggal"])) . "</td>";
          echo '<td class="status">' . $row["Status"] . "</td>";
          echo "<td>" . $row["Instansi_Peminjam"] . "</td>";
          echo '<td class="pilihan">' . '<button type="button" id="btnPeminjaman" onclick="showForm(\'' . $row["Kode_Gedung"] . '\')">Pinjam</button>' . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "Tidak ada data gedung.";
      }
      ?>
  </div>
</main>