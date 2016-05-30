document.getElementById('bouton').onclick= function ()
{
var pass1 = document.getElementById('mdp').value;
var pass2 = document.getElementById('mdpok').value;
if ((pass1 == pass2) && (document.getElementById('code').value == 3630))
	return (true);
else
	alert("Votre mot de passe ou le code confidentiel n'est pas valide.");
	return (false);
}