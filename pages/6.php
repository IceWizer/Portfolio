<h1>ONPC</h1>
<h2>Mettre en place et vérifier les niveaux d’habilitation associés à un service</h2>

<p>J'ai travaillé sur un site de gestion de "commandes" pour des écoles privés.</p>
<p>J'ai mis en place une sécurité lorsque le site appelait l'API, l'API est sous Symfony, le bundle lexik/jwt-authentication-bundle. Ce bundle permet d'authentifier un utilisateur sans état sur le serveur.</p>
<p>J'ai aussi mis en place un voter afin de savoir si un utilisateur été autorisé à accéder à la ressource demandée, aussi bien sur le site que sur l'API.</p>