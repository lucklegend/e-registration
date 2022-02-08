<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>DOST III Regional Science and Technology Week</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono" rel="stylesheet">
<style type="text/css">
	html, body{
		font-family: 'Roboto', sans-serif;
		width: 100%;
		height: 100%;
		min-height: 100%;
		padding: 0;
		margin: 0;
		border: 0;
	}

	.barcode{
		font-family: 'Roboto Mono', monospace;
		display: inline-block;
		text-align: center;
		margin: 0 auto;
		border: 1px dashed #666666;
		padding: 8px;

	}

	.event-title{
		font-family: 'Roboto Condensed', sans-serif;
		font-size: 12px;
	}

	.barcode-numbers{
		font-family: 'Roboto Mono', monospace;
		font-size: 12px;
	}

</style>
<body>
<?php
header('Content-Transfer-Encoding: base64');
header('Content-Type: multipart/alternative');
$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
$barcode = $visitor->vis_code;
$barcodeImage = '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcode, $generator::TYPE_CODE_128)) . '" alt="'.$barcode.'" style="height: auto;width: 250px;">';
//echo $barcodeImage;
//saving barcode
$imgdata = $generator->getBarcode($barcode, $generator::TYPE_CODE_128);
$savepath = realpath(public_path('uploads/barcodes/')).DIRECTORY_SEPARATOR.$barcode.'.png';
// file_put_contents($savepath, $imgdata);
?>
Warm greetings from DOST Region 3!,
<br>
<br>
You have been registered to the <strong><?php echo e($event->event_title); ?></strong> from <strong><?php echo e(date('F j, Y', strtotime($event->event_from))); ?></strong> to <strong><?php echo e(date('F j, Y', strtotime($event->event_to))); ?></strong> at Bulwagan ng Kanlahi (Diwa ng Tarlak), Romulo Boulevard, Tarlac City, Tarlac
<br>
<br>
<h4>Registration Details : </h4>
<div><?php echo e($visitor->vis_name); ?></div>
<div><?php echo e($visitor->vis_company); ?></div>
<div><?php echo e($visitor->class_name); ?></div>

<?php
if ($visitor->vis_day > 0){
?>
<div>Planned to attend on the <?php echo e($visitor->vis_day); ?></div>
<?php
}
?>
<br>
<br>
<h3>For your convenience, please print this message and present it at the venue :</h3>
<br>
<div style="border:1px dashed black; text-align: center;overflow-wrap: break-word; display: inline-block;">
<?php echo $barcodeImage; ?>

<br>
<span style="text-align: center;"><?php echo e($barcode); ?></span>	
<!-- <img src="<?php echo e(url('/uploads/barcodes').'/'.$visitor->vis_code.'.png'); ?>" style="height: auto;width: 250px;"> -->
</div>
<br>
<br>
Thank you,
<br>
Department of Science and Technology Regional Office III
<br>
<a href="http://region3.dost.gov.ph">http://region3.dost.gov.ph</a>
<br>
<br>
This message was sent via automailer. Please do not send a reply.
</html>