<?PHP
include "message.php";
include "messageC.php";


if (isset($_POST['pseudo']) and isset($_POST['message'])) {
    $message = new message($_POST['pseudo'], $_POST['message'], 0);
    $messageC = new messageC();
    $messageC->ajouterMessage($message);
    
	$listeAAfficher = $messageC->afficherMessages();
	foreach ($listeAAfficher as $row) {?>
	<div class="div">
            <p id="message" class=<?PHP echo $row['id']; ?>>
                <?PHP echo $row['pseudo']; ?>
                <?PHP echo $row['message']; ?></p>
            <img src="hide.png" alt="" height="10px" width="10px" srcset="" id="hide" class=<?PHP echo $row['id']; ?>>
            <div> <img src="like.png" alt="" srcset="" height="20px" width="20px" value=<?PHP echo $row['nbrlike']; ?> class="like">
                <p></p>
            </div>
    </div>
		<?php 
	}
}
