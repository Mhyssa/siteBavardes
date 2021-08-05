<div class="container"> <!-- div ouvrante container n°1 -->

    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'library/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row d-flex justify-content-center">
            <img src="<?php echo base_url(); ?>uploads\article_img\<?php echo $article['file_name']; ?>" class="img-fluid">
        </div>
        <div class="form-group">
            <label>Titre : </label>
           <?php echo !empty($article['article_name'])?$article['article_name']:''; ?>
        </div>
        <div class="form-group">
            <label>Auteur : </label>
            <?php echo !empty($article['article_author'])?$article['article_author']:''; ?>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label>Type : </label>
                <?php echo !empty($article['type_name']) ? $article['type_name'] : ''; ?>
            </div>
            <div class="col-sm-4">
                <label>Tome : </label>
               <?php echo !empty($article['article_volume'])?$article['article_volume']:''; ?>
            </div>
            <div class="col-sm-4">
                <label>Numéro : </label>
               <?php echo !empty($article['article_number'])?$article['article_number']:''; ?>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label>Date de Publication : </label>
               <?php echo !empty($article['article_date_publication'])?$article['article_date_publication']:''; ?>
            </div>
            <div class="col">
                <label>Etat du document : </label>
                <?php echo !empty($article['article_state'])?$article['article_state']:''; ?>
            </div>
        </div>
        <div class="form-group">
            <label>commentaire : </label>
           <?php echo !empty($article['article_comment'])?$article['article_comment']:''; ?>
        </div>

        <div class="row d-flex justify-content-center mb-4">
            <a href="<?php echo base_url().'index.php/library/edit_article/'.$article['article_id']; ?>" class="btn btn-sm btn-warning mx-4"><i class="fas fa-user-edit"></i></a>
            <a href="<?php echo base_url().'index.php/library/delete_article/'.$article['article_id']; ?>" class="btn btn-sm btn-danger mx-4" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-user-minus"></i></a>
        </div>
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->
