


<h1><?= $title ?></h1>

<div>

    <?php foreach($posts as $post) : ?>

        <div>
            <h3><?= $post ?></h3>
            <img src="/assets/images/cartman.png" style='width:200px; height:auto;' alt="cartman">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Alias natus corporis nisi repudiandae. Doloribus repellat natus dolores 
                exercitationem aspernatur nesciunt voluptates ad soluta eum reiciendis 
                adipisci ratione quibusdam, temporibus aperiam!</p>

        </div>


    <?php endforeach; ?>

</div>
