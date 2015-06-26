<?php
require_once "config/local.php";
extract($_GET);
?>
<html>
<head>
    <?php
        include "head.html"
    ?>
</head>
<body>
<?php
    include "menu.html";
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
                            <div class="row">

                                <!-- Ini tabel control berita!-->
                                <?php
                                $sql  = "SELECT tbl_pegawai.*,tbl_mapel.nama_mapel,tbl_jabatan.nama_jabatan
                                                FROM tbl_pegawai,tbl_jabatan,tbl_mapel WHERE md5(id_guru)='$id'
                                                AND id_jabatan=jabatan AND id_mapel=bidang";
                                $que  = mysql_query($sql);

                                while ($res = mysql_fetch_array($que)){

                                    ?>
                                    <table colspan="3" cellpadding="4" border="0" width="100%">
                                        <?php
                                        if($res['gambar']!="0"){
                                            ?>
                                            <tr>
                                                <td width="20" height="50">&nbsp;</td>
                                                <td align="center" colspan="3">
                                                    <img src="<?php echo $res['gambar'];?>" width="40%" height="40%" alt="<?php echo $res['judul_berita'];?>">
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        else{
                                            ?>
                                            <tr>
                                                <td width="20" height="50">&nbsp;</td>
                                                <td align="center" colspan="3">
                                                    <img src="<?php echo URLADMIN;?>image/pegawai/default.png" width="40%" height="40%" alt="<?php echo $res['judul_berita'];?>">
                                                </td>
                                            </tr>
                                        <?php

                                        }

                                        ?>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">NIP</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['nip_guru'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Nama</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['nama_guru'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Alamat</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['alamat_guru'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">No Hp./Telp</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php if($res['vis_telp']==1){echo $res['telp'];}else{echo "-";}?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Tmpt Tgl. Lahir</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['tpt_lahir'].",".date('d/m/Y',strtotime($res['tgl_lahir']));?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Mulai Bekerja</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['mulai_kerja'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Jabatan</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['nama_jabatan'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20" height="50">&nbsp;</td>
                                            <td  height="50">Bidang</td>
                                            <td width="20" height="50">:</td>
                                            <td align="left"><?php echo $res['nama_mapel'];?></td>
                                        </tr>

                                    </table>
                                    <hr>
                                <?php

                                }
                                ?>


                                <!-- Ini tabel control   berita!-->

                                <div class="col-xs-9">

                                </div>
                                <div class="col-xs-3"></div>
                            </div>
                            <br><br>
                        </div>
                    </div>

                    <!--/stories-->

                    <!--/stories-->





                </div>
            </div>



        </div><!--/col-12-->
    </div>
</div>
</body>
</html>


