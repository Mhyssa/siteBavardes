
<?php if ($this->session->flashdata('borrowing_success')){ ?>
    <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('borrowing_success')?></div>
<?php }
?>
<?php if ($this->session->flashdata('borrowing_fail')){ ?>
    <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('borrowing_fail')?></div>
<?php }
?>
<div class="row d-flex justify-content-center ">
    <?php foreach ($articles as $game) { ?>
        <div class="col-sm-3 mt-3 mx-1">
            <p><?php echo $game->article_name?></p>
            <div class="row">
                <img src="<?php echo base_url(); ?>assets\img\games\game.png"  class="img-fluid" alt="<?php echo $game->article_name ?>" >
            </div>
            <div class="row d-flex justify-content-center">
                <a class="btn btn-primary text-warning" href="<?php echo base_url().'index.php/users/borrow/'.$game->article_id.'/'.$lang; ?>" role="button"><?php echo $borrow ?></a>
            </div>

        </div>
    <?php } ?>
</div>


</div>

</div>
