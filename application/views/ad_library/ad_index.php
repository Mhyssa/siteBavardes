<div class="container">
    <!-- Display status message -->
    <?php if (!empty($success_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        </div>
    <?php } elseif (!empty($error_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>


    <div class="container">


        <div class="row">
            <div class="col-md-12 head">
                <h3>Liste des Articles</h3>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="searchKeywordAdmin" class="form-control" placeholder="Nom d'un article"
                               value="<?php echo $searchKeywordAdmin; ?>">
                        <div class="input-group-append">
                            <input type="submit" name="submitSearch" class="btn btn-sm btn-outline-secondary"
                                   value="Rechercher">
                            <input type="submit" name="submitSearchReset" class="btn btn-sm btn-outline-secondary"
                                   value="Retour">
                        </div>
                    </div>
                </form>
                <!-- Add link -->
                <div class="row d-flex justify-content-between">
                    <div class="float-left">
                        <a href="<?php echo base_url(); ?>index.php/borrowing/ad_index" class="btn btn-sm btn btn-warning">Emprunts</i></a>
                    </div>

                    <div class="float-right">
                        <a href="<?php echo base_url(); ?>index.php/library/add_article" class="btn btn-sm btn-success"><i
                                    class="fas fa-user-plus"></i></a>
                    </div>
                </div>
            </div>


            <!-- Data list table -->
            <table class="table table-responsive table-boredered table-striped">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>Type</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Tome</th>
                    <th>Numéro</th>
                    <th>Date de Publication</th>
                    <th>Stock</th>
                    <th>Disponibilité</th>
                    <th>Etat</th>
                    <th>Commentaires</th>


                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($articles)) {

                    foreach ($articles as $row) {

                        ?>
                        <tr>
                            <td><?php echo ucfirst($row['article_id']); ?></td>
                            <td><?php echo ucfirst($row['type_name']); ?></td>
                            <td><img src="<?php echo base_url(); ?>uploads/article_img/<?php echo $row['file_name'] ?>"
                                     width="150" class="img-fluid thumbnail" alt="<?php echo $row['article_name'] ?>">
                            </td>
                            <td><?php echo ucfirst($row['article_name']); ?></td>
                            <td><?php echo $row['article_volume']; ?> </td>
                            <td><?php echo $row['article_number']; ?> </td>
                            <td><?php echo $row['article_date_publication']; ?> </td>
                            <td><?php echo $row['article_stock']; ?> </td>
                            <td><?php echo $row['article_available']; ?> </td>
                            <td><?php echo $row['article_state']; ?> </td>
                            <td><?php echo $row['article_comment']; ?> </td>


                            <td>
                                <a href="<?php echo base_url() . 'index.php/library/ad_view_/' . $row['article_id']; ?>"
                                   class="btn btn-sm btn-primary"><i class="fas fa-asterisk"></i></a>
                                <a href="<?php echo base_url() . 'index.php/library/edit_article/' . $row['article_id']; ?>"
                                   class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i></a>
                                <a href="<?php echo base_url() . 'index.php/library/delete_article/' . $row['article_id']; ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i
                                            class="fas fa-user-minus"></i></a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6">Aucune donnée(s) trouvée(s)...</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>


            <div>
                <?php echo $this->pagination->create_links(); ?>
            </div>


        </div>
    </div>
</div>
