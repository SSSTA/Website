<?php
namespace Hacks\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
        $this->display('Index/Index');
    }
}