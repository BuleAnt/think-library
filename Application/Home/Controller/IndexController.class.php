<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 主页模块
 */
class IndexController extends HomeController {

	protected function _initialize(){
		$this->assign('pagetab','Index');
	}
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	
    	$article = D('Article');
    	$data = array();
    	$data['status'] = 1;


    	//一般给5行
    	$data['type'] = 4;
    	$rgzn = $article->where($data)->select();

    	$data['type'] = 5;
    	$jzpx = $article->where($data)->select();

    	$data['type'] = 7;
    	$tgzn = $article->where($data)->select();

    	$data['type'] = 9;
    	$gzdt = $article->where($data)->select();

    	$data['type'] = 11;
    	$yjya = $article->where($data)->select();

    	$this->assign('rgzn',$rgzn);
    	$this->assign('jzpx',$jzpx);
    	$this->assign('tgzn',$tgzn);
    	$this->assign('gzdt',$jzpx);
    	$this->assign('yjya',$tgzn);

    	$this->display();
    }
}