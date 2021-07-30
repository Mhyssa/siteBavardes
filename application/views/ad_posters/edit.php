
<div class="container">
    <h1>Modification d'une Affiche</h1>
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
                <?php if(!empty($poster['file_name'])){ ?>
                    <div class="img-box">
                        <img src="<?php echo base_url().'uploads/poster_img/'.$poster['file_name']; ?>" class = "thumbnail" width="150" id="img">
                    </div>
                <?php } ?>
            </div>


            <div class="form-group">
                <a href="<?php echo base_url().'index.php/poster/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                <input type="hidden" name="poster_id" value="<?php echo !empty($poster['poster_id'])?$poster['poster_id']:''; ?>">

                <input type="submit" name="poster_edit" class="btn btn-sm btn-warning" value="Modifier">
            </div>


            <?php echo form_close(); ?>


        </div>
    </div>
</div>
