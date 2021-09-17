<?php
if (empty($lang) || empty($config)) {
    exit();
}
?>

<?php
option("tracking_code", true);
option("gdpr_notice", true);
printf('<script> var download_text = "%s";</script>', $lang["download"]);
?>
<div class="py-4" style="background:#1b1b1b;">
      <div class="container text-center">
        <p class="mb-0 py-2" style="font-family: 'Poppins', sans-serif;color: #fff;font-weight: 500;">©  <script>var dss = new Date();document.write(dss.getFullYear())</script> YTDD.io All rights reserved.</p>
      </div>
    </div>
<style>.section .text-center .pb-4 .pt-0{display:none;}
.section {
  
    padding-bottom: 0 !important;
}</style>
<script src="<?php echo $config["url"]; ?>/template/sober/js/compressed.js" type="text/javascript"></script>
<script src="<?php echo $config["url"]; ?>/template/sober/js/app.js" type="text/javascript"></script>
</body>
</html>