<?PHP
include "config.php";
class messageC
{
    function ajouterMessage($message)
    {
        $sql = "insert into nesrine (pseudo, message, nbrlike) values (:pseudo, :message, :nbrlike)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $pseudo = $message->getPseudo();
            $message = $message->getMessage();
			
            $nbrlike = 0;
            $req->bindValue(':pseudo', $pseudo);
            $req->bindValue(':message', $message);
            $req->bindValue(':nbrlike', $nbrlike);
            $req->execute();
        } catch (Exception $e) {
            echo 'Erruer: ' . $e->getMessage();
        }
    }
    function afficherMessages()
    {
        $sql = "SElECT * From (SELECT * FROM nesrine ORDER BY id DESC LIMIT 0,10)Var1 ORDER BY id ASC";
        $c = config::getConnexion();
        return ($c->query($sql));
    }
}
?>