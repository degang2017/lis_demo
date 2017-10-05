<?php
class HomeController extends LisMyController {

    public function __construct() {
        parent::__construct();
    }  

    public function indexAction() {
        echo '<p><red>home index action</red><p><p>';
        var_dump(LisConfig::get('app.redis.host'));
        LisView::render('home/index', '');
    }  

    public function userInfoAction() {
        echo 'method:'.LisRequest::getMethod().'<br>';
        Util::test();
        print_r($_GET??'');
        echo '<p><red>home test action</red><p><p>';
    }  
}
