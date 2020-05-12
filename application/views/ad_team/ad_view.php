



<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'team/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $team['team_name']; ?></h3>
        <div class>



        
       
        <?php if(!empty($team['file_name'])){ ?>

<div class="text-center">
<img src="<?php echo base_url('uploads/team_img/'.$team['file_name']); ?>" width="300" class="img-thumbnail">
</div>

<?php ;} ?>




<div class="text-center">


<?php if(!empty($team['team_title'])){ ?>
    <p class="text-light"><?php echo $team['team_title']; ?></p>
<?php } ?>

           <?php if(!empty($team['team_description'])){
               echo $team['team_description'];
               } ?>
</div>



          


        
        </div>






    </div>
</div>
</div>