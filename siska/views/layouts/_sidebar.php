<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SISKA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity->username?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                   
                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    // MENU ADMIN
                    ['label' => 'ADMIN', 'header' => true],
                    ['label' => 'Dashboard', 'icon' => 'tachometer-alt','url'=>['/site']],
                    [
                        'label' => 'Data Master',
                        'icon' => 'database',
                        'items' => [
                            ['label' => "Agama", 'icon' => 'mosque', 'url' => ['/']],
                            ['label' => "Wilayah", 'icon' => 'globe-asia', 'url' => ['/']],

                        ]
                        ],
                    // MENU AKADEMIK
                    ['label' => 'AKADEMIK', 'header' => true],
                    ['label' => 'Dashboard', 'icon' => 'tachometer-alt','url'=>['/site']],
                    [
                        'label' => 'Data Master',
                        'icon' => 'database',
                        'items' => [
                            ['label' => 'Fakultas', 'icon' => 'university', 'url' => ['/']],
                            ['label' => 'Prodi', 'icon' => 'building', 'url' => ['/']],
                            ['label' => 'Dosen', 'icon' => 'user-tie', 'url' => ['/']],
                            ['label' => 'Mahasiswa', 'icon' => 'user-graduate', 'url' => ['/']],
                            ['label' => 'Staff', 'icon' => 'user', 'url' => ['/']],
                            ['label' => 'Mata Kuliah', 'icon' => 'book', 'url' => ['/']],
                            ['label' => 'Status Dosen', 'icon' => 'chalkboard-teacher', 'url' => ['/']],
                            ['label' => 'Jabatan Struktural', 'icon' => 'map-pin', 'url' => ['/']],
                            ['label' => 'Jenjang Pendidikan', 'icon' => 'layer-group', 'url' => ['/']],
                            ['label' => 'Universitas', 'icon' => 'school', 'url' => ['/']],

                        ]
                        ],

                    // MENU DOSEN
                    ['label' => 'DOSEN', 'header' => true],
                   // MENU MAAHASISWA
                    ['label' => 'MAHASISWA', 'header' => true],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>