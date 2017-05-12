<div id="menu">
    <a href="<?php echo ROOTPATH; ?>"><img src="<?php echo ROOTPATH.'public/images/logo.png'; ?>" alt="EHD"></a>
    <a href="#">Nos produits</a>
    <a href="#">À propos</a>
    <a href="#">Contact</a>

    <?php echo $this->connected ? 'Bonjour, '.utf8_decode(Session::get('user_fname')) : ''; ?><a href="<?php echo $this->connected ? ROOTPATH.'index/disconnect' : ROOTPATH.'login'; ?>">
        <?php echo $this->connected ? 'Déconnexion' : 'Connexion'; ?>
    </a>

</div>
