<html>

<head>
    <title>Add Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</head>

<body>
    <h1>Add Food</h1>
    <form action='' method='post' enctype='multipart/form-data'>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture"
                    id="picture" /></label><img id='pic_preview' src='/images/blank.jpg'
                style="max-width:200px;max-height:200px" />
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Name:<input class='form-control' type="text" name="food_name"
                    placeholder='Enter the food name.' /></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Description:
                <textarea name="food_description" rows="4" cols="50"
                    placeholder="Describe the food."></textarea></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Price:<input class='form-control' type="text" name="price"
                    placeholder='Enter the price of the food.' /></label>
        </div>
        <input type="submit" name="action" value="Create food" class='btn btn-primary' />
    </form>

    <a href='/'>Cancel</a>

    <script>
    picture.onchange = evt => {
        const [file] = picture.files
        if (file) {
            pic_preview.src = URL.createObjectURL(file)
        }
    }
    </script>

</body>