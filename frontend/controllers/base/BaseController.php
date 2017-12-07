<?php
/**
 * Created by PhpStorm.
 * User: 于夢飞
 * Date: 2017/12/3
 * Time: 20:41
 */
namespace frontend\controllers\base;
/*
 *  基础控制器
 */
use yii\web\Controller;

class BaseController extends Controller
{
	public function beforeAction($action)
	{
		if(!parent::beforeAction($action))
		{
			return false;
		}
		return true;
	}
}