<?php

use yii\base\Widget;
use frontend\widgets\banner\BannerWidget;

$this->title = '博客-首页';
?>

<div class="row">
	<div class="col-lg-9">
<!--		图片轮播-->
		<?=BannerWidget::widget()?>

		<!--文章列表-->
		<?=\frontend\widgets\post\PostWidget::widget()?>
	</div>

	<div class="col-lg-3">
<!--		留言板-->
		<?=\frontend\widgets\chat\ChatWidget::widget()?>

<!--		热门浏览-->
		<?=\frontend\widgets\hot\HotWidget::widget()?>
	</div>


</div>
