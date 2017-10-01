<?php
namespace Pattern;
spl_autoload_register(function ($class) {
    include $class.'.php';
});

abstract class FactoryAbstract
{

  public function create($key,$value,$nPage)
  {
    switch ($key) {
      case 'surname':
        return new Surname($nPage,$value);
        break;
      case 'name':
        return new Name($nPage,$value);
        break;
      case 'nationality':
        return new Nationality($nPage,$value);
        break;
      case 'bd':
        return new BD($nPage,$value);
        break;
      case 'gender':
        return new Gender($nPage,$value);
        break;
      case 'state':
        return new State($nPage,$value);
        break;
      case 'city':
        return new City($nPage,$value);
        break;
      case 'passport':
        return new Passport($nPage,$value);
        break;
      case 'passportSN':
        return new PassportSN($nPage,$value);
        break;
      case 'dateissue':
        return new DateIssue($nPage,$value);
        break;
      case 'validity':
        return new Validity($nPage,$value);
        break;
      case 'typeDocRF':
        return new TypeDocRF($nPage,$value);
        break;
      case 'visaSN':
        return new VisaSN($nPage,$value);
        break;
      case 'dateissueRF':
        return new DateIssueRF($nPage,$value);
        break;
      case 'validityRF':
        return new ValidityRF($nPage,$value);
        break;
      case 'purpose':
        return new Purpose($nPage,$value);
        break;
      case 'profession':
        return new Profession($nPage,$value);
        break;
      case 'dateEntryRF':
        return new DateEntryRF($nPage,$value);
        break;
      case 'dateExitRF':
        return new DateExitRF($nPage,$value);
        break;
      case 'migrationSN':
        return new MigrationSN($nPage,$value);
        break;
      case 'infoLegalRepres':
        return new InfoLegalRepres($nPage,$value);
        break;
      case 'prevAddress':
        return new PrevAddress($nPage,$value);
        break;
      case 'regionArrival':
        return new RegionArrival($nPage,$value);
        break;
      case 'areaArrival':
        return new AreaArrival($nPage,$value);
        break;
      case 'cityArrival':
        return new CityArrival($nPage,$value);
        break;
      case 'streetArrival':
        return new StreetArrival($nPage,$value);
        break;
      case 'houseArrival':
        return new HouseArrival($nPage,$value);
        break;
      case 'housingArrival':
        return new HousingArrival($nPage,$value);
        break;
      case 'buildingArrival':
        return new BuildingArrival($nPage,$value);
        break;
      case 'roomArrival':
        return new RoomArrival($nPage,$value);
        break;
      case 'phoneArrival':
        return new PhoneArrival($nPage,$value);
        break;
      case 'typeHost':
        return new Host($nPage,$value);
        break;
      case 'surnameHost':
        return new SurnameHost($nPage,$value);
        break;
      case 'nameHost':
        return new NameHost($nPage,$value);
        break;
      case 'bdHost':
        return new BdHost($nPage,$value);
        break;
      case 'passportHost':
        return new PassportHost($nPage,$value);
        break;
      case 'passportHostSN':
        return new PassportHostSN($nPage,$value);
        break;
      case 'dateissueHost':
        return new DateIssueHost($nPage,$value);
        break;
      case 'validityHost':
        return new ValidityHost($nPage,$value);
        break;
      case 'regionHost':
        return new RegionHost($nPage,$value);
        break;
      case 'areaHost':
        return new AreaHost($nPage,$value);
        break;
      case 'cityHost':
        return new CityHost($nPage,$value);
        break;
      case 'streetHost':
        return new StreetHost($nPage,$value);
        break;
      case 'houseHost':
        return new HouseHost($nPage,$value);
        break;
      case 'housingHost':
        return new HousingHost($nPage,$value);
        break;
      case 'buildingHost':
        return new BuildingHost($nPage,$value);
        break;
      case 'roomHost':
        return new RoomHost($nPage,$value);
        break;
      case 'phoneHost':
        return new PhoneHost($nPage,$value);
        break;
      case 'nameOrgan':
        return new NameOrgan($nPage,$value);
        break;
      case 'factAddress':
        return new FactAddress($nPage,$value);
        break;
      case 'innHost':
        return new InnHost($nPage,$value);
        break;
    }
  }
}
?>
