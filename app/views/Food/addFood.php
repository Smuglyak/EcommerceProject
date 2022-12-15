<?php $this->view('header', 'Foodie'); ?>

<body>
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
            <h2><?= _("Add Food") ?></h2>
        </div>
    </div>

    <!-- <img class="bannerImage"src="/images/addFoodBanner.jpg" alt="AddFoodBanner"> -->

    <div class="container py-3">
        <form action='' method='post' enctype='multipart/form-data'>
            <div class="form-group">
                <label class="col-sm-2 col-form-label"><?= _("Picture:") ?><input class='form-control' type="file" name="picture" id="picture" /></label><img id='pic_preview' src='/images/blank.jpg' style="max-width:300px;max-height:300px" />
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label"><?= _("Name:") ?><input class='form-control' type="text" name="food_name" placeholder=<?= _("Enter the food name.") ?> /></label>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label"><?= _("Description:") ?>
                    <textarea name="food_description" rows="4" cols="50" placeholder=<?= _("Describe the food.") ?>></textarea></label>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label"><?= _("Price:") ?><input class='form-control' type="number" name="price" placeholder=<?= _("Enter the price of the food.") ?> /></label>
            </div>
            <input type="submit" name="action" value=<?= _("Create food") ?> class='btn themeButton' />
        </form>

        <script>
            picture.onchange = evt => {
                const [file] = picture.files
                if (file) {
                    pic_preview.src = URL.createObjectURL(file)
                }
            }
        </script>
    </div>
</body>
<?php $this->view('footer', 'Foodie'); ?>