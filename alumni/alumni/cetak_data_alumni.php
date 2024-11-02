<body onload="javascript:window.print()" style="margin: auto; width: 100%">
    <div style="margin-left: 10px; margin-right: 10px;"></div>

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr align="center">
            <td><font size="5">LEMBAGA PENDIDIKAN PERGURUAN TINGGI</font></td>
        </tr>
        <tr align="center">
            <td><font size="6">UNIVERSITAS CATUR INSAN CENDEKIA</font></td>
        </tr>
        <tr align="center">
            <td>
                <font size="3">
                    Jl. Kesambi No.202 Cirebon - 45133 ~ Telp. (0231) 200418<br>
                    Website: http://www.cic.ac.id ~ E-mail: info@cic.ac.id
                </font>
            </td>
        </tr>
    </table>
    <hr><br>

    <font size="5">
        <center><u>Laporan Data Alumni</u></center>
    </font>

    <p>&nbsp;</p>

    <table align="center" width="90%" cellspacing="0" cellpadding="0">
        <tr bgcolor="lightgray">
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> No. </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> ID Alumni </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Nama Alumni </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Jenis Kelamin </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Tempat Lahir </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Tanggal Lahir </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Alamat </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Tanggal Lulus </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> No. Telepon </th>
            <th style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"> Email </th>
        </tr>

        <?php
        include "../../koneksi.php"; // Ensure the database connection is established
        $sqlal = mysqli_query($con, "SELECT * FROM alumni"); // Adjust this query if needed
        $no = 1;
        while ($ral = mysqli_fetch_array($sqlal)) { 
        ?>
        <tr>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $no; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['id_alumni']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['nama']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['jenis_klmin']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['tempat_lahir']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['tgl_lahir']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['alamat']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['tgl_lulus']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['no_tlp']; ?></td>
            <td align="center" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $ral['email']; ?></td>
        </tr>
        <?php
            $no++;
        }
        ?> 
    </table>

    <p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="text-align: right; font-size: 18px;">Rektor UCIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>&nbsp;</p> 
    <p style="text-align: right; font-size: 18px;">Dr. Chandra Lukita, M.M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</body>
