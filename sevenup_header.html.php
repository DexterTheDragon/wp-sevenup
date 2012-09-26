<!--[if lte IE 6]>
    <script type="text/javascript" src="<?php echo SEVENUP_URL; ?>scripts/sevenup.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo SEVENUP_URL; ?>scripts/sevenup_black.0.3.min.js"></script>
    <script type="text/javascript">
        var SEVENUP_OPTIONS = {
            enableClosing: <?php echo get_option('sevenup_enableClosing');?>,
            enableQuitBuggingMe: <?php echo get_option('sevenup_enableQuitBuggingMe');?>,
            overlayColor: "<?php echo get_option('sevenup_overlayColor');?>",
            lightboxColor: "<?php echo get_option('sevenup_lightboxColor');?>",
            lightboxBorder: "<?php echo get_option('sevenup_lightboxBorder');?>",
            downloadLink: "<?php echo get_option('sevenup_downloadLink');?>",
            overrideLightbox: <?php echo get_option('sevenup_overrideLightbox');?>,
            showToAllBrowsers: <?php echo get_option('sevenup_showToAllBrowsers');?>,
            lightboxHTML: "<?php echo get_option('sevenup_lightboxHTML');?>"
        };
        window.onload=function(){
            sevenUp.plugin.black.test(SEVENUP_OPTIONS);
        };
    </script>
<![endif]-->
