<?php 
use yii\bootstrap\NavBar;

?>
<!DOCTYPE html>
<?php $this->beginPage(); ?>
<html>
<head>
	<title>Learn Yii</title>
	<?php $this->head(); ?>
</head>
<body>
<?php  $this->beginBody() ?>
<?php 
   NavBar::begin([
    'brandLabel' => 'MyBrand', // Brand
    'brandUrl'   => Yii::$app->homeUrl, // base URL
    'options' => [
       'class' => 'navbar-default navbar-fixed-top'
    ]
 ]);

  NavBar::end();
?>
 
  <div class="container" style="margin-top: 70px;">
  	 <?= $content ?>
  </div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>