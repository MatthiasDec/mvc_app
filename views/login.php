<h1>Login</h1>

<form action="<?php echo ROOTPATH; ?>login/connect" method="post">

    <label for="login">Identifiant</label><input type="text" name="login" placeholder="Adresse mail" id="login"><br />
    <label for="password">Mot de passe</label><input type="password" name="password" placeholder="password" id="password"><br />
    <input type="submit">

</form>

<p><?php echo isset($this->loginMessage) ? $this->loginMessage : ''; ?></p>

<a href="<?php echo ROOTPATH; ?>">Retour</a>
<a href="<?php echo ROOTPATH.'register'; ?>">S'enregistrer</a>