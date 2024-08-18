<?php
class Book {
 
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        $this->title=$title;
        $this->availableCopies=$availableCopies;        
        }
      function getTitle(){
        return $this->title;
   }

   function getAvailableCopies(){
        return $this->availableCopies;
   }

   function borrowBook(){
        $this->availableCopies--;
   }
   function returnBook(){
        $this->availableCopies++;
   }
    
   }
   
   class Member {
    private $name;
    public function __construct($name) {
       $this->name=$name;
      }
   
    function getName(){
        return $this->name;
    }
    
   
   function borrowBook($book){
        $book->borrowBook();
   }
  
   function returnBook($book){
        $book->returnBook();
   }
    
   }
  
   $book1 = new Book("The Great Gatsby",5);
   $book2 = new Book("To Kill a Mockingbird",3);
 
   $member1 = new Member("John Doe"); 
   $member2 = new Member("Jane Smith");  
 
   $member1->borrowBook($book1);
   $member2->borrowBook($book2);
  
   echo "Available Copies of '".$book1->getTitle()."': ".$book1->getAvailableCopies()."\n";
   echo "Available Copies of '".$book2->getTitle()."': ".$book2->getAvailableCopies()."\n";