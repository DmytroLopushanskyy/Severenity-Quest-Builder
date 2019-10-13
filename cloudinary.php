<?php echo cloudinary_js_config(); ?>

<?php echo cl_image_tag($photo["public_id"], 
          array("format" => "jpg", "crop" => "fill", "width" => 120, "height" => 80)); ?>
