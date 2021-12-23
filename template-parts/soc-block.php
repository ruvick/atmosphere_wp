<div class="info-index__soc-block-icon soc-block-icon">
<? $insta = carbon_get_theme_option("as_insta"); if (!empty($insta)){?>
	<a href="<? echo $insta; ?>" class="soc-block-icon-link soc-icon-1"></a><?}?>
<? $vk = carbon_get_theme_option("as_vk"); if (!empty($vk)){?>
	<a href="<? echo $vk; ?>" class="soc-block-icon-link soc-icon-2"></a><?}?>
<? $telegr = carbon_get_theme_option("as_telegr"); if (!empty($telegr)){?>
	<a href="<? echo $telegr; ?>" class="soc-block-icon-link soc-icon-3"></a><?}?>
<? $whatsapp = carbon_get_theme_option("as_whatsapp"); if (!empty($whatsapp)){?>
	<a href="<? echo $whatsapp; ?>" class="soc-block-icon-link soc-icon-4"></a><?}?>
</div> 