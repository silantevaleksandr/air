<?php
namespace Pattern;
/*spl_autoload_register(function ($class) {
    include $class.'.php';
});*/
require_once '\TCPDF-master\tcpdf.php';
include 'Pattern\Factory.php';
include 'Pattern\Pattern.php';

use tcpdf;

class Main
{
  private $objectsPage = array(); //имена объектов на странице
  private $pdf;
  function __construct()
  {
    $arrayGET = [
      ['typeDoc'=>0,
      'filename'=>'123',
      'surname' => 'Силантьев',
      'name' => 'Александр Викторович',
      'nationality' => 'Россия',
      'bd' => '31.12.1994',
      'gender' => 1,
      'state' => 'Россия',
      'city' => 'Волгоград',
      'passport' => 'Паспорт',
      'passportSN' => '1234 567890123',
      'dateissue' => '02.02.2005',
      'validity' => '02.02.2025',
      'typeDocRF' => '1',
      'visaSN' => '1234 567890123',
      'dateissueRF' => '19.12.2015',
      'validityRF' => '19.12.2017',
      'purpose' => '6',
      'profession' => 'Программист',
      'dateEntryRF' => '19.12.2015',
      'dateExitRF' => '19.12.2017',
      'migrationSN' => '1234 5678901',
      'infoLegalRepres' => 'СведенияозаконныхпредставленияхСведения',
      'prevAddress' => 'Волжский Пионерская 19',
      'regionArrival' => 'Волгоградская',
      'areaArrival' => 'Красноармейский',
      'cityArrival' => 'Волгоград',
      'streetArrival' => 'Чекистов',
      'houseArrival' => '54',
      'housingArrival' => '',
      'buildingArrival' => '',
      'roomArrival' => '780',
      'phoneArrival' => '1234567890',
      'typeHost' => '2',
      'surnameHost' => 'Иванов',
      'nameHost' => 'Иван Иванович',
      'bdHost' => '05.11.1985',
      'passportHost' => 'Паспорт',
      'passportHostSN' => '1234 567890123',
      'dateissueHost' => '05.05.2012',
      'validityHost' => '05.05.2022',
      'regionHost' => 'Волгоградская',
      'areaHost' => 'Центральный',
      'cityHost' => 'Волгоград',
      'streetHost' => 'Дружбы',
      'houseHost' => '145',
      'housingHost' => '',
      'buildingHost' => '',
      'roomHost' => '69',
      'phoneHost' => '0987654321',
      'nameOrgan' => 'ОАО Организация',
      'factAddress' => 'Волжский Пионерская 19 30',
      'innHost' => '123456789012',],
      ['typeDoc'=>1,
      //'filename'=>'124',
      'surname' => 'Иванов',
      'name' => 'Иван',
      'nationality' => 'Литва',
      'bd' => '10.10.1990',
      'gender' => 1,
      'state' => 'Литва',
      'city' => 'Клайпеда',
      'passport' => 'Паспорт',
      'passportSN' => '1 567890123',
      'dateissue' => '15.10.2012',
      'validity' => '15.10.2022',
      'typeDocRF' => '1',
      'visaSN' => 'М7 03058865',
      'dateissueRF' => '01.04.2012',
      'validityRF' => '30.09.2012',
      'purpose' => '4',
      'profession' => '',
      'dateEntryRF' => '30.08.2012',
      'dateExitRF' => '31.03.2013',
      'migrationSN' => '2711 0523645',
      'infoLegalRepres' => '',
      'prevAddress' => '',
      'regionArrival' => '',
      'areaArrival' => '',
      'cityArrival' => 'Калининград',
      'streetArrival' => 'Генерала Соммера',
      'houseArrival' => '23',
      'housingArrival' => '',
      'buildingArrival' => '',
      'roomArrival' => '',
      'phoneArrival' => '',
      'typeHost' => '1',
      'surnameHost' => 'Клемешев',
      'nameHost' => 'Андрей Павлович',
      'bdHost' => '',
      'passportHost' => 'Паспорт',
      'passportHostSN' => '2711 370227',
      'dateissueHost' => '14.11.2011',
      'validityHost' => '',
      'regionHost' => '',
      'areaHost' => '',
      'cityHost' => 'Калининград',
      'streetHost' => 'Куйбышева',
      'houseHost' => '40',
      'housingHost' => '',
      'buildingHost' => '',
      'roomHost' => '62',
      'phoneHost' => '',
      'nameOrgan' => 'бфу им И Канта',
      'factAddress' => '236041 Калининград Александра Невского 14',
      'innHost' => '3906019856',],
      ];
    $this->objectsPage=[
      ['surname','name','nationality','bd','gender','state','city','passport',
      'passportSN','dateissue','validity','typeDocRF','visaSN','dateissueRF',
      'validityRF','purpose','profession','dateEntryRF','dateExitRF','migrationSN',
      'infoLegalRepres','prevAddress','regionArrival','areaArrival','cityArrival',
      'streetArrival','houseArrival','housingArrival','buildingArrival','roomArrival'
      ],
      ['dateExitRF','regionArrival','areaArrival','cityArrival','streetArrival','houseArrival',
      'housingArrival','buildingArrival','roomArrival','phoneArrival','typeHost',
      'surnameHost','nameHost','bdHost','passportHost','passportHostSN',
      'dateissueHost','validityHost','regionHost','areaHost','cityHost',
      'streetHost','houseHost','housingHost','buildingHost','roomHost','phoneHost',
      'nameOrgan','factAddress','innHost'
      ]];
    $factory= new Factory();
    for ($g=0; $g<count($arrayGET);$g++) {
      $this->pdf = new TCPDF();
      $this->pdf->SetFont('dejavusans', '', 8, '', true);
      if(isset($arrayGET[$g]['typeDoc'])&&$arrayGET[$g]['typeDoc']==0){
        $bMargin = $this->pdf->getBreakMargin();
        $auto_page_break = $this->pdf->getAutoPageBreak();
        $this->pdf->SetAutoPageBreak(false,0);
        $this->pdf->setCellPaddings(0,0,0,1);
        for($p=0;$p<count($this->objectsPage);$p++){ //количество страниц в документе
          $this->pdf->AddPage();
          $page=file_get_contents("page".$p.".txt");
          $imgdata = base64_decode($page);
          $this->pdf->Image('@'.$imgdata,0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
          for($a=0;$a<count($this->objectsPage[$p]);$a++){//количество полей на странице
              $key=$this->objectsPage[$p][$a];
              $value=$arrayGET[$g][$key];
              if(!(is_null($value)||$value==''))
              {
                $obj=$factory->create($key,$value,$p);
                if(isset($obj))
                  $this->pdf=$obj->renderRow($this->pdf);
              }
          }
        }
        $this->pdf->SetAutoPageBreak($auto_page_break,$bMargin);
        $this->pdf->setPageMark();
      }
      else {
        //фрагмент для генерации 2 вида документа
        //echo "TypeDoc=1";
        break;
      }
      if(isset($arrayGET[$g]['filename']))
        $filename=$arrayGET[$g]['filename'];
      else
        $filename='pdf_'.time();
      $this->pdf->Output(__DIR__.'\\results\\'.$filename.'.pdf','I');
    }
    echo "Генерация PDF-документов завершена...";
  }
}
$main=new Main();
 ?>
