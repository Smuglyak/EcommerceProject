<?php $this->view('header', 'Foodie'); ?>

<h1>Edit Menu details</h1>

<form action='' method='post' enctype='multipart/form-data'>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Name:
            <input class='form-control' type="text" name="menu_name" value="<?= $data->category_name ?>" />
        </label>
    </div>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Description:
            <textarea name="menu_description" rows="4" cols="50"><?= $data->category_description ?></textarea>
        </label>
    </div>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Menu Type:
            <input class='form-control' type="text" name="menu_type" value="<?= $data->category_type ?>" />
        </label>
    </div>

    <input type="submit" name="action" value="Save changes" class='btn btn-primary' />
</form>

<?php $this->view('footer', 'Foodie'); ?>