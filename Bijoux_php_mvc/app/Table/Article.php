<?php

namespace App\Table;

class Article
{

    public function  __get($Key)
    {
        $method = 'get' . ucfirst($Key);
        $this->$Key = $this->$method();
        return $this->$Key;
    }


    public function getUrl()
    {
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getImage()
    {
        return 'src=' . "$this->image_Article";
    }
    public function getDescription()
    {
        return  $this->description_Article;
    }

    public function getQuantity()
    {
        return 'Q:' . $this->Quantité;
    }
    public function getPrix()
    {
        return 'prix:' . $this->prix . ' € ';
    }
}
