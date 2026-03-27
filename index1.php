<?php
    class product{
        public $price=100;
        
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
    }

    class money{
        public $product;

        public function transfer(){
            return $this->getProduct()->getPrice();
        }

        public function setProduct($product){
            $this->product = $product;
        }
        public function getProduct(){
            return $this->product;
        }


    }
    

    
?>