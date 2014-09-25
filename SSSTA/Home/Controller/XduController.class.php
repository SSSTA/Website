<?php
namespace Home\Controller;
use Think\Controller;
class XduController extends Controller {

	public function rsinput() {
		if( IS_POST ) {
			$model = M('rs_invite');
			$ip = I('ip');
			$ips = explode("\n", $ip);

			foreach ($ips as $one) {
				$pos1 = strpos($one, 'id=') + 3;
				$pos2 = strpos($one, '&amp;c=', $pos1);
				$dat['id'] = substr($one, $pos1, $pos2 - $pos1);
				$pos2 += 7;
				$pos3 = strpos($one, ' ', $pos2);
				$dat['c'] = substr($one, $pos2, $pos3 - $pos2);
				$model->add($dat);
			}
		}
		$this->display();
	}

	public function rsinvite($wechatid = '') {
		$this->display();
	}

	public function rscheck($wechatid = '', $sid, $name) {
		$model = M('rs_invite');
		if($model->where(array('sid' => $sid))->count()) {
			$this->used = 1;
			$this->display();
			return;
		}
		$ret = $model->where(array('used' => 0))->find();
		$dat = I('param.');
		$dat['used'] = 1;
		$model->where(array('id' => $ret['id']))->save($dat);
		$this->rs = $ret;
		$this->used = 0;
		$this->display();
	}

}