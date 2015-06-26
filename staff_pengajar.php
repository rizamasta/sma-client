<?php


include "config/local.php";
error_reporting(E_ALL & ~E_NOTICE);

//session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.html";
    ?>
</head>
<body>
<?php
    include "menu.html";
    require_once "config/local.php";
?>



<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">
                    <!--/stories-->
                    <div class="row">
                        <br>

                        <div class="col-md-10 col-sm-9">
                            <h3>Data Pengajar dan Staff</h3>
                            <hr>
                            <div class="row">

                                <!-- Ini tabel control berita!-->

                                <table class="table table-hover" border="0" width="100%">
                                    <thead>
                                        <tr align="left" class="bg-info" >
                                            <td width="40" height="50">No</td>
                                            <td>NIP </td>
                                            <td>Nama</td>
                                            <td>Jabatan</td>
                                            <td>Tempat Tgl. Lahir</td>

                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql ="SELECT tbl_pegawai.*,tbl_jabatan.nama_jabatan FROM tbl_pegawai,tbl_jabatan
                                            WHERE id_jabatan=jabatan AND status=1 Order by jabatan asc ";
                                    $res = mysql_query($sql);
                                    $no  =1;
                                    while ($data=mysql_fetch_array($res))
                                    {
                                        ?>

                                        <tr  style="color:black" >
                                            <td  width="40" align="center"><?php echo $no;?></td>
                                            <td align="left"><?php echo $data['nip_guru'];?></td>
                                            <td align="left"><?php echo $data['nama_guru'];?></td>
                                            <td align="left"><?php echo $data['nama_jabatan'];?></td>
                                            <td align="left"><?php echo $data['tpt_lahir'].",".date('d/m/Y',strtotime($data['tgl_lahir']));?></td>
                                            <td align="center">
                                                <a href="preview_pegawai.php?id=<?php echo md5($data['id_guru']);?>" class="btn btn-block btn-info">Detail</a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                    </tbody>
                                </table>

                                <!-- Ini tabel control   berita!-->

                                <div class="col-xs-9">

                                </div>
                                <div class="col-xs-3"></div>
                            </div>


                    <?php
                    include "foot.html";
                    ?>
</body>
</html>