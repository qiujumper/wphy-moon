<ul class="contact-info">
<?php if (get_option('tel')) { ?>
    <li>电话:<?php echo get_option('tel'); ?></li>
<?php } if (get_option('qq')) {?>
    <li>QQ号:<?php echo get_option('qq'); ?></li>
<?php } if (get_option('qq_group')) {?>
    <li>QQ群:<?php echo get_option('qq_group'); ?></li>
<?php } if (get_option('email')) {?>
    <li>Email:<?php echo get_option('email'); ?></li>
<?php } if (get_option('weixin')) {?>
    <li>微信:<?php echo get_option('weixin'); ?></li>
<?php } if (get_option('weibo')) {?>
    <li>微博: <a href="<?php echo get_option('weibo'); ?>" target="_blank"><i class="fa fa-weibo" style="color:#D24D57;" ></i></a></li>
<?php } if (get_option('address')) {?>
    <li>地址:<?php echo get_option('address'); ?></li>
<?php } if (get_option('qr')) {?>
    <li><img src="<?php echo get_option('qr'); ?>" alt="QR"></li> 
<?php } ?>
</ul>