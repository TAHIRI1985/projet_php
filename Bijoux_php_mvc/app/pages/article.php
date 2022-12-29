<?php



$post = App\App::getDb()->prepare('SELECT*FROM article WHERE id= ?', [$_GET['id']], 'App\Table\Article', true);

?>



<div class=" divfieldset container-fluid">
    <div id="app" class="row justify-content-center  ">
        <h5> <?= $post->getDescription() ?></h5>
        <h5><span class="prix"> <?= $post->getPrix() ?> </span></h5>

        <fieldset class=" acol-ms-12 col-md-5 col-lg-3 ">
            <article class="f1 ">


                <img id="photo1" <?= $post->getImage() ?> alt="bijoux" height="">

            </article>


        </fieldset>


    </div>
</div>