

<div class="container">
    <h1 class="text-center">Ajout d'une Affichee</h1>
    <hr>

    <!-- Display status message -->
    <?php if(!empty($error_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-9 container-fluid">
            <?php echo form_open_multipart() ;?>
            <div class="form-group">
                <label>Nom : </label>
                <input type="text" name="poster_name" class="form-control" value="<?php echo !empty($poster['poster_name'])?$poster['poster_name']:''; ?>" >
                <?php echo form_error('poster_name','<p class="help-block text-danger">','</p>'); ?>
            </div>


            <div class="form-group">
                <label>Theme : </label>
                <input type="text" name="poster_theme" class="form-control" value="<?php echo !empty($poster['poster_theme'])?$poster['poster_theme']:''; ?>" >
                <?php echo form_error('poster_theme','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Stock : </label>
                <input type="text" name="poster_stock" class="form-control" value="<?php echo !empty($poster['poster_stock'])?$poster['poster_stock']:''; ?>" >
                <?php echo form_error('poster_stock','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                <label>Images (.jpg .jpeg .png .gif) :</label>
                <input type="file" name="image" class="form-control" value="<?php echo !empty($poster['file_name'])?$poster['file_name']:''; ?>">
                <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                <a href="<?php echo base_url().'index.php/posters/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                <input type="submit" name="poster_add" class="btn btn-success btn-sm" value="Ajouter">
            </div>


            <?php echo form_close(); ?>


        </div>
    </div>
</div>
