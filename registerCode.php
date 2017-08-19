<?php
	header('Content-Type:text/html;charset=utf-8');

	$mobile = $_POST['mobile'];

	$arr = array(
		'code'=>10000,
		'msg'=>'获取短信验证码成功!',
		'result'=>array(
			'time'=> 10,
			'mobile' =>$mobile
		)
	);

    echo json_encode($arr);

	sleep(1);
?>