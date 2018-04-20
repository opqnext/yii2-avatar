yii2-avatar

#### 教程

这是一款基于 Yii2.0 的上传头像小部件。

这个小部件怎么用呢？

1. 安装

```php
composer require "opqnext/yii2-avatar:dev-master"
```

2. 使用

在试图文件的头像展示位添加以下内容：

```php
// imageUrl 是当前用户头像地址(当前未上传头像则为默认图片)
<?= \opqnext\avatar\AvatarWidget::widget(['imageUrl'=>'https://image.opqnext.com/logo.jpg'])?>
```

如果样式有偏差，可以使用如下代码微调样式:

```php
<?php
$cssString = ".modal-dialog{left:auto;width:900px;}";
$this->registerCss($cssString);
?>
```
点击确定小部件会提交form表单，提交地址为 `actionAvatar` 所以需要在该控制器添加此方法。

方法内容如下：

```php
// 注意按需分配图片上传地址。
$clip = new ClipUploadAvatar(
    isset($_POST['avatar_src']) ? $_POST['avatar_src'] : null,
    isset($_POST['avatar_data']) ? $_POST['avatar_data'] : null,
    isset($_FILES['avatar_file']) ? $_FILES['avatar_file'] : null,
    \Yii::getAlias('@webroot').'/img/avatar'
);
$response = array(
    'state'  => 200,
    'message' => $clip->getMsg(),
    'result' => \Yii::getAlias('@web').'/img/avatar/'.$clip->getResult()
);

echo json_encode($response);die;
```

如有问题，欢迎加入 QQ群:452209691 共同探讨。

参考内容：https://github.com/org-yii-china/yii2-avatar