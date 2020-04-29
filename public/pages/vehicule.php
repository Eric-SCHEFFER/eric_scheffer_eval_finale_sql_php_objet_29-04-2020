<h1>Véhicule</h1>

<table class="table table-dark">
   <thead>
      <tr>
         <th>Id_vehicule</th>
         <th>Marque</th>
         <th>Modele</th>
         <th>Couleur</th>
         <th>Immatriculation</th>
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
            <td> </td>
            <td> </td>
         </tr>
      <?php } ?>
   </tbody>
</table>

<!-- =========== Pour ajouter un véhicule =========== -->
<form action="">
   <label for="marque">Marque</label>
   <input type="text" placeholder="Marque" id="marque">
   <label for="modele">Modèle</label>
   <input type="text" placeholder="Modèle" id="modele">
   <label for="couleur">Couleur</label>
   <input type="text" placeholder="Couleur" id="couleur">
   <label for="immatriculation">Immatriculation</label>
   <input type="text" placeholder="Immatriculation" id="immatriculation">
   
   <input type="submit" value="Ajouter ce véhicule">
</form>