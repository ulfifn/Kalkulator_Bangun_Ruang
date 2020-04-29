<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo site_url('../assets/css/bootstrap.min.css')."?".rand() ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-tabs" style="margin-top:50px">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($status == 'home' ? 'active' : '') ?>" href="/hitung/index.php/objek">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($status == 'balok' ? 'active' : '') ?>" href="/hitung/index.php/objek/balok">Balok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($status == 'tabung' ? 'active' : '') ?>" href="/hitung/index.php/objek/tabung">Tabung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($status == 'limas' ? 'active' : '') ?>" href="/hitung/index.php/objek/limas">Limas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($status == 'prisma' ? 'active' : '') ?>" href="/hitung/index.php/objek/prisma">Prisma</a>
                </li>
            </ul>
        </div>

<script src="<?php echo site_url('../assets/js/bootstrap.min.js')."?".rand() ?>"></script>
</body>
</html>
