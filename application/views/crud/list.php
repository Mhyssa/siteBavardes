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
          <td><?php echo $item->title; ?></td>
          <td><?php echo $item->description; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('crud/delete/'.$item->id);?>">
          <a class="btn btn-info" href="<?php echo base_url('crud/'.$item->id) ?>"> Voir</a>
         <a class="btn btn-primary" href="<?php echo base_url('crud/edit/'.$item->id) ?>"> Editer</a>
          <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>