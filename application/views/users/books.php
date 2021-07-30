<?php if ($this->session->flashdata('borrowing_success')){ ?>
    <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('borrowing_success')?></div>
<?php }
?>
<?php if ($this->session->flashdata('borrowing_fail')){ ?>
    <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('borrowing_fail')?></div>
<?php }
?>
<div class="row d-flex justify-content-center ">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col"><?php echo $book_title?></th>
            <th scope="col"><?php echo $book_author?></th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $book) {?>
        <tr>
            <td><?php echo $book->article_name ?></td>
            <td><?php echo $book->article_author ?></td>
            <td><a href="<?php echo base_url().'index.php/users/borrow/'.$book->article_id.'/'.$lang; ?>" class="text-warning"><?php echo $borrow ?></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


</div>

</div>
