<?php

/**
 * Round switch view.
 * @project yii2-round-switch-column
 * @author Samuele Longhin
 *
 * @var $active boolean
 * @var $name string
 * @var $value boolean
 * @var $disabledSwitchText string
 * @var $field string
 */
?>
    <input type="hidden" name="<?= $name ?>" value="0">
    <label class="yii2-round-switch <?= ($active ? '' : 'disabled') ?> right">
		<?= $field ?>
        <div class="slider round"></div>
    </label>
<?= ($active ? '' : $disabledSwitchText) ?>