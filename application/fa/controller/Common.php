<?php
namespace app\fa\controller;

use think\Controller;
use think\facade\Request;

class Common extends Controller
{
    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $controller = strtolower(Request::controller());
        $this->assign('controller',$controller);
        $action= strtolower(Request::action());
        $this->assign('action',$action);
        $auth = new \app\fa\model\Authorize();
        $menus= $auth->getList(2);
        $this->assign('menus',$menus);
    }
}