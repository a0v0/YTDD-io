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
        if ($content["content_type"] != 0) {
            $content = content("home");
            echo $content["content_text"];
        }
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center mt-1 mb-0">%s</div>', option("ads.1", false));
        }
        ?>
        <div class="section text-center">
            <div class="row">
                <?php include(__DIR__ . "/about.php") ?>
            </div>
        </div>
        <div class="section text-center pb-4 pt-0">
            <?php if (isset($template_config["latest-downloads"]) == "true") { ?>
                <h2 class="title"><?php echo $lang["latest-downloads"]; ?></h2>
                <?php
                $downloads_list = database::list_downloads(6);
                $temp_array = array();
                $items = "";
                for ($i = 0; $i < count($downloads_list); $i++) {
                    $meta = json_decode($downloads_list[$i]["download_meta"], true);
                    if (!in_array($meta['thumbnail'], $temp_array)) {
                        $items .= '<div class="col-2"><img class="img-thumbnail" src="' . $meta['thumbnail'] . '" alt="slide ' . $i . '" onerror="this.src=\'https://via.placeholder.com/200\';"><a href="' . $meta["video_url"] . '" rel="nofollow">' . $meta['title'] . '</a></div>';
                        array_push($temp_array, $meta['thumbnail']);
                    }
                }
                ?>
                <div class="row justify-content-center">
                    <?php echo $items; ?>
                </div>
                
                <div class="text-center">
<h2><strong>YouTube Video Downloader</strong></h2>
<h4>
Y2mate allows you to convert &amp; download video from YouTube, Facebook, Video, Dailymotion, Youku, etc. to Mp3, Mp4 in HD quality. Y2mate supports downloading all video formats such as: MP4, M4V, 3GP, WMV, FLV, MO, MP3, WEBM, etc. You can easily download for free thousands of videos from YouTube and other websites. </h4>
</div>
            <?php } ?>
        </div>
    </div>
</div>