<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'Contact';
        require('components/head.php');
    ?>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>

    <?php 
    require_once('components/navbar.php'); ?>

    <div id="content-container">
        <div id="content-section">
            <div id="content-left">
                <img src="assets/img/organization-logo/HIMTI.png" alt="">
            </div>
            <div id="content-center"></div>
            <div id="content-right">
                <p><strong>Web</strong> : www.ofog.himtibinus.or.id/</p>
                <p><strong>E-mail</strong> : mail@himti.or.id</p>
                <p><strong>Facebook</strong> : https://www.facebook.com/himtibinus/</p>
                <p><strong>Instagram</strong> : @himti_binus</p>
            </div>
        </div>
        <div class="campus-row">
            <div class="campus-card">
                <p class="campus-card-header"><strong>Alam Sutera Campus</strong></p>
                <p>Student Club and Activity Center (SCAC)</p>
                <p>Jl. Jalur Sutera Barat Kav. 21,</p>
                <p>Alam Sutera, Tangerang</p>
            </div>

            <div class="campus-card">
                <p class="campus-card-header"><strong>Syahdan Campus</strong></p>
                <p>Student Club and Activity Center (SCAC)</p>
                <p>Jl. K H. Syahdan No. 9, Kemanggisan – Palmerah</p>
                <p>Jakarta Barat 11480</p>
            </div>

            <div class="campus-card">
                <p class="campus-card-header"><strong>Senayan Campus</strong></p>
                <p>FX Sudirman Lantai 6 Jalan Pintu Satu</p>
                <p>Senayan No.3, RT.1/RW.3 – Jakarta</p>
            </div>
        </div>

        <div class="campus-row">
            <div class="campus-card">
                <p class="campus-card-header"><strong>Bandung Campus</strong></p>
                <p>Paskal Hyper Square</p>
                <p>Jalan Pasirkaliki No. 25-27 – Bandung</p>
            </div>

            <div class="campus-card">
                <p class="campus-card-header"><strong>Malang Campus</strong></p>
                <p>Jalan Araya Mansion No. 8 – 22</p>
                <p>Araya – Malang 65154</p>
            </div>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>