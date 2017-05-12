<h1>Inscription</h1>

<form action="<?php echo ROOTPATH; ?>register/addUser" method="post">

    <label for="lname">Nom</label><input type="text" name="lname" placeholder="Nom" id="lname" required><br />

    <label for="fname">Prénom</label><input type="text" name="fname" placeholder="Prénom" id="fname" required><br />

    <label for="mailAddress">Adresse mail</label><input type="email" name="mail" placeholder="Adresse mail" id="mailAddress" required><br />

    <label for="mailAddressConfirm">Confirmer adresse mail</label><input type="email" name="mailConfirm" placeholder="Confirmer adresse mail" id="mailAddressConfirm" required><br />

    <label for="pass">Mot de passe</label><input type="password" name="pass" placeholder="Mot de passe" id="pass" required><br />

    <label for="passConfirm">Confirmer mot de passe</label><input type="password" name="passConfirm" placeholder="Confirmer mot de passe" id="passConfirm" required><br />

    <input type="submit">
    
</form>

<p><?php echo isset($this->errorMessage) ? $this->errorMessage : ''; ?></p>

<a href="<?php echo ROOTPATH; ?>login">Retour</a>