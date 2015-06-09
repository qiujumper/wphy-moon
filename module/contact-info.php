<ul class="contact-info">
<?php if (ot_get_option('tel')) { ?>
    <li>电话:<?php echo ot_get_option('tel'); ?></li>
<?php } if (ot_get_option('qq')) {?>
    <li>QQ号:<?php echo ot_get_option('qq'); ?></li>
<?php } if (ot_get_option('qq-group')) {?>
    <li>QQ群:<?php echo ot_get_option('qq-group'); ?></li>
<?php } if (ot_get_option('email')) {?>
    <li>Email:<?php echo ot_get_option('email'); ?></li>
<?php } if (ot_get_option('weixin')) {?>
    <li>微信:<?php echo ot_get_option('weixin'); ?></li>
<?php } if (ot_get_option('weibo')) {?>
    <li>微博:<?php echo ot_get_option('weibo'); ?></li>
<?php } if (ot_get_option('address')) {?>
    <li>地址:<?php echo ot_get_option('address'); ?></li>
<?php } if (ot_get_option('qr')) {?>
    <li><img src="<?php echo ot_get_option('qr'); ?>" alt="QR"></li>
<?php } ?>
</ul>