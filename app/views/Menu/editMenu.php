<?php $this->view('header', 'Foodie'); ?>
<div class="container py-3">
    <div class="hNav" style="padding-bottom: 20px">
        <h3><a href="/Category/index"><?= _("Menu") ?></a></h3>
        <span aria-hidden="true">
            <h3>/</h3>
        </span>
        <h2><?= _("Edit") ?> <?php echo $data->category_name ?> <?= _("details") ?></h2>
    </div>

    <form action='' method='post' enctype='multipart/form-data'>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Name:") ?>
                <input class='form-control' type="text" name="menu_name" value="<?= gettext($data->category_name) ?>" />
            </label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Description:") ?>
                <textarea name="menu_description" rows="4" cols="50" value=""><?= gettext($data->category_description) ?></textarea>
            </label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label"><?= _("Menu Type:") ?>
                <input class='form-control' type="text" name="menu_type" value="<?= gettext($data->category_type) ?>" />
            </label>
        </div>
        <input type="submit" name="action" value="Save changes" class='btn btn themeButton' />
    </form>
</div>

<?php $this->view('footer', 'Foodie'); ?>