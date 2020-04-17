


<div class="container">
       <!-- Display status message -->
       <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
   
   

           <div class="container">
     


        <div class="row">
        <div class="col-md-12 head">
<h3>Liste des Podcasts</h3>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>podcast/add_podcast" class="btn btn-sm btn-success">Ajouter</a>
            </div>
        </div>



   
 
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Nom</th>
           <th>Lien</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($pod)){ 
                   
               foreach($pod as $row){ 
           ?>
           <tr>
               <td><?php echo $row['podcast_id']; ?></td>
               <td><?php echo ucfirst($row['podcast_name']); ?></td>
               <td><a href="<?php echo $row['podcast_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

               <td>
                   <a href="<?php echo base_url().'podcast/ad_view_podcast/'.$row['podcast_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                   <a href="<?php echo base_url().'podcast/edit_podcast/'.$row['podcast_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                   <a href="<?php echo base_url().'podcast/delete_podcast/'.$row['podcast_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
               </td>
           </tr>
           <?php }}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>


 



        </div>  
    </div>
</div>


