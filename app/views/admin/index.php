<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once(RUTA_APP.'/views/admin/templates/head.html'); ?>
        <title>Dashboard</title>
    </head>

    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">
            <?php require_once(RUTA_APP.'/views/admin/templates/sidebar.html'); ?>
            <div class="main">
                <?php require_once(RUTA_APP.'/views/admin/templates/navbar.html'); ?>
                <main class="content">
                    <div class="container-fluid p-0">
                        <!-- 1 -->
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row">
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                </main>
                <?php require_once(RUTA_APP.'/views/admin/templates/footer.html'); ?>
            </div>
        </div>    
        <?php require_once(RUTA_APP.'/views/admin/templates/scripts.html'); ?>
        <script></script>
    </body>
</html>

<!-- beautify ignore:end -->
