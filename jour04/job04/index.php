


<form action="./index.php" method="post">
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

<table>
    <thead>
        <tr>
            <td>Argument</td>
            <td>Valeur</td>
        <tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td><?php if (isset($_POST["user_name"])) {
                echo $_POST["user_name"];}?>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php if (isset($_POST["user_surname"])) {
                echo $_POST["user_surname"];}?>
        </tr>
        <tr>
            <td>Âge</td>
            <td><?php if (isset($_POST["user_age"])) {
                echo $_POST["user_age"];}?>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php if (isset($_POST["user_email"])) {
                echo $_POST["user_email"];}?>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?php if (isset($_POST["user_address"])) {
                echo $_POST["user_address"];}?>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><?php if (isset($_POST["user_codepostal"])) {
                echo $_POST["user_codepostal"];}?>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?php if (isset($_POST["user_city"])) {
                echo $_POST["user_city"];}?>
        </tr>

        
     
    </tbody>
           
</table>