<?php
if($_POST["message"]) {
mail("your@email.address", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mrs. Lynn's Test</title>
    </head>
    
    <body>
       <h1>My First Sentence!!</h1>
        
        <form method="post" action="subscriberform.php">


<textarea name="message"></textarea>


<input type="submit">


</form>
    </body>
</html>
