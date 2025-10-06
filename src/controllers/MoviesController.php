<?php
namespace app\controllers;

use core\controllers\WebController;
use core\models\BaseView;

class MoviesController extends WebController
{
    public function movies(){
        BaseView::render("movies");
    }
}