<?php
require_once('../config/db_config.php');

$result = $db->query("SELECT * FROM images ORDER BY id DESC");
?>

<?php if ($result->num_rows > 0) { ?>
    <div class="gallery">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['image']); ?>" />
        <?php } ?>
    </div>
<?php } else { ?>
    <p class="status-error">Image not found</p>
<?php } ?>