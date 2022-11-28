<?php $this->view('header', 'Foodie'); ?>

<h1>Edit Menu</h1>

<form action='' method='post' enctype='multipart/form-data'>

    <div class="form-group">
        <label class="col-sm-2 col-form-label">Name:
            <input class='form-control' type="text" name="menu_name" value="<?= $data->category_name ?>" />
        </label>
    </div>

    <input type="submit" name="action" value="Save changes" class='btn btn-primary' />
</form>

<?php $this->view('footer', 'Foodie'); ?>