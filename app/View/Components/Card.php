<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $picPath;
    public $productID;
    public $picPath2;
    public $productTitle;
    public $productPrice;
    public $discounted;
    public $productCategory;


    public function __construct(
        $productID = 1,
        $picPath =
        "https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738",
        $picPath2 =
        "https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Sugar_Pie_004_c9557c71-24d7-4271-96c2-d0ce8ae2ae21_680x.jpg?v=1668199754",
        $productTitle = "Blah",
        $productPrice = "5678",
        $discounted = "4567",
        $productCategory = "Lips"
    ) {
        $this->productID = $productID;
        $this->picPath = $picPath;
        $this->picPath2 = $picPath2;
        $this->productTitle = $productTitle;
        $this->productPrice = $productPrice;
        $this->discounted = $discounted;
        $this->productCategory = $productCategory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
