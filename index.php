<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include "head.html"
    ?>
</head>

<body>
    <?php
        include "menu.html";
        require_once "config/local.php";
      ?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Selamat Datang</h1>
                        <hr class="small">
                        <span class="subheading"><?php echo Nama_Sekolah?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.php?id=<?php echo $id?>">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php
        include "foot.html";
    ?>

</body>

</html>
