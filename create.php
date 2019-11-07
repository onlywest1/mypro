<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbMeetingInfo */
/* @var $form yii\widgets\ActiveForm */
?>
<script src = "./js/meeting/WdatePicker.js"></script>
<div class="tb-meeting-info-form" style="border:1px #000000   solid;">

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


	<div class="form-group field-tbmeetinginfo-meeting_date required">
			<label class="col-lg-3 control-label" for="tbmeetinginfo-meeting_meeting_date">会议起始</label>
		
			<div class = "col-lg-6">
			
				<input id="start" class = "Wdate" type="text"  name = "TbMeetingInfo[day]" onfocus="WdatePicker({ lang:'zh-cn', minDate:'%y-%M-01' ,maxDate:'%y-%M-%ld' })" />		
		
		
			
			start:<select  name = "TbMeetingInfo[start]">
			<?php  
				
			
			for($i=0;$i<25;$i++){	
			
			echo 		'<option value = "'.$i.'">'.$i.'</option>';
					
				
				}
			
			?>
			</select>
		
			
		
			end:<select  name = "TbMeetingInfo[end]">
			<?php
				for($j=0;$j<61;$j++){	
				echo 		'<option value = "'.$j.'">'.$j.'</option>';
					

				}
			
			?>
			
			</select>
			</div>
		<div class="col-lg-3"><div class="help-block"></div></div>
	
	</div>
	
	
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
