<?php

?>

<h1>Conducteur</h1>

<table class="table table-dark">
   <thead>
      <tr>
         <th>Id_conducteur</th>
         <th>Prénom</th>
         <th>Nom</th>
         <th>Modification</th>
         <th>Suppression</th>
      </tr>
   </thead>
   <tbody>
      <?php { ?>
         <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
         </tr>
      <?php } ?>
   </tbody>
</table>


<!-- ======= Pour ajouter un conducteur ======== -->
<form action="">
   <label for="prenom">Prénom</label>
   <input type="text" placeholder="Prénom" id="prenom">
   <label for="nom">Nom</label>
   <input type="text" placeholder="Nom" id="nom">
   <input type="submit" value="Ajouter ce conducteur">
</form>