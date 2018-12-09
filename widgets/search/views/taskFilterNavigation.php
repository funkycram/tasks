<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\tasks\widgets\search\TaskFilterNavigation;
use yii\helpers\Html;
use humhub\modules\ui\filter\widgets\FilterPanel;
use humhub\modules\tasks\widgets\search\TextFilterInput;

/* @var $this \humhub\components\View */
/* @var $panels [] */
/* @var $options [] */

$title = $panels[TaskFilterNavigation::PANEL_POSITION_TOP][0]['filters'];
$checkboxes = $panels[TaskFilterNavigation::PANEL_POSITION_BOTTOM_LEFT];
$picker = $panels[TaskFilterNavigation::PANEL_POSITION_BOTTOM_CENTER];


?>

<?= Html::beginTag('div', $options) ?>

    <div class="row">
        <div class="col-md-12">
            <?= TextFilterInput::widget($title[0]) ?>
        </div>

    </div>

<div class="filter-root">
    <div class="row task-bottom-panel">
        <?= FilterPanel::widget(['blocks' => $checkboxes, 'span' => 2]) ?>
        <?= FilterPanel::widget(['blocks' => $picker, 'span' => 2]) ?>
    </div>
</div>


<?= Html::endTag('div') ?>