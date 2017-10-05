<?php
class ErrorController {
    public static function handleAction($e) {
        var_dump($e);
        echo "exception handle action<br>";
        LisView::assign("var1", "var1");
        LisView::render("error/index", ["var2" => "var2"]);
    }  
}
