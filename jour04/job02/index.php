<!-- FORMULAIRE -->
<?php
$new_str = "";

foreach ($_GET as $key => $value){ 
    $new_str = $new_str. "<tr>
            <td> $key </td>
            <td> $value </td>
        <tr>";
}    
?>


<form action="./index.php" method="get">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="user_surname">
    </div>
    <div>
        <label for="name">Âge :</label>
        <input type="number" id="age" name="user_age">
    </div>
    <div>
        <label for="email">Mail :</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <label for="address">Adresse :</label>
        <input type="text" id="address" name="user_address">
    </div>
    <div>
        <label for="codepostal">Code Postal :</label>
        <input type="text" id="codepostal" name="user_codepostal">
    </div>
    <div>
        <label for="city">Ville :</label>
        <input type="text" id="city" name="user_city">
    </div>
    <div>
        <button type="Submit">Submit</button>
    </div>
</form>

<!-- TABLEAU -- code de base sans technique propre de Jojo-->
<!--  foreach ($_GET as $key => $value){ 
          
          echo "<tr>
          <td> $key </td>
          <td> $value </td>
      <tr>";
}         -->



<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        
            <?php echo $new_str;?>
        
        
    </tbody>

</table>

<?php var_dump($_GET); 

    


?>






  
    

