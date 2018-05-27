<?php

namespace kouosl\trouble\controllers\frontend;


class HomeController extends DefaultController
{
    public function actionIndex()
    {
		
		$renkler=['beyaz','sari','kirmizi'];
		$data=[
			'tarih' => '15.03.18',
			'renkler' => $renkler
		];
        return $this->render('index',$data);
    }
	public function actionSaat()
	{
		$saat=(int)date("h");
		$mesaj="merhaba";
		if($saat<12 && $saat>7)
			$mesaj="gunaydin";
		if($saat<17 && $saat>12)
			$mesaj="iyi gunler";
		if($saat<24 && $saat>17)
			$mesaj="iyi aksamlar";
		$data["saat"]=$saat;
		$data["mesaj"]=$mesaj;
		return $this->render('saat',$data);
	}
}
?>