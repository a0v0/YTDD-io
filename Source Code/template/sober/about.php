<?php
if (empty($lang) || empty($template_config)) {
    exit();
}
?>
<?php if (isset($template_config["about"]) == "true") { ?>
    <div class="col-md-12 ml-auto mr-auto mt-0">

      <hr> 
         <div class="text-center">
<h2><strong>How to Download From YouTube</strong></h2>
<div  style="text-align: left !important;">
<p><b style="font-weight: 600;">Tip :</b> Insert "<b><?php echo date("Y");?></b>" after or before the word "youtube" in the link to download videos and mp3 files from YouTube as a faster way.</p>
 <p style="text-align:center;"><img id="currimg" alt="tip how to quick download youtube video mp3" height="auto" style="max-width: -webkit-fill-available;" src=""> </p>
 <script>var dss = new Date();document.getElementById("currimg").src = "/template/sober/img/ytimg/"+dss.getFullYear()+".jpg";</script>

<p>If you can’t directly download video to your PC, please follow the guidelines below :</p>
<p><b style="font-weight: 600;">Step1 :</b> Select the format you want and click "Download" button. </p>
<p><b style="font-weight: 600;">Step2 :</b> In new window, press "CTRL + S" to save video OR right click to video, then select "Save as Video".</p>
</p></div>
</div>
       <hr> 
         <div class="text-center">
<h2><strong>YTDD.io Online Video Downloader</strong></h2>
<p style="text-align: justify;">
YTDD.io allows you to convert &amp; download video from YouTube, Facebook, IMDB, DailyMotion, Reddit, Vimeo etc. to Mp3, Mp4 in HD quality. YTDD.io supports downloading all video formats such as: MP4, M4V, 3GP, WMV, FLV, MO, MP3, WEBM, etc. You can easily download for free thousands of videos from YouTube and other websites. Read <a href="./terms-of-use">Terms Of Use</a> and <a href="./privacy-policy">Privacy Policy</a> before using.</p>
</div><hr> 
         <div class="text-center">
<h2><strong>Supported Sites</strong></h2>
 <div class="row justify-content-center text-left">
                            <?php
                            $websites = get_supported_websites();
                            foreach ($websites as $site) {
                                if (empty($site["slug"])) {
                                    $slug = $site["name"] . "-" . $site["type"] . "-downloader";
                                } else {
                                    $slug = $site["slug"];
                                }
                                if (empty($site["text"])) {
                                    $title = ucwords($site["name"]);
                                } else {
                                    $title = $site["text"];
                                }
                                echo '<div class="col-sm-6 col-xs-6 col-md-2 col-lg-2 mt-3 w-50">';
                                $link = '<a class="text-sm" style="color: ' . $site["color"] . ';" href="' . $config["url"] . '/' . $slug . '">' . $title . '</a>';
                                printf('<img src="%s" class="img-fluid w-25" alt="%s logo"><span style="" class=""> <small>%s</small></span>', $config["url"] . "/template/sober/img/sources/" . $site["name"] . ".svg", $title, $link);
                                echo '</div>';
                            }
                            ?>

                        </div></div>
<style>

@media only screen and (min-width: 768px) {
  .bbz{
display:flex;
  }
}
</style>
<hr>
<div class="bbz">
<div class="col-sm-4">
<i class="fas fa-gift"
        style="color: dodgerblue;font-size: xxx-large;"  ></i>
<h3><strong>Free Download</strong></h3>
<p>Unlimited conversion and free download.</p>
</div>
<div class="col-sm-4">
<i class="fas fa-video"
        style="color: red;font-size: xxx-large;"  ></i>
<h3><strong>Video &amp; Audio</strong></h3>
<p>Directly Download Video &amp; Music.</p>
</div>
<div class="col-sm-4">
<i class="fas fa-download"
       style="color: dodgerblue;font-size: xxx-large;"></i>
<h3><strong>Easy Download</strong></h3>
<p>Fully compatible with all browsers.</p>
</div>
</div><hr>
<div class="bbz">
<div class="col-xs-12 col-sm-7 text-left">
<h5><strong>Instructions</strong></h5>
<p>1. Paste the link of video you want to download.</p>
<p>2. Click "Start" button to begin converting process</p>
<p>3. Select the video/audio format you want to download, then click "Download" button</p>
</div>
<div class="col-xs-12 col-sm-5 text-left">
<h5><strong>Features</strong></h5>
<p>• Unlimited downloads and always free</p>
<p>• High-speed video converter</p>
<p>• No registration required</p>
<p>• Support downloading with all formats</p>
</div>
</div>

 <hr>
<style>.darker{font-family: 'Poppins', sans-serif !important;color:#32325d;
    font-weight: 600 !important;
}</style>
<div style="text-align:left;">
<h4 class="darker">Questions and Answers</h4>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">What is the fastest way to download Youtube videos?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>
<ol>
<li>Access the Youtube URL you need to download.</li>
<li>Add "<strong><?php echo date("Y");?></strong>" before or after the word "youtube" then click "Enter". For example: youtube.com/watch?v=1PJIqpLInrw =&gt; youtube<?php echo date("Y");?>.com/watch?v=1PJIqpLInrw OR <?php echo date("Y");?>youtube.com/watch?v=1PJIqpLInrw</li>
<li>Select the file format you wish then click to "Download" button.</li>
</ol>
</div>
</div>
</div>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">Is there any limit on the amount of downloaded files applied for users?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>No. Our website allows users to convert and download unlimited amount of file and for free.</div>
</div>
</div>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">What are the supported video/audio formats?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>We offer a ton of conversion options and allow you to download MP4, 3GP, MP3 format. You can watch video right after that on your device without installing any other software.</div>
</div>
</div>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">What are the compatible devices for the conversion?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>We offer the service that is compatible with all PC devices, smart phones and tablets.</div>
</div>
</div>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">How to download Youtube video to Android mobile phone?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>
<ol>
<li>Access Youtube from your browser or open Youtube app on your Android device; after that, coppy the video URL you wish to download.</li>
<li>Paste the URL into the search box. You also can enter keyword to look for the video you wish.</li>
<li>Select the format you wish to download then tap "Download". After a few seconds, you can download the file.</li>
</ol>
</div>
</div>
</div>
<div class="faq_item">
<div class="faq_item_title">
<h5 class="darker">Where do the downloaded files get saved?</h5>
</div>
<div id="divId" class="faq_item_content">
<div>Files you've downloaded are automatically saved in the Downloads folder or the "download history" section on your device.</div>
</div>
</div>

</div>




</div>
  
<?php } ?>