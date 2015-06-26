<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.html";
    ?>
</head>

<body>
<!-- Navigation -->
<?php
include "menu.html";
require_once "config/local.php";
?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Pendaftaran Siswa/i Baru</h1>
                    <hr class="small">
                    <span class="subheading">Silahkan Masukkan Data Anda dibawah</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Masukkan data dengan BENAR dan SESUAI dengan DOKUMEN asli!<br>Data yang bertanda (*) Harus di isi!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap Anda (*)" required data-validation-required-message="Silahkan Lengkapi Kolom Nama">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nomor Ijazah/SKHU</label>
                        <input type="text" class="form-control" placeholder="No Ijazah SMP/MTs (*)" required data-validation-required-message="Isi Nomor Ijazah">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Alamat Email</label>
                        <input type="email" class="form-control" placeholder="Alamat Email Anda" id="email" >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nomor Telp/Hp</label>
                        <input type="tel" class="form-control" placeholder="No Telp/Hp (*)" id="phone" required data-validation-required-message="Isilah Nomor Telpon">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
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
