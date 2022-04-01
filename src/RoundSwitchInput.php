<?php

/**
 * @file Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 * @author Samuele Longhin
 */

namespace samuelelonghin\form\inputs;

use Yii;
use samuelelonghin\form\inputs\RoundSwitchInputAsset;
use yii\base\Widget;
/**
 * Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 */
class RoundSwitchInput extends Widget
{

    public $field = null;
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

        RoundSwitchInputAsset::register(Yii::$app->view);
        parent::init();
    }

    /**
     * {@inheritdoc}
     */


    protected function run()
    {
        return Yii::$app->view->render('@samuelelonghin/form/inputs/views/switch', [
            'field' => $this->field,
            'active' => $this->active,
            'disabledSwitchText' => '',
        ]);
    }
}
