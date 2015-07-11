<div class="image-block">
  <a href="<?php echo $data['link']; ?>" target="_blank">
    <div class="image">
      <img src="<?php echo $data['image']; ?>" alt="<?php echo $data['title']; ?>">
      <div class="img-title animated">
        <?php echo $data['title']; ?>
      </div>
    </div>
  </a>
  <div class="title">
    <a href="<?php echo $data['link']; ?>"><?php echo $data['title']; ?></a>
  </div>
  <div class="content">
    <p><?php echo $data['excerpt']; ?></p>
  </div>
</div> 