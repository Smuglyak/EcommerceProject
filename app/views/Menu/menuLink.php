<ul>
    <div class="menuContainer">
        <li>
            <a href="/Category/details/<?php echo $data->category_id ?>">
                <h4><?php echo $data->category_name ?></h4>
            </a>

            <a href='/Category/delete/<?php echo $data->category_id ?>'>delete<i class='bi-trash'></i></a>


            <a href='/Category/edit/<?php echo $data->category_id ?>'>edit<i class="bi bi-pencil-square"></i></a>
        </li>
    </div>
</ul>
<hr>