#!/usr/bin/php
<?php
echo "Removing cPanel Trial Banners...";
$css = file_get_contents("/usr/local/cpanel/base/frontend/paper_lantern/_assets/css/master-ltr.cmb.min.css");
if (strpos($css, "#trialWarningBlock{display:none;}") !== false) 
{
    echo "cPanel trial banner already removed!";
} else {
    file_put_contents("/usr/local/cpanel/base/frontend/paper_lantern/_assets/css/master-ltr.cmb.min.css",$css . "#trialWarningBlock{display:none;}");
    $ltr = file_get_contents("/usr/local/cpanel/whostmgr/docroot/styles/master-ltr.cmb.min.css");
    if (strpos($ltr, "#divTrialLicenseWarning{display:none}") == false) {
        file_put_contents("/usr/local/cpanel/whostmgr/docroot/styles/master-ltr.cmb.min.css",$ltr . "#divTrialLicenseWarning{display:none}");
    }
    echo "cPanel trial banner removed!";
}
?>