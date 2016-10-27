<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Think\View;

class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //$this->display();
        //$name = "izobs";
        //$this->name=$name;
        //$this->assign('name',$name);

        $me['name'] = 'izobs';
        $me['age'] = '29';
        $this->assign('me',$me);


        T('index/index');
        $this->display(T('index/index'));


        //echo "hello world\n";
        //E('新增失败');

        //echo C('name');
        //echo C('sex');

        /*
         * thinkphp 四种URL模式
         *
         *
         * URL_MODEL
         * 默认模式 pathinfo模式 1
         * 普通模式 0
         * 重写模式 2
         * 兼容模式 3
         *
         */
       // echo C('URL_MODEL'),'<br/>';
        //U,模块/方法,arry('id'=>1,'xxxxx.html')
        echo '<br/>';
        echo U('Index/user',array('id'=>1),'html',false,'localhost');
    }

    public function user() {
        //echo 'id is:'.$_GET['id'].'<br/>';
        echo '这里是INDEX控制器的user方法';
        //$user = new Model('user'); //table name
        //$user=M('user');
        //$data=$user->select();
       // $user = new UserModel(); //new UserModel Object
        $user=D('User');
        echo $user->getPerson();

        //dump($data);

        //CURD 操作

        //add 操作
        $data=array(
            'name'=>'xiaohua',
            'age'=>'16',
            'sex'=>'girl',
        );
        echo M('user')->add($data);



    }
}