<?php 
    $titre='Constructions';
    require 'navbar.php';
 ?>
            <img src="constru.svg" alt="En-tete1" class="en-tete1">
                <div class="contenu">
                    <div>  
                        <h2>LA BALISE &lsaquo;p&rsaquo;</h2>
                            <p>La balise &lsaquo;p&rsaquo; définit un paragraphe<br>L’élément &lsaquo;p&rsaquo; crée automatiquement un espace avant et après lui.<br>La balise &lsaquo;p&rsaquo; L’espace est appliqué automatiquement par le navigateur, ou vous pouvez le modifier dans une feuille de style CSS – margin (marge extérieur) et padding (marge intérieur).</p>
                            <p>Attention à ne pas trop utilisé la balise &lsaquo;p&rsaquo; Ne pas utiliser cette élément lorsque d’autres éléments sont plus appropriés (liste, définition …)</p>
                            <h3>EXEMPLE</h3>
                            <textarea cols="100" rows="10">
                                &lsaquo;p&rsaquo;La balise&lsaquo;p&rsaquo;contient et affiche du texte&lsaquo;/p&rsaquo;
                            </textarea>
                    </div>

                    <hr>

                    <div>
                        <h2>LA BALISE &lsaquo;br&rsaquo;</h2>
                            <p>La balise &lsaquo;br&rsaquo; insère un saut de ligne unique. Elle permet un retour à la ligne sans séparer le paragraphe.
                            La balise &lsaquo;br&rsaquo;est une balise vide, ce qui signifie qu’elle n’a pas de balise de fermeture &lsaquo;br&rsaquo;, (En savoir plus sur le principe de balise imbriqué). Elle s’écris <br /> (avec un espace devant le /)</p>
                            <h3>EXEMPLE</h3>
                            <textarea cols="100" rows="10">
                                &lsaquo;p&rsaquo;Ce paragraphe contient &lsaquo;br&rsaquo;un saut de ligne.&lsaquo;/p&rsaquo;
                            </textarea>
                    </div>

                    <hr>
                    
                    <div>
                        <h2>LA BALISE &lsaquo;hr&rsaquo;</h2>
                        <p>La balise &lsaquo;hr&rsaquo; définit une rupture thématique dans une page HTML : par exemple, un changement de sujet.</p> <br>L’élément &lsaquo;hr&rsaquo; est utilisé pour séparer le contenu, ou définir un changement dans une page HTML. <br>La balise &lsaquo;hr&rsaquo; est pris en charge par tous les principaux navigateurs
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;p&rsaquo;&lsaquo;h2&rsaquo;L'Olympique de Marseille&lsaquo;/h2&rsaquo;
                            &lsaquo;p&rsaquo;L'OM est le plus grand club français.&lsaquo;p&rsaquo;
                            &lsaquo;p&rsaquo;...&lsaquo;/p&rsaquo;
                        
                        <hr>
                        
                            &lsaquo;h2&rsaquo;Le Paris-saint-germain&lsaquo;/h2&rsaquo;
                            &lsaquo;p&rsaquo;Le PSG est un club de ligue2.&lsaquo;/p&rsaquo;
                            &lsaquo;p&rsaquo;...&lsaquo;/p&rsaquo;
                        </textarea>
                    </div>
                    <hr>
                    <div>

                        <h2>LA BALISE &lsaquo;header&rsaquo;</h2>
                        <p>Pour l'entête d'une section et/ou d'une page, cette balise est utile pour une introduction et/ou des éléments de navigation. 
                        Cette balise peut-être utilisée dans la balise &lsaquo;section&rsaquo; et dans la balise &lsaquo;article&rsaquo;</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;header&rsaquo; 
                                &lsaquo;h1&rsaquo;Rapport des ventes&lsaquo;/h1&rsaquo;
                                &lsaquo;p&rsaquo;Le rapport sera présenté aux membres du groupe&lsaquo;/p&rsaquo;
                            &lsaquo;/header&rsaquo;	
                            Autre exemple:
                            &lsaquo;header&rsaquo; 
                            &lsaquo;h1&rsaquo;Rapport des ventes&lsaquo;/h1&rsaquo;
                            &lsaquo;nav&rsaquo;
                            &lsaquo;ul&rsaquo;
                            &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="#">Menu 1&lsaquo;a&rsaquo; &lsaquo;/li&rsaquo;
                            &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="#">Menu 2&lsaquo;a&rsaquo; &lsaquo;/li&rsaquo;
                            &lsaquo;li&rsaquo;&lsaquo;a&rsaquo;href="#">Menu 3&lsaquo;a&rsaquo; &lsaquo;/li&rsaquo;
                            &lsaquo;/ul&rsaquo;
                            &lsaquo;/nav&rsaquo;
                            &lsaquo;/header&rsaquo;
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;footer&rsaquo;</h2>
                        <p>Les balises &lsaquo;footer&rsaquo; Un élément &lsaquo;footer&rsaquo; doit contenir des informations sur l’élément auquel il appartient. Un pied de page contient généralement l’auteur du document, les informations de copyright, des liens vers des conditions d’utilisation, informations de contact, etc …
                            Vous pouvez avoir plusieurs éléments &lsaquo;footer&rsaquo; dans un seul document.
                            Les coordonnées et informations de contact (mail …) contenu à l’intérieur d’un élément &lsaquo;footer&rsaquo; doivent être également contenue dans une balise &lsaquo;address&rsaquo;</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;footer&rsaquo;
                                    &lsaquo;p&rsaquo;Auteur : Mike Tyson&lsaquo;/p&rsaquo;
                                    &lsaquo;p&rsaquo;Tous droits réservés - 41Mag.fr&lsaquo;/p&rsaquo;
                                    &lsaquo;p&rsaquo;Publié le 16 Avril 12&lsaquo;/p&rsaquo;
                            &lsaquo;/footer&rsaquo;                                  
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;div&rsaquo;</h2>
                        <p>La balise div définit une division ou une section, appelé aussi calque, dans un document HTML.
                                La balise &lsaquo;div&rsaquo; est utilisée pour regrouper des éléments sous forme de bloc et ainsi pouvoir les formater en CSS.
                                Remarque : Les navigateurs placent toujours un saut de ligne avant et après un élément &lsaquo;div&rsaquo;</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                                        <h3>Titre ou en-tête</h3>
                                        <p>Ceci est un paragraphe.</p>
                            </div>
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE h1 à h6</h2>
                        <p>> La balise &lsaquo;h1&rsaquo; définit le titre principal de la page tandis que la balise h6 définit le titre le moins important.
                                Il est conseillé pour votre référencement que le titre principal, symbolisé et encadré par les balises &lsaquo;h1&rsaquo;, ne soit présent qu’une seule fois dans votre page. Il devra contenir les mots-clés principaux de cette page. Mais attention, ne pas faire une liste, ils doivent être contenus dans une phrase.
                                Vous devrez également placez ce titre principal le plus haut possible dans votre page (le plus près de la première balise sera le mieux).
                                Il vous faudra également respecter l’ordre de hiérarchisation des titres.</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                            &lsaquo;h1&rsaquo;Titre le plus important de votre page&lsaquo;/h1&rsaquo;
                            &lsaquo;h2&rsaquo;Titre secondaire, peut être présent plusieurs fois&lsaquo;/h2&rsaquo;
                            &lsaquo;h3&rsaquo;Titre numéro 3 ...&lsaquo;/h3&rsaquo;
                            &lsaquo;h4&rsaquo;Titre numéro 4 ...&lsaquo;/h4&rsaquo;
                            &lsaquo;h5&rsaquo;Titre numéro 5 ...&lsaquo;/h5&rsaquo;
                            &lsaquo;h6&rsaquo;Titre numéro 6 ...&lsaquo;/h6&rsaquo;
                        </textarea>
                    </div>
                    <hr>
                    <div>
                        <h2>LA BALISE &lsaquo;pre&rsaquo;</h2>
                        <p>> La balise &lsaquo;pre&rsaquo; Ecrire un texte préformaté. L'utilisation de la balise <p> n'est pas obligatoire. Peut-être lui même le conteneur de la balise &lsaquo;code&rsaquo;.</p>
                        <h3>EXEMPLE</h3>
                        <textarea cols="100" rows="10">
                                <p>&lsaquo;pre&rsaquo;Le texte dans une balise "pre" est affiché avec une largeur fixe.Les sauts de lignes et les espaces sont respectés.
                                Attention à ne pas mettre l'attribut "white-space:normal" dans la CSS, sinon, les sauts de lignes ne seront pas actifs.
                                &lsaquo;pre&rsaquo;</p>
                        </textarea>
                </div>

        <footer>
             <address>Dernière modification le 03.10.2019. &copy; Tout droits réservé Proxima B-alise&trade; </address>
        </footer>
    </body>
</html>
