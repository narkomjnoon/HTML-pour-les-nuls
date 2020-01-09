<?php 
    $titre='Structurelles';
    require 'navbar.php';
 ?>
            <img src="structu.svg" alt="En-tete1" class="en-tete1">
                    <div class="contenu">
                            <div>
                                <h2>LA BALISE &lsaquo;html&rsaquo;</h2>
                                    <p>La balise &lsaquo;html&rsaquo; indique au navigateur qu’il s’agit d’un document HTML.<br>La balise &lsaquo;html&rsaquo; représente la racine d’un document HTML.<br>La balise &lsaquo;html&rsaquo; est le conteneur pour tous les autres éléments HTML – sauf pour l’élément &lsaquo;!doctype&rsaquo;.<br>La balise &lsaquo;html&rsaquo; est prise en charge par tous les principaux navigateurs.<br></p>
                                <h3>EXEMPLE</h3>
                                <textarea cols="100" rows="10">
                                        &lsaquo;!DOCTYPE HTML&rsaquo;
                                        &lsaquo;html&rsaquo;
                                        &lsaquo;head&rsaquo;
                                </textarea>
                            </div>
                            <hr>
                            <div>
                                <h2>LA BALISE &lsaquo;head&rsaquo;</h2>
                                <p>La balise &lsaquo;head&rsaquo; contient tous les éléments de l’en-tête de votre document.
                                    L’en-tête de votre document, compris entre les balises &lsaquo;head&rsaquo;, doit obligatoirement contenir un titre. Il peut également contenir des scripts, des styles, des balises meta et bien plus encore</p>
                                <h3>EXEMPLE</h3>
                                <textarea cols="100" rows="10" class="exemple">
                                    &lsaquo;head&rsaquo;
                                    &lsaquo;title&rsaquo;HTML5 POUR LES NULS&lsaquo;/title&rsaquo;
                                    &lsaquo;meta charset="utf-8"/&rsaquo;
                                </textarea>
                            </div>
                            <hr>
                            <div>
                                <h2>LA BALISE &lsaquo;title&rsaquo;</h2>
                                <p>La balise title contient le titre de la page HTML en cours de lecture.</p>
                                <h3>EXEMPLE</h3>
                                <textarea cols="100" rows="10">
                                    &lsaquo;head&rsaquo;
                                    &lsaquo;title&rsaquo;HTML5 POUR LES NULS&lsaquo;/title&rsaquo;
                                    &lsaquo;/head&rsaquo;
                                </textarea>
                            </div>
                            <hr>
                            <div>
                                <h2>LA BALISE &lsaquo;body&rsaquo;</h2>
                                <p>La balise &lsaquo;body> définit le corps du document.<br>La balise &lsaquo;body&rsaquo; définit la partie principale du document, qui contient les informations destinées à être affichées.<br>L’élément &lsaquo;body&rsaquo; contient tous les contenus d’un document HTML5, comme du texte, des hyperliens, des images, tableaux, listes, etc …</p>
                                <h3>EXEMPLE</h3>
                                <textarea cols="100" rows="10">
                                    &lsaquo;html&rsaquo;
                                    &lsaquo;head&rsaquo;
                                    &lsaquo;title&rsaquo;HTML5 POUR LES NULS&lsaquo;/title&rsaquo;
                                </textarea>
                            </div>
                            <hr>
                            <div>
                                <h2>LA BALISE &lsaquo;meta&rsaquo;</h2>
                                <p>Les balises meta (aussi appelées meta-tags) sont des informations incluses à l'intérieur des pages web sous forme de balises.<br>Ces informations sont placées dans l'entête d'une page web à l'intérieur de la balise head.<br>Les balises meta sont relative à la page et donnent des informations plus généralement aux aux moteurs de recherche (bien que d'autres applications sont possible).<br><br>Les informations sont très vastes, il peut s'agir du langage de la page, de l'auteur du document, d'une description de la page et de bien d'autres choses encore.<br>Parmi les balises les plus importantes et les plus connus dans le monde du référencement il y a:<br>La balise meta description. Cette balise n'a aucun impact sur le positionnement d'une page, elle est uniquement utilisée par le moteur de recherche Google pour présenter les résultats. Autrement dit, le texte de la balise meta description peut être utilisé pour présenter votre page sur les SERP.<br>Le balise meta keywords. Cette balise n'a plus d'impact pour le positionnement sur Google, mais sert encore un peu sur Yahoo.<br>La balise meta robots. Cette balise indique aux moteurs de recherches entre autres s'ils doivent indexer la page, suivre les liens et archiver la page dans le cache de Google. Par défaut, si elle n'est pas utilisée les principaux moteurs de recherchent indexent et suivent les liens.<br>Les débutants en référencement pensent à tort que ces balises meta ont un impact sur le positionnement de leurs sites. En réalité il n'y a que la balise meta description qui a un impact, mais uniquement pour inciter au clics sur les SERP.<br>La balise de titre (aussi appelée balise title) incluses dans l'entête d'une page web est parfois considéré comme une balise meta, alors que ce n'est juste qu'une balise mais qui n'a pas véritablement de liens avec une balises meta.</p>
                                <h3>EXEMPLE</h3> 
                                <textarea cols="100" rows="10">
                                    &lsaquo;head&rsaquo;
                                    &lsaquo;meta charset="utf-8"/&rsaquo;
                                    &lsaquo;/head&rsaquo;
                                <textarea>
                            </div>
                            <hr>
                            <div>
                                <h2>LA BALISE &lsaquo;link&rsaquo;</h2>
                                <p>La balise linkpermet de spécifier les relations entre les pages du site.<br>La balise link permet aussi de lier un feuille de style (css) au document.<br>La balise link ne peut être mise que dans la balise &lsaquo;HEAD&rsaquo;&lsaquo;/HEAD&rsaquo; du document HTML. Elle n'est donc pas visible comme par exemple la balise META.</p>
                                <h3>EXEMPLE</h3>
                                <textarea cols="100" rows="10">
                                    &lsaquo;head&rsaquo;
                                    &lsaquo;link rel="stylesheet" href="exemple.css"/&rsaquo;
                                    &lsaquo;/head&rsaquo;  
                                </textarea>
                    </div>
            <address>Dernière modification le 03.10.2019. &copy; Tout droits réservé Proxima B-alise&trade; </address>
    </body>
</html>