<?php

namespace kouosl\trouble\controllers\frontend;


class HomeController extends DefaultController
{
    public function actionIndex()
    {
		
		
        return $this->render('index');
    }
	
}
?>