<?php
use yii\helpers\Html;
use frontend\widgets\post\PostWidget;
use yii\base\Widget;
use frontend\widgets\hot\HotWidget;
use yii\helpers\Url;
?>
<div class="row">
	<div class="col-lg-9">
		<?=PostWidget::widget(['limit'=>10])?>
	</div>

	<div class="col-lg-3">
		<div class="panel">
			<?php if(!\Yii::$app->user->isGuest):?>
					<a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>

			<?php endif;?>
		</div>
<!--		热门浏览-->
		<?=HotWidget::widget()?>
	</div>
</div>
