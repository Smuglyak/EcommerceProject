<?php $this->view('header', 'Foodie'); ?>

<h1>Edit Food details</h1>

<form action='' method='post' enctype='multipart/form-data'>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Picture:</label>

        <img id='pic_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" />

    </div>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Name:
            <input class='form-control' type="text" name="food_name" value="<?= $data->food_name ?>" />
        </label>
    </div>

    <?php
    $food_desc = $data->food_description;
    ?>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Description:
            <textarea name="food_description" rows="4" cols="50"><?php echo $food_desc ?></textarea>
        </label>
    </div>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Price:
            <input class='form-control' type="text" name="price" value="<?= $data->price ?>" />
        </label>
    </div>

    <input type="submit" name="action" value="Save changes" class='btn btn-primary' />
</form>

<script>
    profile_pic.onchange = evt => {
        const [file] = pic_preview.files
        if (file) {
            pic_preview.src = URL.createObjectURL(file)
        }
    }

    file = "<?= $data->picture ?>";
    if (file != "") {
        document.getElementById("pic_preview").src = "/images/" + file;
    }
</script>

<?php $this->view('footer', 'Foodie'); ?>