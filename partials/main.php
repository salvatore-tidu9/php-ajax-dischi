<main>

    <div class="main_container">

        <?php foreach ($database as $element) { ?>

            <div class="disc_item">

                <img class="cover" src="<?php echo $element["poster"]; ?>" alt="">

                <h3 class="title"> <?php echo $element["title"]; ?> </h3>

                <span class="author"> <?php echo $element["author"]; ?> </span>

                <span class="year"> <?php echo $element["year"]; ?> </span>

            </div>

        <?php } ?>

    </div>

</main>

