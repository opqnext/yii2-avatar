<?php
namespace opqnext\avatar;
use opqnext\avatar\assets\AvatarAsset;
use yii\bootstrap\Widget;

/**
 * yii2-avatar 上传头像小部件
 * @author opqnext
 * @date 2018-04-20
 */
class AvatarWidget extends Widget
{
    public $imageUrl = '';

    public function run()
    {
        AvatarAsset::register($this->view);
        return $this->render('index',['imageUrl'=>$this->imageUrl]);
    }
}