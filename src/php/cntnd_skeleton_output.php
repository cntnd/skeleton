<?php
// cntnd_SKELETON_output
$cntnd_module = "cntnd_SKELETON";

// includes
cInclude('module', 'includes/class.cntnd_SKELETON.php');

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// editmode
$editmode = cRegistry::isBackendEditMode();

// input/vars
$truncate = (bool) "CMS_VALUE[1]";
$lines = (int) "CMS_VALUE[2]";
if (empty($lines)){
  $lines = 5;
}
$own_js = (bool) "CMS_VALUE[3]";
$selectedDir = "CMS_VALUE[4]";

// other vars
$uuid = rand();
$text = "CMS_HTML[1]";
$SKELETON = new Cntnd\Skeleton\CntndSkeleton($lang, $client);

// module
if ($editmode){
    echo '<span class="module_box_outer" data-module="'.$cntnd_module.'" data-uuid="'.$uuid.'"><span class="module_box_inner"><label class="module_label">'.mi18n("MODULE").'</label></span></span>';
}

$tpl = cSmartyFrontend::getInstance();
$tpl->assign('truncate', $truncate);
$tpl->assign('uuid', 'idart'.$idart);
$tpl->assign('text', $text);
$tpl->display('default.html');

if ($editmode){
    echo '<span class="module_box_end" style="clear: both;" data-module="'.$cntnd_module.'" data-uuid="'.$uuid.'"></span>';
}
?>
