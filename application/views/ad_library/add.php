

<div class="container">
    <h1 class="text-center">Ajout d'un article</h1>
    <hr>

    <!-- Display status message -->
    <?php if(!empty($error_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-9 container-fluid">
            <?php echo form_open_multipart('library/add_article') ;?>
            <div class="form-group">
                <label>Titre : </label>
                <input type="text" name="article_name" class="form-control" value="<?php echo !empty($article['article_name'])?$article['article_name']:''; ?>" >
                <?php echo form_error('article_name','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Auteur : </label>
                <input type="text" name="article_author" class="form-control" value="<?php echo !empty($article['article_author'])?$article['article_author']:''; ?>" >
                <?php echo form_error('article_author','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Type : </label> <br>
                    <select name="type_id" >
                        <option></option>
                        <?php foreach ($type as $type){?>
                            <option value="<?= $type->type_id ?>"><?= $type->type_name ?></option>
                        <?php } ?>
                    </select>
                    <?php echo form_error('type_id','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                    <label>Tome : </label>
                    <input type="text" name="article_volume" class="form-control" value="<?php echo !empty($article['article_volume'])?$article['article_volume']:''; ?>" >
                    <?php echo form_error('article_volume','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                    <label>Numéro : </label>
                    <input type="text" name="article_volume" class="form-control" value="<?php echo !empty($article['article_number'])?$article['article_number']:''; ?>" >
                    <?php echo form_error('article_number','<p class="help-block text-danger">','</p>'); ?>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label>Date de Publication : </label>
                    <input type="text" name="article_date_publication" class="form-control" value="<?php echo !empty($article['article_date_publication'])?$article['article_date_publication']:''; ?>" >
                    <?php echo form_error('article_date_publication','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col">
                    <label>Etat du document : </label>
                    <input type="text" name="article_volume" class="form-control" value="<?php echo !empty($article['article_state'])?$article['article_state']:''; ?>" >
                    <?php echo form_error('article_state','<p class="help-block text-danger">','</p>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label>commentaire : </label>
                <input type="text" name="article_volume" class="form-control" value="<?php echo !empty($article['article_comment'])?$article['article_comment']:''; ?>" >
                <?php echo form_error('article_comment','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                <label>Images (.jpg .jpeg .png .gif) :</label> <br>
                <input type="file" name="image" value="<?php echo !empty($article['file_name'])?$article['file_name']:''; ?>">
                <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                <a href="<?php echo base_url().'index.php/library/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                <button class="btn btn-success btn-sm" type="submit">Ajouter</button>
            </div>


            <?php echo form_close(); ?>


        </div>
    </div>
</div>
