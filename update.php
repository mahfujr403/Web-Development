   <form action="" method="post" enctype="multipart/form-data">
       <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
       <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
       <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
       <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
       <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
       <input type="submit" value="update the prodcut" name="update_product" class="btn">
       <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>