<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url(); ?>Home"><i class="fas fa-home"></i> Home</a>
    </li>

    <?php if (isset($subtitle) && $subtitle != '') { ?>
        <li class = "breadcrumb-item active">
            <?php
            echo $subtitle;
            ?>
        </li>
        <?php
    } else {
        echo '';
    }
    ?>

</ol>