<?php 
    $titre='Contenus';
    require 'navbar.php';
 ?>
            <img src="contenu.svg" alt="En-tete1" class="en-tete1">
            <div class="contenu">
                    <div>  
                        <h2>LA BALISE &lsaquo;img&rsaquo;</h2>
                            <p>La balise &lsaquo;img&rsaquo; Cette balise sert à déclarer une image.</p>
                            <h3>EXEMPLE</h3>
                            <textarea cols="100" rows="10">
                                &lsaquo;p&rsaquo;img class="image1" src="pic/identite.svg" &lsaquo;a&rsaquo; href="pic/id2.jpg"&lsaquo;/p&rsaquo;
                                &lsaquo;p&rsaquo;img class="image1" src="pic/identite.svg" &lsaquo;/p&rsaquo;
                                &lsaquo;p&rsaquo;img class="image1" src="pic/identite.svg" alt="Photo agrandit" title="Cliquez pour agrandir"&lsaquo;/p&rsaquo;
                            </textarea>
                        <h3>ATTRIBUTS SPÉCIFIQUES:</h3>
                            <p>alt<br>src<br>usemap<br>width<br>height</p>
                            <h3>EXEMPLE</h3>
                            <textarea cols="100" rows="10">
                                &lsaquo;p&rsaquo;img class="image1" src="pic/identite.svg"&lsaquo;/p&rsaquo;
                                &lsaquo;p&rsaquo;&lsaquo;a&rsaquo;href="pic/id2.jpg" img class="image1" src="pic/identite.svg"&lsaquo;/p&rsaquo;
                                &lsaquo;p&rsaquo;&lsaquo;a&rsaquo;href="pic/id2.jpg" img class="image1" src="pic/identite.svg" alt="Photo agrandit" title="Cliquez pour agrandir"&lsaquo;/p&rsaquo;
                            </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;a&rsaquo;</h2>
                        <p>La balise &lsaquo;a&rsaquo;définit un lien hypertexte, qui est utilisé pour relier une page à l’autre.<br>L’attribut le plus important de la balise &lsaquo;a&rsaquo; est l’attribut href, qui indique la destination du lien. <br> Par défaut, les liens apparaissent dans tous les navigateurs suivant cette ordre : <br>Un lien non visité est souligné et bleu, un lien visité est souligné et violet, Un lien actif est souligné et rouge.
                        <br> Vous pouvez changer le style de vos liens grâce au CSS (Feuille de style). </p> 
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                                <p>&lsaquo;a&rsaquo; title="Titre du lien" href="http://www.adresse-du-lien.fr" <br>Ceci est un lien</a></p>
                        </textarea>                       
                        <h3>ATTRIBUTS</h3>
                        <textarea cols="100" rows="10">
                            <p>href<br>rel<br>media<br>href<br>lang<br>type</p>>
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LINK TYPES</h2>
                        <p>"alternate"<br>"author"<br>"bookmark"<br>"external"<br>"help"<br>"icon"<br>"license"<br>"nofollow"<br>"noreferrer"<br>Est implémenté dans Webkit mais non utilisé par Safari et Chrome.<br>
                        "pingback"<br>"prefetch"<br>"search"<br>"sidebar"<br>"stylesheet"<br>"tag"<br>Confusion possible : Ne doit pas être utilisé dans un tagcloud.</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;p&rsaquo;&lsaquo;a&rsaquo; title="Titre du lien" href="http://www.adresse-du-lien.fr" Ceci est un lien &lsaquo;a&rsaquo;&lsaquo;/p&rsaquo;
                            &lsaquo;p&rsaquo;&lsaquo;a&rsaquo; title="41Mag, Web Magazine" href="http://www.41mag.fr" Apprendre le HTML5 grâce au 41Mag &lsaquo;a&rsaquo;&lsaquo;/p&rsaquo;                            
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;aside&rsaquo;</h2>
                        <p>La balise&lsaquo;aside&rsaquo;définit un contenu à part du contenu général.<br>Le contenu mis de coté par la balise&lsaquo;aside&rsaquo;doit être lié au contenu environnant.
                            <br>Cette balise permet de regrouper des informations non essentielles relatives au site Web.<br>
                            Lorsque la balise&lsaquo;aside&rsaquo;se trouve dans un article, son contenu se réfère à l'article lui même et non au site Web (par exemple des notes de pages, un glossaire ou tout élément relatifs à l'article).<br>
                            Confusion: La sidebar d'une page n'a pas pour obligation d'être dans une balise&lsaquo;aside&rsaquo;</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            <p>&lsaquo;p&rsaquo;Cet été, nous sommes partis en famille à Nigloland&lsaquo;p&rsaquo;
                            &lsaquo;aside&rsaquo;
                            &lsaquo;h4&rsaquo;Nigloland&lsaquo;/h4&rsaquo;
                             Nigloland est un parc d'attraction situé dans le département de l'aube (10).&lsaquo;aside&rsaquo;</p>
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;nav&rsaquo;</h2>
                        <p>>Pour regrouper des liens qu'ils soient internes à la page ou pour des pages liées.<br>Il est recommandé, mais non obligatoire d'utiliser les listes à puce pour lister les liens. attributs.</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                        &lsaquo;p&rsaquo;
                                &lsaquo;nav&rsaquo;
                                &lsaquo;a&rsaquo;href="index.php">Accueil&lsaquo;/a&rsaquo;
                                &lsaquo;a&rsaquo;href="blog.php">Le blog de l'entreprise&lsaquo;/a&rsaquo;
                                &lsaquo;a&rsaquo;href="contact.php">Nous contacter&lsaquo;/a&rsaquo;
                            &lsaquo;nav&rsaquo;
                             ou
                            &lsaquo;nav&rsaquo;
                                &lsaquo;ul&rsaquo;
                                &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="index.php">Accueil&lsaquo;/a&rsaquo;&lsaquo;/li&rsaquo;
                                &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="blog.php">Le blog de l'entreprise&lsaquo;/a&rsaquo;&lsaquo;/li&rsaquo;
                                &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="contact.php">Nous contacter&lsaquo;/a&rsaquo;&lsaquo;/li&rsaquo;
                                &lsaquo;/ul&rsaquo;
                            &lsaquo;nav&rsaquo;
                        &lsaquo;/p&rsaquo;
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;article&rsaquo;</h2>
                        <p>La balise &lsaquo;article&rsaquo;définit un contenu autonome et indépendant.<br>La balise &lsaquo;article&rsaquo;permet de structurer votre contenu pour pouvoir être recherchée,<br>permettre une navigation spécifique dans la page ou être partagée dans d’autres documents. 
                            <br>Exemple d’utilisation de la balise &lsaquo;article&rsaquo;:
                            <br>Article de journal, de presse
                            <br>Entrée de blog
                            <br>Post d’un forum
                            <br>Commentaire, etc …</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;h3&rsaquo;&lsaquo;article&rsaquo;&lsaquo;h3&rsaquo;
                            &lsaquo;p&rsaquo;
                                    &lsaquo;h3&rsaquo;Qu'est ce que le HTML5 ?&lsaquo;/h3&rsaquo;
                                    &lsaquo;p&rsaquo;Le HTML5 est un langage de base pour la création de site
                                    web. D’autre langage peuvent s’ajouter lors de la conception,
                                    mais tout les sites web contiennent du HTML. HTML5 désignant
                                    la version du langage HTML.&lsaquo;/p&rsaquo;
                                    &lsaquo;p&rsaquo;Pour tous les créateurs en herbe, c’est l’étape obligatoire
                                    dans votre apprentissage. On ne peut pas connaitre tous les langages
                                    et encore moins les maitriser tous, certains seront appris par choix
                                    mais le HTML5 le sera par devoir. ...&lsaquo;/p&rsaquo;
                                    &lsaquo;article&rsaquo;
                            &lsaquo;/p&rsaquo;
                        </textarea>
                    </div>
                    <hr>
            </div>
            <footer>
                <address>Dernière modification le 03.10.2019. &copy; Tout droits réservé Proxima B-alise&trade; </address>
            </footer>
    </body>
</html>
