<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Voir les affiches</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('crud');?>"> Retour</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom</strong>
            <?php echo $item->aff_nom; ?>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Description</strong>
            <?php echo $item->aff_description; ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stock</strong>
            <?php echo $item->aff_stock; ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prix</strong>
            <?php echo $item->aff_prix; ?>
        </div>
    </div>

</div>