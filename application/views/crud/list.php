<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Affiches</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('crud/create') ?>">Ajouter une affiche</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Identifiant</th>
          <th>Nom</th>
          <th>Description</th>
          <th>Stock</th>
          <th>Prix</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->aff_nom; ?></td>
          <td><?php echo $item->aff_description; ?></td>   
          <td><?php echo $item->aff_stock; ?></td> 
          <td><?php echo $item->aff_prix; ?></td>        
      <td>
        <form method="DELETE" action="<?php echo base_url('crud/delete/'.$item->aff_id);?>">
          <a class="btn btn-info" href="<?php echo base_url('crud/'.$item->aff_id) ?>"> Voir</a>
         <a class="btn btn-primary" href="<?php echo base_url('crud/edit/'.$item->aff_id) ?>">Modifier</a>
          <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>