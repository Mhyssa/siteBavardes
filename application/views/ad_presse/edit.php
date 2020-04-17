



<div class="container">
    <h1>Modification d'un Article de Presse</h1>
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




                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label>Catégorie : </label>
                            <?php
                                $options = array(
                                    ""=>"Choisir une catégorie",
                                    "Jeanne Magazine"=>"Jeanne Magazine",
                                    "Courrier Picard"=>"Courrier Picard",
                                    "Luttes LGBTQI+"=>"Luttes LGBTQI+",
                                    "Divers"=>"Divers"
                                );
                            ?>
                            <?php echo form_dropdown('presse_cat',$options,set_value('presse_cat'), array("class"=>"form-control")) ?>
                            <?php echo form_error('presse_cat','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label>Nom : </label>
                            <input type="text" name="presse_name" class="form-control" value="<?php echo !empty($presse['presse_name'])?$presse['presse_name']:''; ?>" >
                            <?php echo form_error('presse_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                </div>

               
                <div class="form-group">
                    <label>Lien Internet : </label>
                    <input type="text" name="presse_link" class="form-control" value="<?php echo !empty($presse['presse_link'])?$presse['presse_link']:''; ?>" >
                    <?php echo form_error('presse_link','<p class="help-block text-danger">','</p>'); ?>
                </div>
                

                <div class="form-group">
                        <a href="<?php echo base_url().'presse/ad_index'; ?>" class="btn btn-sm btn-secondary">Retour</a>
                        <input type="hidden" name="presse_id" value="<?php echo !empty($presse['presse_id'])?$presse['presse_id']:''; ?>">

                        <input type="submit" name="presse_edit" class="btn btn-sm btn-warning" value="Modifier">
                    </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>

