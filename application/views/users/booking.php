
    <p class="text-center text-white">
        <?php echo $booking_notice; ?><a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2021" class="link" target="_blank"><i class="fas fa-donate"></i></a>
    </p>


<div class="row d-flex justify-content-center">
    <img src="<?php echo base_url(); ?>assets\img\affiches\<?php echo $poster_id; ?>.png" class="img-fluid">
</div>
<div class="row d-flex justify-content-center">
    <?php
    $hidden = array(
            'poster_id' => $poster_id,
             'us_id' => $user['us_id'],
              'lang' =>$lang
    );
    echo form_open('Users/reservation', '', $hidden);?>
    <p class="mt-3"> <?php echo $msg_to_get_the_poster; ?></p>
    <?php   $options = array();
    foreach ($event_to_get_the_poster as $option){
        $date =New DateTime($option->event_date);
        $format=$date->format('d/m/Y');
        $options[$option->event_id] = $option->event_name." à ".$option->event_lieu." le ". $format;
    } ?>
    <div class="row d-flex justify-content-center">
         <?php echo form_dropdown('event', $options);?>
    </div>


<div class="row d-flex justify-content-center my-3">
    <button type="submit" name="reservation" class="btn bg-info text-white mx-2"><?php echo  $validate_booking ?></button>
    <?php echo form_close();?>

</div>
</div>
</div>

</div>


