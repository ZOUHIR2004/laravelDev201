<?php

namespace App\Http\Controllers;


class ProductController extends Controller
{
    
    public function category($slug){
                $category = config('category')[$slug] ;
                $productInfo = config('Products')[$slug] ;
                $pageInfo = config('page')[$slug] ;
        return view('displayCategory',compact('category','productInfo','pageInfo'));
    }

    public function produit($slug,$id){
        $ProduitDetails = config('Products')[$slug];
        $category = config('category')[$slug] ;
        switch($slug){
            case 'informatique' :
                foreach($ProduitDetails as $product):
                    if($product['id'] == $id) :
                        return view('product' , compact('product','slug','category')) ;
                    endif ;
                endforeach ;
                break ;

            case 'petit_electromenager' :
                foreach($ProduitDetails as $product):
                    if($product['id'] == $id) :
                        return view('product' , compact('product','slug','category')) ;
                    endif ;
                endforeach ;
                break ;

            case 'grand_electromenager' : 
                foreach($ProduitDetails as $product):
                    if($product['id'] == $id) :
                        return view('product' , compact('product','slug','category')) ;
                    endif ;
                endforeach ;
                break ;
                
            default : 
                return view('page404');
     
        }; 
    }


}
