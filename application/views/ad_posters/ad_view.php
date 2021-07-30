<div class="container"> <!-- div ouvrante container n°1 -->

    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'posters/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row d-flex justify-content-center">
            <img src="<?php echo base_url(); ?>uploads\poster_img\<?php echo $poster['file_name']; ?>" class="img-fluid">
        </div>
        <div class="row d-flex justify-content-center mb-4">
            <a href="<?php echo base_url().'index.php/posters/edit_poster/'.$poster['poster_id']; ?>" class="btn btn-sm btn-warning mx-4"><i class="fas fa-user-edit"></i></a>
            <a href="<?php echo base_url().'index.php/posters/delete_poster/'.$poster['poster_id']; ?>" class="btn btn-sm btn-danger mx-4" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-user-minus"></i></a>
        </div>
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->
