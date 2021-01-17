<div class="content">
    <?php
    require_once 'db/db_to_html.php';
    require_once 'db/db.php';
    $trainings = getActiveTrainings();
    displayTrainings($trainings);
    ?>
</div>