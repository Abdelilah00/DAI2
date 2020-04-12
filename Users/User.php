<?php
include_once './config/DB.php';

class User extends DB
{
    public $Id;
    public $Password;
    public $Nom;
    public $Prenom;
    public $NumDeTele;
    public $Email;
    public $DescriptionId;
    public $DescriptionNom;
    public $FiliereId;
    public $FiliereNom;

    public function __construct($Id)
    {
        $this->Id = $Id;

        try {
            $stmt = $this->connect()->prepare("SELECT * from users u,filieres f,descriptions d where Id = :id and u.FiliereId=f.Id and u.DescriptionId=d.Id");
            $stmt->execute(array(':id' => $this->Id));

            if ($stmt->rowCount() != 1 && $this->Id != null)
                die("<script>alert('User Not Found')</script>");

            $element = $stmt->fetch();

            $this->Password = $element['Password'];
            $this->Nom = $element['Nom'];
            $this->Prenom = $element['Prenom'];
            $this->NumDeTele = $element['NumDeTele'];
            $this->Email = $element['Email'];
            $this->DescriptionId = $element['DescriptionId'];
            $this->DescriptionNom = $element['DescriptionNom'];
            $this->FiliereId = $element['FiliereId'];
            $this->FiliereNom = $element['FiliereNom'];


        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $this->disconnect();
        }
    }

    //Getters
    public static function getAll()
    {
        $conn = new DB();
        try {
            $elements = array();
            $stmt = $conn->connect()->prepare("SELECT * from users");
            $stmt->execute();

            while ($element = $stmt->fetch()) {
                array_push($elements, $element);
            }
            return $elements;

        } catch (PDOException $e) {
            echo "Error In Select: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }

    public static function getBy($search)
    {
        $conn = new DB();
        try {
            $elements = array();
            $stmt = $conn->connect()->prepare("SELECT * from users where Nom=:search or Prenom=:search");
            $stmt->execute(array(':search' => $search));

            while ($element = $stmt->fetch()) {
                array_push($elements, $element);
            }
            return $elements;

        } catch (PDOException $e) {
            echo "Error In Select: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }

    //Operations
    public static function count()
    {
        $conn = new DB();
        try {
            $stmt = $conn->connect()->prepare("SELECT count(*) as nbr from users");
            $stmt->execute();
            return $stmt->fetch()['nbr'];

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }

    public static function exist($id)
    {
        $conn = new DB();
        try {
            $stmt = $conn->connect()->prepare("SELECT count(*) as nbr from users where Id=:id");
            $stmt->execute(array(':id' => $id));
            $element = $stmt->fetch();

            return ($element['nbr'] == 1 ? true : false);

        } catch (PDOException $e) {
            echo "Error In Select: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }
    public static function userLogin($email, $Pass)
    {
        $conn = new db();
        try {
            $stmt = $conn->connect()->prepare("SELECT * from users where Email=:email");
            $stmt->execute(array(':email' => $email));
            $element = $stmt->fetch();

            return password_verify($Pass, $element['Password']);

        } catch (PDOException $e) {
            echo "Error In Select: " . $e->getMessage();
        } finally {
            $conn->disconnect();
        }
    }

    //CRUD
    public function add()
    {
        try {
            $stmt = $this->connect()->prepare("insert into users(Id, Password, Nom, Prenom, NumDeTele, Email, DescriptionId, FiliereId)  VALUE (:id, :password, :nom, :prenom, :numDeTele, :email, :descriptionId, :filiereId)");
            $stmt->execute(array(':id' => $this->Id, ':password' => $this->Password, ':nom' => $this->Nom, ':prenom' => $this->Prenom, ':numDeTele' => $this->NumDeTele, ':email' => $this->Email, ':descriptionId' => $this->DescriptionId, ':filiereId' => $this->FiliereId));
        } catch (PDOException $e) {
            echo "Insert Error: " . $e->getMessage();
        } finally {
            $this->disconnect();
        }
    }

    public function update()
    {
        try {
            $stmt = $this->connect()->prepare("update User set user= :user, date_debut=:date_debut, date_fin=:date_fin where code = :code");
            $stmt->execute(array(':code' => $this->code, ':user' => $this->user, ':date_debut' => $this->date_debut, ':date_fin' => $this->date_fin));

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $this->disconnect();
        }
    }

    public function delete()
    {
        try {
            $stmt = $this->connect()->prepare("delete from User where Id = :id");
            $stmt->execute(array(':id' => $this->id));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $this->disconnect();
        }
    }
}
