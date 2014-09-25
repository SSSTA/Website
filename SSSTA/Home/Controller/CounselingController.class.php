<?php
namespace Home\Controller;
use Think\Controller;
class CounselingController extends Controller {

    /* 提交咨询表
     */
    public function submit($cid = 0, $teacher = '') {
        $dat = I('param.');
        if(count($dat) == 0) return;
        $dat['addtime'] = date('Y-m-d H:i:s');

        if($cid == 0) {
            $model = M('counseling');
            $model->create($dat);
            $id = $model->add();
        } else {
            $model = M('counselingreply');
            $model->create($dat);
            $model->add();
            $id = $cid;
        }

        $this->redirect('Home/Counseling/talk?id='.$id.'&teacher='.$teacher);
    }

    /* 提交成功页面
     */
    public function talk($id = 0, $teacher = '') {
        $reply = M('counselingreply')->where(array('cid' => $id))->order('addtime asc')->select();
        if(!is_array($reply) && ($teacher == '')) {
            $this->display('success');
        } else {
            $this->assign('id', $id);
            $dat = M('counseling')->where(array('id' => $id))->find();
            $this->assign('dat', $dat);
            $this->assign('reply', $reply);
            $this->assign('count', count($reply));
            $this->assign('from', ($teacher == '') ? 0 : 1);
            $this->assign('teacher', $teacher);
            $this->display();
        }
    }

    public function check($page = 1) {
        $dat = M('counseling')->order('addtime desc')->page($page, 1000)->select();
        $model = M('counselingreply');
        foreach($dat as &$one) {
            $one['reply'] = $model->where(array('cid' => $one['id']))->order('addtime asc')->select();
            $one['count'] = count($one['reply']);
        }
        # dump($dat);
        # die();
        $this->assign('dat', $dat);
        $this->display();
    }

}