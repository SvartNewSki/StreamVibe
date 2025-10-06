<?php
namespace app\controllers;

use app\models\News;
use app\models\Tournament;
use core\controllers\WebController;
use core\models\Auth;
use core\models\BaseView;

class HomeController extends WebController
{
    public function index(){
        BaseView::render("main");
    }
}