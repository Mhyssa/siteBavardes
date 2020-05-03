  
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
   
   

   
     


        <div class="row">
        <div class="col-md-12 head">
            <h3>Liste des évènements </h3>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>event/add_event" class="btn btn-success btn-sm">Ajouter</a>
            </div>
        </div>



        <div class="container">
   
        <!-- Data list table --> 
        <table class="table table-responsive table-boredered table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Lieu</th>
                <th>Adresse</th>
                <th>Nombre de personne</th>
                <th>Lien Internet</th>
                <th>Sur inscription</th>
                <th>Non mixité choisie</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php if(!empty($event)){ 
                    foreach($event as $row){ 
                        $image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/events_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':''; 
                ?>
                <tr>
                    <td><?php echo $row['event_id']; ?></td>
                    <td><?php echo $image; ?></td>
                    <td><?php echo ucfirst($row['event_name']); ?></td>
                    <td><?php echo ucfirst($row['event_cat']); ?></td>
                    <td>
                        <?php
                            if(!empty($row['event_date'])){

                            //Pour mettre en français
                            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                            $date = $row['event_date'];
                            $date = strtotime($date);           
                            $date_fr = strftime('%A %d %B %Y', $date);


                            echo ucfirst($date_fr);
                        }?>
                    </td>


                    <td><?php echo $row['event_heure']; ?></td>
                    <td><?php echo ucfirst($row['event_lieu']); ?></td>
                    <td><?php echo ucfirst($row['event_adresse']); ?></td>
                    <td><?php echo $row['event_nombre_pers']; ?></td>

                    <td>
                        <?php if(!empty($row['event_link'])){ ?>
                        <a href="<?php echo $row['event_link']; ?>">Cliques ici</a>
                        <?php } ?>
                    </td>
                    
                    <td><?php echo ucfirst($row['event_inscription']); ?></td>
                    <td><?php echo ucfirst($row['event_non_mix']); ?></td>
                    <td><?php echo ucfirst($row['event_description']); ?></td>             
                    <td>
                        <a href="<?php echo base_url().'event/ad_view_event/'.$row['event_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                        <a href="<?php echo base_url().'event/edit_event/'.$row['event_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                        <a href="<?php echo base_url().'event/delete_event/'.$row['event_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                    <tr><td colspan="6">Aucune donnée(s) trouvée(s)...</td></tr>
                <?php } ?>
            </tbody>
        </table>


        </div>  
    </div>
</div>
