<?php
/**
 * 视图层
 * @author opqnext
 * @date 2018-04-20
 * @var $imageUrl string 默认头像地址
 */
use yii\bootstrap\ActiveForm;
?>
<div class="container" id="crop-avatar">

    <!-- Current avatar -->
    <div class="avatar-view" title="Change the avatar">
        <img src="<?=$imageUrl?>" alt="Avatar">
    </div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'avatar-form'],'action'=>['avatar']]) ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="avatar-modal-label">上传头像</h4>
                </div>
                <div class="modal-body">
                    <div class="avatar-body">

                        <!-- Upload image and data -->
                        <div class="avatar-upload">
                            <input type="hidden" class="avatar-src" name="avatar_src">
                            <input type="hidden" class="avatar-data" name="avatar_data">
                            <label for="avatarInput">请选择本地图片</label>
                            <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                        </div>

                        <!-- Crop and preview -->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="avatar-wrapper"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="avatar-preview preview-lg"></div>
                                <div class="avatar-preview preview-md"></div>
                                <div class="avatar-preview preview-sm"></div>
                            </div>
                        </div>

                        <div class="row avatar-btns">
                            <div class="col-md-9">
                                <div class="btn-group">
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">左旋转</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15°</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30°</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45°</a>
                                </div>
                                <div class="btn-group">
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">右旋转</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="15">15°</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="30">30°</a>
                                    <a href="javascript:;" type="button" class="btn btn-primary" data-method="rotate" data-option="45">45°</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" onclick="//document.avatar.submit();" class="btn btn-primary btn-block avatar-save">确定</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
</div>
