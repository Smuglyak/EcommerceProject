<body>

    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" id="profile_pic_preview" alt="Food pic">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data->food_name ?></h5>
            <p class="card-text"><?php echo $data->food_description ?></p>
            <p class="card-text"><?php echo $data->price ?> $</p>
            <a class="btn btn-primary" href='/Favorite/addFavorite/<?= $data->food_id ?>'>Add to Favorite</a>
        </div>
    </div>
</body>
<script>
    file = "" + "<?= $data->picture ?>"
    if (file != "") {
        document.getElementById("profile_pic_preview").src = "/images/" + file;
    }
</script>