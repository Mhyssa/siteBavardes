<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Modifier</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('crud');?>">Retour</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('crud/update/'.$item->aff_id);?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre</strong>
                <input type="text" name="title" class="form-control" value="<?php echo $item->aff_nom; ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" class="form-control"><?php echo $item->aff_description; ?></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock</strong>
                <input type="number" name="stock" class="form-control"><?php echo $item->aff_stock; ?>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix</strong>
                <input type="number" name="price" class="form-control"><?php echo $item->aff_prix; ?>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>


</form>