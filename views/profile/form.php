<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <p>
            This is a sample profile form in Yii2!
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>

                    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
                    
                    <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'dob') ?>

                    
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'profile-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>
