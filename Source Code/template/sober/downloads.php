<?php
require_once(__DIR__ . "/../../system/config.php");
if (empty($lang) || empty($_GET)) {
    exit();
}
?>
<div class="col-12 mt-5 text-center">
    <h5 class="text-truncate">{{video_title}} <small><span id="video-details">({{video_duration}})</span></small></h5>
    <div class="col-lg-5 col-md-5 col-sm-12 float-left">
        <img src="{{video_thumbnail}}" class="img-thumbnail w-100" alt="{{video_title}}">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12 float-right video-links">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php if ($_GET["video"] == "true") { ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab"
                       aria-controls="video" aria-selected="true"><i
                                class="fas fa-video"></i> <?php echo $lang["video"]; ?></a>
                </li>
            <?php } ?>
            <?php if ($_GET["dash"] == "true") { ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="more-video-tab" data-toggle="tab" href="#morevideo" role="tab"
                       aria-controls="morevideo" aria-selected="true"><i
                                class="fas fa-volume-mute"></i> <?php echo $lang["more-video"]; ?></a>
                </li>
            <?php } ?>
            <?php if ($_GET["audio"] == "true") { ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link <?php echo $_GET["video"] == "false" ? "active" : "" ?>" id="audio-tab"
                       data-toggle="tab" href="#audio" role="tab" aria-controls="audio"
                       aria-selected="<?php echo $_GET["video"] == "false" ? "true" : "false" ?>"><i
                                class="fas fa-volume-up"></i> <?php echo $lang["audio"]; ?></a>
                </li>
            <?php } ?>
        </ul>
        <div class="tab-content" id="myTabContent">
            <?php if ($_GET["video"] == "true") { ?>
                <div class="tab-pane fade show active" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <table class="table text-center text-uppercase">
                        {{video_links}}
                    </table>
                </div>
            <?php } ?>
            <?php if ($_GET["dash"] == "true") { ?>
                <div class="tab-pane fade" id="morevideo" role="tabpanel" aria-labelledby="more-video-tab">
                    <table class="table text-center text-uppercase">
                        {{dash_links}}
                    </table>
                </div>
            <?php } ?>
            <?php if ($_GET["audio"] == "true") { ?>
                <div class="tab-pane fade <?php echo $_GET["video"] == "false" ? "show active" : "" ?>" id="audio"
                     role="tabpanel" aria-labelledby="audio-tab">
                    <table class="table text-center text-uppercase">
                        {{audio_links}}
                    </table>
                </div>
            <?php } ?>
        </div>
        <?php
        if (isset($template_config["ads"]) == "true") {
            printf('<div class="ad text-center">%s</div>', option("ads.4"));
        }
        ?>
    </div>
    
<script>
var  dds = document.getElementsByClassName("btn-sm");
for (var i=0; i < dds.length; i++) {
    dds[i].setAttribute("class", "btn fuck btn-sm badge btn-outline-primary");

}

var els = document.querySelectorAll('a.btn.btn-sm');
for (var i=0; i < els.length; i++) {
    els[i].setAttribute("download", "");

}
</script>
 

</div>

