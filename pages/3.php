<h1>Mégacasting</h1>
<h2>Déployer un service</h2>

<p>MégaCasting web se déploie via le package Deployer. Pour déployer correctement, il faut modifier le fichier deploy.php.</p>
<p>Pour mon cas, il faut git push au préalable, pour que l'application déployé soit à jour par rapport à notre environnement local.</p>
<p>Le script, décrit dans deploy.php, se connecte en ssh au serveur, puis télécharge la branche main depuis github. Il build la partie javascript et scss du site et enfin il enlève la plus vieille version du serveur, et en garde 3 afin de pouvoir rétrograder en cas d'urgence.</p>