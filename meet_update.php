<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\TbMeetingInfo */

$this->title = 'Update Tb Meeting Info: {nameAttribute}';
// $this->params['breadcrumbs'][] = ['label' => 'Tb Meeting Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->meeting_id, 'url' => ['view', 'id' => $model->meeting_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-meeting-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

	
	    <?php $form = ActiveForm::begin([
		'options'=>['class' => 'form-horizontal','name'=>'reg_testdate'],
				'fieldConfig' => [ 
					'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>",
					'labelOptions' => ['class' => 'col-lg-3 control-label'],
				],	
		
		
		
	]); ?>

    <?= $form->field($model, 'meeting_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_department')->dropDownList(ArrayHelper::map($model->getDepart(),'department_id','department_name')) ?>

    <?= $form->field($model, 'meeting_place')->dropDownList(ArrayHelper::map($model->getRoom(),'roomid','roomname')) ?>
  
	<?= $form->field($model, 'meeting_start')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'meeting_end')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'meeting_host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_present')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_saver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_abstruct')->textarea(['rows'=>3]) ?>

    <?= $form->field($model, 'meeting_address')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	
	
</div>
