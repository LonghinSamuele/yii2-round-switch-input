<?php

/**
 * Round switch view.
 * @project yii2-round-switch-column
 * @author Samuele Longhin
 *
 * @var $active boolean
 * @var $disabledSwitchText string
 * @var $field string
 */
?>
<label class="yii2-round-switch-input <?= ($active ? '' : 'disabled') ?> right">
    <?= $field ?>
    <div class="slider round"></div>
</label>
<?= ($active ? '' : $disabledSwitchText) ?>