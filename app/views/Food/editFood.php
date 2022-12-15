<?php $this->view('header', 'Foodie'); ?>
<div class="container py-3">
    <div class="hNav">
        <h3><a href="/Category/index"><?= _("Menu") ?></a></h3>
        <span aria-hidden="true">
            <h3>/</h3>
        </span>
        <h3><a href="/Food/index"><?= _("All Products") ?></a></h3>
        <span aria-hidden="true">
            <h3>/</h3>
        </span>
        <h2><?= _("Edit Food details") ?></h2>
    </div>

    <form action='' method='post' enctype='multipart/form-data'>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Old Picture") ?>
                <img src=<?php echo "/images/" . $data['food']->picture; ?> width="300">
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Upload a new picture:") ?><input class='form-control' type="file" name="picture" id="picture" /></label><img id='pic_preview' src='/images/blank.jpg' style='max-width:300px;' />
        </div>

        <!-- <div class="form-group">
        <label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture" id="picture" /></label>
    </div> -->

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Name:") ?>
                <input class='form-control' type="text" name="food_name" value="<?= gettext($data['food']->food_name) ?>" />
            </label>
        </div>

        <?php
        $food_desc = $data['food']->food_description;
        ?>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Description:") ?>
                <textarea name="food_description" rows="4" cols="50"><?php echo gettext($food_desc) ?></textarea>
            </label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Price:") ?>
                <input class='form-control' type="number" name="price" value="<?= $data['food']->price ?>" />
            </label>
        </div>

        <input type="submit" name="action" value=<?= _("Save changes") ?> class='btn btn themeButton' />
    </form>
</div>
<script>
    picture.onchange = evt => {
        const [file] = picture.files
        if (file) {
            pic_preview.src = URL.createObjectURL(file)
        }
    }
</script>




<?php $this->view('footer', 'Foodie'); ?>