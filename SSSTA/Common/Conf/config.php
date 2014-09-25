<?php
return array(
	//'配置项'=>'配置值'

	'DB_TYPE'   => 'mysql',			// 数据库类型
	'DB_HOST'   => 'localhost', 	// 服务器地址
	'DB_NAME'   => 'app_sssta', 	// 数据库名
	'DB_USER'   => 'root', 			// 用户名
	'DB_PWD'    => 'root', 			// 密码
	'DB_PORT'   => 3306, 			// 端口

	'URL_HTML_SUFFIX' => '',        // URL 伪静态后缀

	'UPLOAD_SITEIMG_QINIU' => array ( 
		'maxSize' => 5 * 1024 * 1024,
		'rootPath' => './',
		'saveName' => array ('uniqid', ''),
		'driver' => 'Qiniu',
		'driverConfig' => array (
			'secrectKey' => '2j4C5VBt6si7HKU8BQg4h0STW1dM1G8rP-F0uYR4', 
			'accessKey'  => '_0SQ89fimxelQyPJbZ1v3TxEk_lcZF1_Wh3JXZ3x',
			'domain' => 'sssta.qiniudn.com',
			'bucket' => 'sssta', 
		)
	)
);