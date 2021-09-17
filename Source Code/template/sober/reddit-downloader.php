<?php
if (empty($lang) || empty($config) || empty($template_config)) {
    exit();
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION["current_language"]; ?>">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="generator" content="YTDD.io Online Video Downloader YouTube"/>
    <?php
    if ($slug != "" && substr($slug, 0, 1) != "?") {
        $content = content($slug);
        $title = $content["content_title"];
        $description = $content["content_description"];
    } else {
        unset($slug);
        $title = $config["title"];
        $description = $config["description"];
    }
    ?>
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no'
          name='viewport'/>
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $config["author"]; ?>"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:type" content="article">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:site_name" content="<?php echo $title; ?>">
    <link rel="stylesheet" href="<?php echo $config["url"]; ?>/template/sober/css/app.css"/>
    <link rel="stylesheet" href="<?php echo $config["url"]; ?>/template/sober/css/font-awesome.css"/>
    <link rel="shortcut icon" href="<?php echo $config["url"]; ?>/assets/img/favicon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="canonical"
          href="<?php echo $canonical_url ?>"/>
           <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}  .tata {
    display: table;
    font-weight: 600;
    color: #525f7f;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    border-left: 0px !important;
    padding: .625rem 1.25rem;
    border-bottom-left-radius: 0px !important;
    border-top-left-radius: 0px !important;
    line-height: 1.5;
    border-radius: .25rem;
    transition: all .15s ease;
}
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: .625rem .75rem;
    font-weight: 500 !important;
    line-height: 1.5;
    color: #555555 !important;
    background-color: #fff !important;
    background-clip: padding-box;
    border: 4px solid #f00!important;
    border-radius: .25rem;
    border-right: 0px !important;
    box-shadow: none;
    transition: all .2s cubic-bezier(.68,-.55,.265,1.55);
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    z-index: 99;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.h1{
    font-weight:bold !important;
}
.btn-success {
    color: #fff;
    background-color: #ff0000 !important;
    border-color: #ff0000 !important;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
}

.img-thumbnail {
    padding: 0 !important;
    margin-bottom: 24px !important;
    border: 0 !important;
    border-radius: 12px !important;
    box-shadow: -1px 2px 20px 0px rgb(0 0 0 / 79%) !important;
}.text-truncate {
    text-overflow: ellipsis ;font-weight: 700 !important;
    white-space: unset !important;    margin-bottom: 25px;
}#video-details{
    font-weight: 700 !important;
}.btn-outline-primary {
    color: dodgerblue !important;
    border-color: dodgerblue !important;
}a.btn.fuck.btn-sm.badge.btn-outline-primary:hover {
    background: dodgerblue;
    color: white !important;
    outline: dodgerblue;
}
.badge-primary {
    color: #fff;
    background-color:dodgerblue !important;
}
   </style>
</head>
<body id="body" dir="<?php echo $_SESSION["current_language"] == "ar" ? "rtl" : "auto" ?>">

    <nav>
      <a href="/"><div class="logo">
 <span style="color:red;">YT</span>dd.io</div></a>
<input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
<li><a href="./youtube-downloader">YouTube</a></li>
<li><a href="./facebook-downloader">Facebook</a></li>
<li><a href="./twitter-downloader">Twitter</a></li>
<li><a href="./twitch-downloader">Twitch</a></li>
<li><a href="./reddit-downloader">Reddit</a></li>
<li><a href="./privacy-policy">Privacy Policy</a></li>
<li><a href="./terms-of-use">Terms Of Use</a></li>
</ul>
</nav>
<?php
if (isset($template_config["ads"]) == "true") {
    printf('<div class="ad text-center">%s</div>', option("ads.3"));
}
?>
<?php if ($content["content_type"] == 1 || $content["content_type"] == -1)  { ?>
<div class="container mt-8">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title page-title" style="font-weight:bold;">
              Online Reddit Video Downloader
            </h1>
            <div class="form-group">
                <div class="input-group">
                <input name="url" type="url" id="url" class="form-control"
                       placeholder="<?php echo $lang["placeholder"]; ?>">
                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"]; ?>">
                    <button type="button" class="btn btn-secondary btn-paste" id="paste"><i class="far fa-clipboard fa-lg"></i></button>
                <button type="button" class="btn tata btn-success btn-download" data-toggle="popover"
                        data-placement="bottom" data-trigger="manual"
                        data-content="<?php echo $lang["error-alert"] . " " . $lang["try-again"]; ?>"
                        id="send"><i class="fas fa-download"></i> 
                    <?php echo $lang["download"]; ?>
                </button>
              
                </div> 
                <span style="font-weight:800;">Supported Hosts :</span> YouTube, Facebook, IMDB, DailyMotion, Reddit, Vimeo
            </div>
        </div>
    </div>
</div>


<?php } ?>