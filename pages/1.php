<h1>Mégacasting</h1>
<h2>Mettre en place et vérifier les niveaux d’habilitation associés à un service</h2>

<p>Dans Mégacasting, il y a 4 rôles, les administrateurs, les artistes, les partenaires de diffusion et les utilisateurs. Il y a également un super-administrateur (ici le développeur afin de pouvoir gérer l'intégralité des fonctionnalités modifiables, les castings, les genres, les métiers...). </p>
<p>Mégacasting a une API basée sur Symfony 6.3, qui avec API Platform, s'occupe de la sécurité de chaque route grâce aux annotations de PHP.</p>
<p>Le site web de Mégacasting fonctionne avec VueJs, la sécurité est gérée par VueX, un package JavaScript avec lequel on peut gèrer les routes, et que faire avant les routes.</p>
<p>De ce fait chaque service gère sa sécurité comme elle veut, elle ne peut pas outrepasser la sécurité d'un autre service.</p>