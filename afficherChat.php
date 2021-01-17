<html>

<head>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="jqueryScript.js"></script>
	<style> 
	

.tbl-bdr {
  width: 1000px;
  height: 1650px;
  background: #fff;
  position: relative;
  border: 1px solid blue;
  margin: 10px;
}
.tbl-bdr:after {
  content: '';
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  border: 1px solid green;
  z-index: -1;
}
.right{
  color: red;
}

left{display:inline-block}
right{display:inline-block; float:right   padding:4;}

 
 </style>
</head>

<body  class="tbl-bdr">

<?PHP
include "messageC.php";
$messageC = new messageC();
?>

<table> 

     <?PHP $listeAAfficher = $messageC->afficherMessages(); 
	 
	  foreach ($listeAAfficher as $row){ ?> 
	  
	
     <tr>
	 
       <td class="right" style="color: red; display: block;font-size: 1em;margin-top: 1.33em;margin-bottom: 1.33em;margin-left: 0;margin-right: 0;font-weight: bold;"> <hr><?PHP echo $row['pseudo']; ?> <?php echo ":" ?>  </td>
	    
       <td class="left" style="display: block;font-size: .83em;margin-top: 1.67em;margin-bottom: 1.67em;margin-left: 0;margin-right: 0;font-weight: bold;"> <?PHP echo $row['message']; ?> </td> 
	   <td><img src="hide.png" class="nesrine"  alt="" height="10px" width="10px" srcset="" id="hide" class=<?PHP echo $row['id']; ?>></td>
	   <td><img src="like.png" alt="" id="c" srcset="" height="20px" width="20px" value=<?PHP echo $row['nbrlike']; ?> class="like"> </td>
	   
	   <td><p id=<?PHP echo $row['id']; ?>></p> </td> 
     </tr>
	</hr>
	 <?PHP
    }
	
    ?>
	
</table>

<hr>

<label for="">Pseudo:</label> <input type="text" id="pseudo" name="pseudo" required>
<br>
<label for="">Message</label> <textarea id="message" rows="5" cols="100" name="message" type="text" required></textarea>
<br>
<center><button type="submit" name="ajouter" value="ajouter" id="ajouter">Poster votre message</button></center>
</body>
</html>