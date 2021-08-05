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
                <h3>Liste des emprunts</h3>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="searchKeywordAdmin" class="form-control" placeholder=" article, utilisateur , évenement" value="<?php echo $searchKeywordAdmin; ?>">
                        <div class="input-group-append">
                            <input type="submit" name="submitSearch" class="btn btn-sm btn-outline-secondary" value="Rechercher">
                            <input type="submit" name="submitSearchReset" class="btn btn-sm btn-outline-secondary" value="Retour">
                        </div>
                    </div>
                </form>
                <!-- Add link -->
                <div class="float-right">
                    <a href="<?php echo base_url(); ?>index.php/borrowing/add_borrowing" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i></a>
                </div>
            </div>





            <!-- Data list table -->
            <table class="table table-responsive table-boredered table-striped">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>Date d'emprunt'</th>
                    <th>Utilisateur </th>
                    <th>Article</th>
                    <th>Evénement </th>
                    <th>Retour </th>





                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($emprunts)){
                    foreach($emprunts as $row){

                        ?>
                        <tr>
                            <td><?php echo $row['borrowing_id']; ?></td>
                            <td><?php echo $row['borrowing_date']; ?></td>
                            <td>
                                <?php echo ucfirst($row['us_lname']).' '.ucfirst($row['us_fname']); ?> <br>
                                <?php echo $row['us_email']; ?> <br>
                                <?php echo $row['us_phone']; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url() . 'index.php/library/ad_view_/' . $row['article_id']; ?>"> <?php echo ucfirst($row['article_name']); ?></a></td>
                            <td>
                                <?php echo $row['event_name']; ?> <br>
                                Lieu:<?php echo $row['event_lieu']; ?> <br>
                                Date:<?php echo $row['event_date']; ?>

                            </td>
                            <td><?php echo $row['borrowing_return']; ?></td>




                            <td>
                                <a href="<?php echo base_url().'index.php/borrowing/edit_borrowing/'.$row['borrowing_id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i></a>
                                <a href="<?php echo base_url().'index.php/borrowing/delete_borrowing/'.$row['borrowing_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-user-minus"></i></a>
                            </td>
                        </tr>
                    <?php }}else{ ?>
                    <tr><td colspan="6">Aucune donnée(s) trouvée(s)...</td></tr>
                <?php } ?>
                </tbody>
            </table>






            <div>
                <?php echo $this->pagination->create_links(); ?>
            </div>


        </div>
    </div>
</div>
