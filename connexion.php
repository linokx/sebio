<?php include('header.php'); ?>
<div id="corps">
<div id="inscription" class="full">
    <form>
    	<h2>Inscription</h2>
        <fieldset>
            <legend>Informations de connexion</legend>
            <label>Adresse e-mail </label><input type="text">
            <label>Mot de passe </label><input type="password">
            <label>Confirmation du mot de passe </label><input type="password">
        </fieldset>
        <input type="submit" value="M'inscrire"/>
    </form><form>
    <h2>Connexion</h2>
        <fieldset>
            <legend>Informations de connexion</legend>
            <label>Adresse e-mail </label><input type="text">
	        <label>Mot de passe </label><input type="password">
	        <p><a href="#">Mot de passe oublié&nbsp;?</a></p>
        </fieldset>
        <input type="submit" value="Me Connecter"/>
    </form>
</div>
<?php include('footer.php'); ?>