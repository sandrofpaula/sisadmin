<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use kartik\depdrop\DepDrop;//
use kartik\widgets\SwitchInput;

use app\modules\admin\models\Modulo;
use app\modules\admin\models\Perfil;
//use app\modules\admin\models\Unidade;

use yii\bootstrap\Modal;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Perfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-user "></i> <?= 'Cadastrar Usuário' ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'modulo_cod_fk')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(Modulo::find()->asArray()->all(), 'modulo_cod_pk', 'modulo_descricao'),
                                'pluginOptions'=>[
                                    'placeholder'=>'- Selecione - ',
                                // 'allowClear' => true,
                                    // 'minimumInputLength' => 1,
                                    // 'multiple' => true
                                ]
                            ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'perfil_descricao')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'perfil_status')->widget(SwitchInput::classname(), [
                            'data' => [1 => "ATIVO", 0 => "INATIVO"],
                            'pluginOptions'=>[
                                'handleWidth'=>60,
                                'onText'=>'ATIVO',
                                'offText'=>'INATIVO',
                                'onColor' => 'success',
                                'offColor' => 'danger',
                               // 'allowClear' => true,
                                // 'minimumInputLength' => 1,
                            ]
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>



    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
