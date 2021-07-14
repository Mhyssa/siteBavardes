
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
        <?php foreach ($books as $book) {?>
        <tr>
            <td><?php echo $book->article_name ?></td>
            <td><?php echo $book->article_author ?></td>
            <td><?php echo $borrow ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


</div>

</div>
