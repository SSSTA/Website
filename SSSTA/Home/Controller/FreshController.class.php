<?php
namespace Home\Controller;
use Think\Controller;
class FreshController extends Controller {

    /* 提交申请表
     */
    public function submit() {
        $modelApply = M('apply');
        $dat = I('param.');
        if(count($dat) == 0) return;
        $dat['addtime'] = date('Y-m-d H:i:s');
        $modelApply->create($dat);
        $id = $modelApply->add();

        if(is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $upload = new \Think\Upload(C('UPLOAD_SITEIMG_QINIU')); // 使用七牛云
            //$upload->rootPath = './striker/';
            $upload->savePath = 'Fresh/';
            $upload->saveName = (string)$id;
            $upload->replace = true;            // 替换重名
            $upload->autoSub = false;           // 不建立子文件夹（如日期）
            $upload->hash = false;              // 无需校验
            $ret = $upload->uploadOne($_FILES['photo']);
            $modelApply->where(array('id' => $id))->setField('photourl', $ret['url']); // $a['savepath'].$a['savename']; // 存储图片路径
        }
        $this->redirect('success?id='.$id);
    }

    /* 提交成功页面 老
     */
    public function apply($id) {
        $this->redirect('success?id='.$id);
    }

    /* 提交成功页面
     */
    public function success($id) {
        $this->assign('id', (int)$id);
        $this->display();
    }

    /* 面试页
     */
    public function interview($er = '', $id = '') {
        $modelApply = M('apply');
        $ret = $modelApply->where(array('id' => $id))->find();
        $this->assign('dat', $ret);
        $this->assign('appendList', explode(',', $ret['append']));
        $this->assign('er', $er);
        $this->display();
    }

    /* 面试页
     */
    public function all($er = '') {
        $modelApply = M('apply');
        $ret = $modelApply->order('addtime,id')->select();
        $this->assign('count', count($ret));
        $this->assign('distinct', count($modelApply->distinct(true)->getField('name', true)));
        $this->assign('judged', $modelApply->where(array('c3' => array('neq', '0')))->count());
        $this->assign('success', $modelApply->where(array('c4' => array('eq', '1')))->count());
        $this->assign('dat', $ret);
        $this->assign('er', $er);
        $this->display();
    }

    /* 提交面试结果
     */
    public function set($er, $id, $level = 0, $score = 0, $append = '') {
        $modelApply = M('apply');
        $map['id'] = (int)$id;
        if($level != 0) {
            $modelApply->create(array('c'.$level => $score, 'p'.$level => $er));
        } elseif($append != '') {
            $modelApply->create(array('append' => $append));
        }
        $modelApply->where($map)->save();
        // dump($modelApply);
        // die();
        redirect('interview?er='.$er.'&id='.$id);
    }

}