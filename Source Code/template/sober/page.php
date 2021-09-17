<?php
if (empty($lang) || empty($template_config)) {
    exit();
}
?>
<div class="main main-raised" id="download_area">
    <div class="container container-padding">
        <?php
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center mt-1 mb-0">%s</div>', option("ads.2", false));
        }
        ?>
        <div id="alert"></div>
        <div class="row" id="links"></div>
        <?php
        echo $content["content_text"];
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center mt-1 mb-0">%s</div>', option("ads.1", false));
        }
        ?>
        <div class="section text-center">
            <div class="row">
                <?php include(__DIR__ . "/about.php") ?>
            </div>
        </div>
    </div>
</div>