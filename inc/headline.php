<div id="headline">
    <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `headlines`";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            {
                $headlines = $row['headlines'];
            }

            ?>

    <div class="headline-text">
        শিরোনাম
    </div>

    <marquee direction="left">
        <?php echo $headlines; ?>
    </marquee>
</div>