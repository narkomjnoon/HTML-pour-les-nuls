<?php 
    $titre='Contrôle intéractif';
    require 'navbar.php';
 ?>
            <img src="controle.svg" alt="En-tete1" class="en-tete1">
                    <div class="contenu">
                            <section>
                            <div>
                                <h1>LA BALISE &lsaquo;input&rsaquo;</h1>
                                    <p>La balise &lsaquo;html&rsaquo; et &lsaquo;xhtml input&rsaquo; va vous permettre de faire :<br> - un champ texte,<br> - un champ caché<br> - un bouton<br> - un bouton radio,<br> - une case à cocher.<br>La balise &lsaquo;input&rsaquo; est une balise simple qui n'a pas de balise fermante.<br>La balise &lsaquo;input&rsaquo; n'est pas reconnue par Netscape si elle n'est pas dans la balise &lsaquo;form&rsaquo;.<br>La balise &lsaquo;input&rsaquo; doit comporter obligatoirement les attributs HTLML et XHTML suivant :<br>- type<br>- name<br>- value<br></p>
                                    <h2>EXEMPLE</h2>
                                    <textarea cols="100" rows="10">
                                            &lsaquo;form&rsaquo;
                                            &lsaquo;input type="text" id="name" name="name" required
                                                     minlength="4" maxlength="8" size="10"&rsaquo;
                                              
                                                     &lsaquo;/form&rsaquo; 
                                    </textarea>
                            </div>
                            <hr>
                            <div>
                                    <h1>LA BALISE &lsaquo;textarea&rsaquo;</h1>
                                        <p>La balise &lsaquo;textarea&rsaquo; représente un contrôle qui permet d'éditer du texte sur plusieurs lignes.<br>Cette balise n'est pas reconnue par Netscape si elle n'est pas dans la balise &lsaquo;form&rsaquo; <br></p>
                                        <h2>EXEMPLE</h2>
                                        <textarea cols="100" rows="10">
                                                &lsaquo;form&rsaquo;
                                                &lsaquo;textarea id="story" name="story"
                                                rows="5" cols="33"&rsaquo;
                                                It was a dark and stormy night...
                                                &lsaquo;/textarea&rsaquo;
                                                &lsaquo;/form&rsaquo;
                                        </textarea>
                            </div>
                            <hr>
                            <div>
                                    <h1>LA BALISE &lsaquo;form&rsaquo;</h1>
                                        <p>La balise &lsaquo;form&rsaquo; est utilisé pour créer un formulaire HTML5.<br>L'élément &lsaquo;form&rsaquo; peut contenir un ou plusieurs des éléments suivants<br>&lsaquo;input&rsaquo;<br>&lsaquo;textarea&rsaquo;<br>&lsaquo;button&rsaquo;<br>&lsaquo;datalist&rsaquo;<br>&lsaquo;select&rsaquo;<br>&lsaquo;option&rsaquo;<br>&lsaquo;optgroup&rsaquo;<br>&lsaquo;fieldset&rsaquo;<br>&lsaquo;output&rsaquo;<br>&lsaquo;label&rsaquo;</p>
                                        <h2>EXEMPLE</h2>
                                        <textarea cols="100" rows="10">
                                                &lsaquo;form action="traitement.php"&rsaquo;
                                                    Pseudo : &lsaquo;input type="text" name="nom" /&rsaquo;
                                                    Mail :&lsaquo;input type="email" name="mail" /&rsaquo;
                                                    &lsaquo;button type="submit"&rsaquo;Envoyer&lsaquo;/button&rsaquo;
                                                &lsaquo;/form&rsaquo;
                                        </textarea>
                            </div>
                            <hr>
                            <div>
                                    <h1>LA BALISE &lsaquo;select&rsaquo;</h1>
                                        <p>La balise html et xhtml select contient une liste d'options.<br>La balise html et xhtml select permet de créer un menu déroulant dans un formulaire.<br>Chaque option est définie par la balise&lsaquo;option&rsaquo; &lsaquo;/option&rsaquo; .<br>La balise html et html select n'est pas reconnue par Netscape si elle n'est pas dans la balise &lsaquo;form&rsaquo;.</p>
                                        <h2>EXEMPLE</h2>
                                        <textarea cols="100" rows="10">
                                                &lsaquo;form &rsaquo;
                                                    &lsaquo;select&rsaquo;
                                                    &lsaquo;option&rsaquo; option 1&lsaquo;/option
                                                    &lsaquo;option&rsaquo; option 2&lsaquo;/option&rsaquo;
                                                &lsaquo;/select&rsaquo;
                                            &lsaquo;/form&rsaquo;
                                        </textarea>
                            </div>
                            <hr>
                            </section>
                        </div>
    <footer>
            <address>Dernière modification le 03.10.2019. &copy; Tout droits réservé Proxima B-alise&trade; </address>
    </footer>
    </body>
</html>