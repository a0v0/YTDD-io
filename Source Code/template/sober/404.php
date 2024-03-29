<?php
if (empty($lang) || empty($template_config) || empty($config)) {
    exit();
}
?>
<div class="main main-raised text-center" id="download_area">
    <div class="container container-padding">
        <?php
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center mt-1 mb-0">%s</div>', option("ads.2", false));
        }
        ?>
        <div id="alert"></div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="<?php echo $config["url"]; ?>/template/sober/img/404-error.svg" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1><?php echo $lang["404-not-found"]; ?></h1>
                <a href="<?php echo $config["url"]; ?>"
                   class="btn btn-round btn-primary"><?php echo $lang["go-home"]; ?></a>
            </div>
        </div>
        <?php
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center mt-1 mb-0">%s</div>', option("ads.2", false));
        }
        ?>
        <div class="section text-center">
            <div class="row">
                <?php include(__DIR__ . "/about.php") ?>
            </div>
        </div>
    </div>
</div>