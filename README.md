# FlexSecurity

Installer et démarrer le serveur Wamp :
- Télécharger à l'adresse : https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/wampserver3.2.6_x64.exe/download
- L'installer à l'emplacement de votre choix.
- Une fois l'installation terminée créer un dossier "lpgl" dans le repertoire "www" dans le dossier d'installation de Wamp et y ajouter le projet "FlexSecurity"
- Démarrer le serveur Wamp (à la racine de l'installation double-cliquer sur l'executable "wampmanager.exe")
- Une fois l'icône de Wamp devenue verte y effectuer un click gauche et verifier que la version de PHP est bien la 8.0.13
- Dans le navigateur de votre choix entrez l'url : "localhost/lpgl/FlexSecurity" et vous voila sur la page d'accueil.

Se connecter à PhpMyAdmin : 
user = root
(pas de mot de passe)
- Créer une nouvelle table avec le nom "flexsecurity"
- Y exécuter la requête jointe dans le dossier "ressource"