<?php if (strlen(trim($weekdays))> 0):?>

    <p>
    <span class="busines-weekdays">
        Monday-Friday:
         <?php echo $weekdays;?>
        </span>
    </p>

<?php endif; ?>


<?php if (strlen(trim($saturday))> 0):?>

    <p>
    <span class="busines-saturday">
        Saturday:
         <?php echo $saturday;?>
        </span>
    </p>

<?php endif; ?>


<?php if (strlen(trim($sunday))> 0):?>
    <p>
        Sunday:
        <span class="busines-sunday">
         <?php echo $sunday;?>
        </span>
    </p>

<?php endif; ?>