<p>Main page!!!</p>

<?php foreach ($news as $new): ?>
    <h3> <?php echo $new['title'] ?></h3>
    <p> <?php echo $new['content'] ?></p>
    <hr>
<?php endforeach; ?>
