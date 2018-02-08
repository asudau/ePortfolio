<?

class Supervisorgroup{

  var $supervisorgroupId = null;
  var $supervisorgroupName = "DEFAULT_NAME";

  public function __construct($group_or_false = FALSE) {
    if ($group_or_false == FALSE) {
      $this->setId();
    } else {
      $this->supervisorgroupId = $group_or_false;
    }
  }

  private function setId(){
    $sem = new Seminar();
    $this->supervisorgroupId = $sem->createId();
  }

  public function setName($name){
    $this->supervisorgroupName = $name;
  }

  public function getId(){
    return $this->supervisorgroupId;
  }

  public function getName(){
    $query = DBManager::get()->query("SELECT name FROM supervisor_group WHERE id = '$this->supervisorgroupId'")->fetchAll();
    return $query[0][name];
  }

  public function save(){
    DBManager::get()->query("INSERT INTO supervisor_group (id, name) VALUES ('$this->supervisorgroupId', '$this->supervisorgroupName')");
  }

}
