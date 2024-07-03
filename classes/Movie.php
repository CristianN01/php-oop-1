<?php

class Movie{
    public $title;
    public $length;
    public $genre;
    public $imageUrl;

    public function __construct($title, $length, $genre, $imageUrl){
        $this->title = $title;
        $this->$length = $length;
        $this->$genre = $genre;
        $this->$imageUrl = $imageUrl;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    
    public function getLength(){
        return $this->length;
    }

    public function setLength($length){
        $this->length = $length;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getImageUrl(){
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl){
        $this->imageUrl = $imageUrl;
    }



}


