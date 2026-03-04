<?php
class Book
{
   public $Image;
   public $Title;
   public $Author;
   public $Rating;
   public $Price;
   public $Quantity;

   function __construct($Image, $Title, $Author, $Rating, $Price, $Quantity)
   {
      $this->Image = $Image;
      $this->Title = $Title;
      $this->Author = $Author;
      $this->Rating = $Rating;
      $this->Price = $Price;
      $this->Quantity = $Quantity;
   }
   public function checkInStock(): string
   {
      if ($this->Quantity > 0) {
         return "In Stock";
      } else {
         return "Out Of Stock";
      }
   }
   public function buy(): int
   {
      $this->Quantity -= 1;
      return $this->Quantity;
   }
   public function showRatingStars(): string
   {
      $stars = "";
      for ($i = 0; $i < 5; $i++) {
         if ($this->Rating > 0) {
            $stars .= '<span class="fa fa-star checked"></span>';
            $this->Rating -= 1;
         } else {
            $stars .= '<span class="fa fa-star"></span>';
         }
      }
      return $stars;
   }
}
$books = array(new Book("images/hunger-games.jpeg", "The Hunger Games", "Suzanne Collins", 5, 14.99, 1), new Book("images/catching-fire.jpeg", "Catching Fire", "Suzanne Collins", 4, 13.99, 3), new Book("images/mockingjay.jpeg", "Mockingjay", "Suzanne Collins", 3, 10.99, 5));
?>