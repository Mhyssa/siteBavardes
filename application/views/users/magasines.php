<div class="row d-flex justify-content-center ">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col"><?php echo $magasine_name?></th>
            <th scope="col"><?php echo $magasine_numero?></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($magasines as $magasine) {?>
            <tr>
                <td><?php echo $magasine->article_name ?></td>
                <td><?php echo $magasine->article_number ?></td>
                <td><?php echo $borrow ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


</div>

</div>
