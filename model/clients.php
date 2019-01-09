<?php
class clients {
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '00/00/0000';
    public $card = false;
    public $cardNumber = NULL;
    private $db;
    public function __construct() {
        try {
            // On se connecte à MySQL
            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'cyril', 'la198677');
            //catch permet dattraper les erreurs
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    /**
     * méthode permettant de récuperer la liste des clients
     * @return array
     */
    public function getClientListWithCard() {
        //faut renomer birthDate avec le AS car le birthDate et entre parenthèse
        $query = 'SELECT `id`, `lastName`, `firstName`,DATE_FORMAT( `birthDate`,\'%e/%m/%Y\') AS `birthDate`, `card`, `cardNumber` FROM `clients` WHERE `card` != 0;';
        //permet d executer une requete sql this= $db 
        $queryResult = $this->db->query($query);
        //un tableau d'objets fecth obj
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}

?>