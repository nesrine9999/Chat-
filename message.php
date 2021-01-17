<?php
class message
{
    private $message;
    private $pseudo;
    private $nbrlike;
	private $id;
    function __construct($message, $pseudo, $nbrlike)
    {
        $this->message = $message;
        $this->pseudo = $pseudo;
        $this->nbrlike = $nbrlike;
    }
	function getId()
	{
		return $this->id;
	}
    function getMessage()
    {
        return $this->message;
    }
    function getPseudo()
    {
        return $this->pseudo;
    }
    function getNbrlike()
    {
        return $this->nbrlike;
    }
    function setMessage($message)
    {
        $this->message = $message;
    }
    function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
    function setNbrlike($nbrlike)
    {
        $this->nbrlike = $nbrlike;
    }
}
