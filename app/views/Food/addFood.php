<?php $this->view('header', 'Foodie'); ?>

<body>
    <h1>Add Food</h1>
    <form action='' method='post' enctype='multipart/form-data'>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture" id="picture" /></label><img id='pic_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" />
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Name:<input class='form-control' type="text" name="food_name" placeholder='Enter the food name.' /></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Description:
                <textarea name="food_description" rows="4" cols="50" placeholder="Describe the food."></textarea></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Price:<input class='form-control' type="text" name="price" placeholder='Enter the price of the food.' /></label>
        </div>
        <input type="submit" name="action" value="Create food" class='btn btn-primary' />
    </form>

    <a href='/Food/index'>Cancel</a>

    <script>
        picture.onchange = evt => {
            const [file] = picture.files
            if (file) {
                pic_preview.src = URL.createObjectURL(file)
            }
        }
    </script>

</body>
<?php $this->view('footer', 'Foodie'); ?>