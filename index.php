<?php include "crud.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP - Gestion des Stocks</title>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/style.css">
     <script src="https://use.fontawesome.com/f66664ac40.js"></script>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            const nodes = document.querySelectorAll(".clickable");
            const toggleNode = function() {
                this.nextElementSibling.classList.toggle("is-active");
            };
            nodes.forEach(function(n) {
                n.onclick = toggleNode;
            })
        });
    </script>
    </head>
<body>
    <h1 class="title clickable">TP - Gestion du Stock II (CRUD)</h1>
    <h2>Ajouter votre produit</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="f-col" >
        <input name="name" type="text" placeholder="nom du produit" value="chaise">
        <input name="prix" type="number" placeholder="prix du produit" value="23">
        <textarea name="" id="" cols="30" rows="10" placeholder="Description du produit"></textarea>
        <div class="f-row">
            <input name="create_user" type="submit" value="create user !" class="btn">
        </div>
    </form>
 <table id="tableau">
        <thead>
            <tr>
                <th>Ajouter</th>
                <th>Visualiser</th>
                <th>Prix</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr id="ref-1">
                <td class="td-1"></td>
                <td class="td-2"></td>
                <td class="td-3"></td>
                <td class="td-4"></td>
          <td class="trash"><button class="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
        </tr>
        <tr id="ref-2">
                <td class="td-1"></td>
                <td class="td-2"></td>
                <td class="td-3"></td>
                <td class="td-4"></td>
          <td class="trash"><button class="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
            </tr>
        <tr id="ref-3">
          <td class="td-1"></td>
          <td class="td-2"></td>
          <td class="td-3"></td>
          <td class="td-4"></td>
          <td class="trash"><button class="trash"><i class="fa fa-trash-o" aria-hidden="true"</i></button></td>
        </tr>
        <tr id="ref-4">
          <td class="td-1"></td>
          <td class="td-2"></td>
          <td class="td-3"></td>
          <td class="td-4"></td>
          <td class="trash"><button class="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
        </tr>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>