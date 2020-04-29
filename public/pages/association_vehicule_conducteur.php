<h1>Association</h1>

<table class="table table-dark">
   <thead>
      <tr>
         <th>Id_association</th>
         <th>Conducteur</th>
         <th>Véhicule</th>
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

<!-- =========== Pour ajouter une association =========== -->
<form action="">
   <label for="conducteur">Conducteur</label>
   <input type="text" placeholder="Conducteur" id="conducteur">
   <label for="vehicule">Véhicule</label>
   <input type="text" placeholder="Véhicule" id="vehicule">

   <input type="submit" value="Ajouter cette association">
</form>