<li class='cluster'>
    <?php
    $max_count = 7;
    foreach ($cluster->corFriends as $fri) {
        if ($max_count == 0)
            break;
        $max_count--;
        ?>
        <div class='friend_div'  fbid=<?php echo $fri->fbid; ?>>
            <img src='https://graph.facebook.com/<?php echo $fri->fbid; ?>/picture'>
            <div class="name"><?php echo $fri->name; ?></div>
        </div>
<<<<<<< HEAD:protected/views/grouping/_cluster_main.php
    <?php } ?>
</div>
=======
	<?php } ?>
	<div class="iclear" style="height:5px"></div>
</li>
>>>>>>> origin/haoran:protected/views/grouping/_friends.php
