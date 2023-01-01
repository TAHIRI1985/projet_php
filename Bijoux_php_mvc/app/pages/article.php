<?php

use App\Table\Categorie;
use App\Table\Article;
use App\App;
// $post = App\App::getDb()->prepare('SELECT*FROM articles WHERE id= ?', [$_GET['id']], 'App\Table\Article', true);
// if ($post === false) {
//     App\App::notFound();
// }

$post = Article::find($_GET['id']);
if ($post === false) {
    App::notFound();
}
$categorie = Categorie::find($post->id_categories);


?>



<div class=" divfieldset container-fluid">
    <div id="app" class="row justify-content-center  ">

        <h5> <?= $post->getDescription() ?></h5>
        <h5><span class="prix"> <?= $post->getPrix() ?> </span></h5>

        <fieldset class=" acol-ms-12 col-md-5 col-lg-3 ">
            <article class="f1 ">


                <img id="photo1" <?= $post->getImage1() ?> alt="bijoux" height="">
                <img id="photo1" <?= $post->getImage2() ?> alt="bijoux" height="">
            </article>


        </fieldset>


    </div>
</div>