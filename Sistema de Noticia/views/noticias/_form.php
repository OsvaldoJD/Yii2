<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categorias;

/* @var $this yii\web\View */
/* @var $model app\models\Noticias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-form">

    <?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
        'options' => ['enctype' => 'multipart/form-data'],
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'offset' => 'col-sm-offset-1',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
            
        ],
    ],
]); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'conteudo')->textarea(['rows' => 6]) ?>
   <!-- <?= $form->field($model, 'imagem')->textInput(['maxlength' => 36]) ?>-->
    <?= $form->field($model,'file')->fileInput();?>
    
    <?php $dataList = ArrayHelper::map(Categorias::find()->asArray()->all(), 'categoria', 'categoria'); ?>
    
    <?= $form->field($model, 'categoria')->dropDownList($dataList, ['prompt' => 'Escolha uma categoria']) ?>
    
   



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
