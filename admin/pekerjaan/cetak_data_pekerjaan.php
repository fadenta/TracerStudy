<body onload="javascript:window.print()" style="margin: auto; width: 100%">
    <div style="margin-left: 10px; margin-right: 10px;"></div>

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr align="center">
            <td><font size="5">LEMBAGA PENDIDIKAN PERGURUAN TINGGI</font></td>
        </tr>
        <tr align="center">
            <td><font size="6">UNIVERSITAS NAHDLATUL ULAMA INDONESIA</font></td>
        </tr>
        <tr align="center">
            <td>
                <font size="3">
                Jl. Taman Amir Hamzah No.5, Menteng, Jakarta Pusat 10320<br>
                sekretariat@unusia.ac.id
                </font>
            </td>
        </tr>
    </table>
    <hr><br>

    <font size="5">
        <center><u>Laporan Data Pekerjaan</u></center>
    </font>

    <p>&nbsp;</p>

    <table align="center" width="90%" cellspacing="0" cellpadding="0">
        <tr bgcolor="lightgray">
            <th style="border: 1px solid #000; padding: 3px 5px;"> No. </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> ID Pekerjaan </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> ID Alumni </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Nama Perusahaan </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Alamat Perusahaan </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Nama Jabatan </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Gaji </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Pengalaman Kerja </th>
            <th style="border: 1px solid #000; padding: 3px 5px;"> Pendidikan Lanjutan </th>
        </tr>

        <?php
        include "../../koneksi.php"; // Ensure the database connection is established
        $sqlPekerjaan = mysqli_query($con, "SELECT * FROM pekerjaan"); // Adjust this query if needed
        $no = 1;
        while ($rPekerjaan = mysqli_fetch_array($sqlPekerjaan)) { 
        ?>
        <tr>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $no; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['id_pkrjaan']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['id_alumni']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['nama_perusahaan']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['alamat_perusahaan']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['nama_jabatan']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['gaji']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['pengalaman_kerja']; ?></td>
            <td align="center" style="border: 1px solid #000; padding: 3px 5px;"><?php echo $rPekerjaan['pendidikan_lanjutan']; ?></td>
        </tr>
        <?php
            $no++;
        }
        ?> 
    </table>

    <p style="text-align: right; font-size: 18px;">Jakarta, <?php echo date("d M Y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="text-align: right; font-size: 18px;">Rektor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;</p> 
    <p style="text-align: right; font-size: 18px;">Dr. Chandra Lukita, M.M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="text-align: right; font-size: 18px;">Penanggung Jawab by Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</body>
