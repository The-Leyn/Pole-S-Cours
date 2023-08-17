<!-- Un formulaire coder seulement en html et css n'a pas d'utilité. On doit lui ajouter un traitement PHP pour pouvoir récupérer les infos renseignées dedans et les réeutiliser plus tard c'est PHP qui vas rendre dynamique le formulaire sinon, ce n'est qu'un simple affichage. Pour que le formulaire soit connécté soit connecté à la méthode post il aut absolument écrire dans la balise form méthod=POST action qui sert à autre chose on verra ça plus tard. -->
<form method=POST action="">
    <!-- Dans les attribut du champ prénoom ci dessous seul name est égal à prénom est important , obligatoire en PHP pour que les informations puissent être récupérées et envoyées en BDD. for(dans label et id dans input n'ont aucune importance pour PHP et l'envoie en BDD. Ils sont par contre utile en affichage pour l'UX, améliore l'expérience utilisateur) -->
    <!-- L'attribut name est indispensable pour que les données puissent être en envoyées en BDD -->
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Prenom">
    <br><br>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="15" rows="3" placeholder="Votre description"></textarea>
    <br><br>
    <label for="annee">Annee de naissance</label>
    <select name="annee" id="annee">
        <?php
        for ($annee = date('Y'); $annee >= date('Y') - 100; $annee--) {
            echo "<option>" . $annee . "</option>";
        }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Soumettre">
</form>

<!-- Si je n'écrit pas cette condition if($_POST), j'aurais droit au warning undifined key prenom, key description etc... C'est normal au premier chargement de la page le formulaire est vide. Aucune info n'a encore transité d'où le undifined key -->

<!-- Ci dessous syntaxe contractée  pour une condition if(). Elle permet de générer plus rapidement du code HTML que si on était dans un grand passage PHP nécessitant beaucoup d'echos -->
<?php if ($_POST) : ?>
    <!-- J'ai besoin de la superGlobal $_POST pour récupérer les infos qui ont transité dans le formulaire. Je crochette ensuite à l'indice qui m'intéressent, (cet indice existe car on l'a renseigné pour l'attribut name dans le formulaire d'ou l'utilité de name) -->
    <ul>
        <li>Prénom : <?= $_POST['prenom'] ?></li>
        <li>Déscription : <?= $_POST['description'] ?></li>
        <li>Année de naissance : <?= $_POST['annee'] ?></li>
    </ul>
    <!-- La syntaxe contractée endif est nécessaire pour fermer mon if() sinon erreur PHP -->
<?php endif; ?>