<?php
// +----------------------------------------------------------------------
// | index.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/1/8 下午4:32
// +----------------------------------------------------------------------
// | Author: Object,半醒的狐狸<2252390865@qq.com>
// +----------------------------------------------------------------------

include_once 'vendor/autoload.php';

$conn = \Pheanstalk\Pheanstalk::create('beanstalkd', 11300, 10);
$conn->useTube('test');

print_r($conn);