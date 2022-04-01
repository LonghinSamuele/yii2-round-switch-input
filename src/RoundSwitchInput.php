<?php

/**
 * @file Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 * @author Samuele Longhin
 */

namespace samuelelonghin\form\inputs;

use kartik\base\InputWidget;
use samuelelonghin\grid\toggle\assets\RoundSwitchThemeAsset;
use Yii;
use yii\bootstrap5\Html;

/**
 * Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 */
class RoundSwitchInput extends InputWidget
{

	public $field = null;
	public $model = null;
	public $attribute = null;
	public $filter = null;
	public $active = true;
	public $disabledSwitchTextAttribute = '';

	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		$this->filter = [
			'1' => Yii::t('yii', 'Yes'),
			'0' => Yii::t('yii', 'No'),
		];
		parent::init();

		if ($this->field) {
			$this->field = Html::checkbox($this->name, $this->value);
		}

		RoundSwitchThemeAsset::register(Yii::$app->view);
	}

	/**
	 * {@inheritdoc}
	 */


	public function run()
	{
		return Yii::$app->view->render('@samuelelonghin/form/inputs/views/switch', [
			'field' => $this->field,
			'name' => $this->name,
			'value' => $this->value,
			'active' => $this->active,
			'disabledSwitchText' => '',
		]);
	}
}
