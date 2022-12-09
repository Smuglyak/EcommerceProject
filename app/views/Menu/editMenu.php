<?php $this->view('header', 'Foodie'); ?>
<div class="container py-3">
    <div class="hNav" style="padding-bottom: 20px">
        <h3><a href="/Category/index">Menu</a></h3>
        <span aria-hidden="true">
            <h3>/</h3>
        </span>
        <h2>Edit <?php echo $data->category_name ?> details</h2>
    </div>

    <form action='' method='post' enctype='multipart/form-data'>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Name:
                <input class='form-control' type="text" name="menu_name" value="<?= $data->category_name ?>" />
            </label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Description:
                <textarea name="menu_description" rows="4" cols="50" value=""><?= $data->category_description ?></textarea>
            </label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Menu Type:
                <input class='form-control' type="text" name="menu_type" value="<?= $data->category_type ?>" />
            </label>
        </div>
        <input type="submit" name="action" value="Save changes" class='btn btn themeButton' />
    </form>
</div>

<?php $this->view('footer', 'Foodie'); ?>