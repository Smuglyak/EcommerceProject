<body>
    <ul>
        <li>
            <a href='/Favorite/addFavorite/<?= $data->food_id ?>'>Add to Favorite</a><br>
            <?php
            echo "<tr>
		Name: <td type=name>$data->food_name</td><br>       		 
		id: <td type=name>$data->food_id</td><br>      		 
		Price: <td type=name>$data->price</td>$       		 
		</tr>
        </br>";
            ?>
        </li>
    </ul>
</body>