echo "Removing cPanel Trial Banners....";
$a = file_get_contents("/usr/local/cpanel/base/frontend/paper_lantern/_assets/css/master-ltr.cmb.min.css");
if(strpos($a, "#trialWarningBlock{display:none;}") !== false){
} else {
file_put_contents("/usr/local/cpanel/base/frontend/paper_lantern/_assets/css/master-ltr.cmb.min.css",$a . "#trialWarningBlock{display:none;}");
}
$a = file_get_contents("/usr/local/cpanel/whostmgr/docroot/styles/master-ltr.cmb.min.css");
if (strpos($a, "#divTrialLicenseWarning{display:none}") !== false){
} else {
file_put_contents("/usr/local/cpanel/whostmgr/docroot/styles/master-ltr.cmb.min.css",$a . "#divTrialLicenseWarning{display:none}");
}