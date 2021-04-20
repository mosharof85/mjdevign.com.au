
@extends('layouts.dropshipping')

@section('content')
<style>
.LoadingHolder{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0%;
    left: 0%;
    z-index: 1000000;
    background-color: rgba(0,0,0,0.4);
    color: #821f4e;
    justify-content: center;
}
.makeItHidden{
    display : none !important;
}
.makeItShown{
    display: block !important;
}
</style>
<div class="LoadingHolder makeItHidden d-flex align-items-center">
        <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
        </div>&nbsp;&nbsp;
        <p>Please wait while we process your order</p>
</div>


<div style="margin-bottom:70px;" >
<form id="dropshippingform" method="POST" action="{{url('/dropshipping/store')}}" enctype="multipart/form-data">
        @csrf
<div class="content">

    <div class="col1">
        <div class="colTop">
            <div class="logo-image_1">
                <img src={{"/images/shipping.png"}} alt="drop">
                <div class="form-info">
                    <p class="form-title"><b>Dropshipping Store Package</b></p>
                    @include('modals.loginmodal')
                </div>
            </div>
        </div>


        <div class="stepsMain">

                @include('components.chooseDomain')

            <div class="stepActive step-active">
                <div class="activeTop">
                    <h6 class="sBold">2.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step2Head.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 2
                        </p>
                        <p class="slight">
                            Product Information
                        </p>
                    </div>
                </div>
                <div class="bodyContainer">
                    <div class="step-active__body">

                        <div class="step-category">
                            <div class="step-category-additional">
                                <div class="step-category-additional__header" style="margin-bottom: 20px;">
                                    <h2>
                                        Products & Profit
                                    </h2>
                                </div>

                                <p class="step-category-additional__subtitle">
                                    Your store is setup with 200 of the most in demand products on AliExpress from categories of your choice.<br>
                                    Select the type of products you want to sell from the categories listed below and enter in the amount and profit margin for each.
                                </p>


                                <div class="products-remaining">
                                    <p class="products-remaining__title">
                                        Products Remaining
                                    </p>
                                    <span class="products-remaining__amount">
                                    200/200
                                        </span>
                                </div>

                                <div class="step-category__wrapper">
                                    <div class="products-table">
                                        <div style="overflow-x:auto;" class="data-table__wrapper">
                                            <table class="data-table">
                                                <thead>
                                                <tr class="data-table__head-row ">
                                                    <th
                                                            class="data-table__head-column data-table__head-column-category cat">
                                                        Category:
                                                    </th>
                                                    <th
                                                            class="data-table__head-column data-table__head-column-item">
                                                        Type:
                                                    </th>
                                                    <th
                                                            class="data-table__head-column data-table__head-column-amount cat">
                                                        Number of products:
                                                    </th>
                                                    <th
                                                            class="data-table__head-column data-table__head-column-percentage">
                                                        Profit margin:
                                                    </th>
                                                    <th
                                                            class="data-table__head-column data-table__head-column-actions">
                                                        Actions:
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="step-category__label">
                                        Select from categories below
                                    </div>

                                    <div class="step-category__content">
                                        <div class="step-category__nav-wrapper">
                                            <div class="step-category__header">
                                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="43.5 62 113 76.001" viewBox="43.5 62 113 76.001" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                                                    <g>
                                                        <path d="M153.128 131.287H127.49c.007-.065.021-.129.021-.196V86.632c0-.061-.013-2.362-.019-2.421l-3.872 1.901v44.979c0 .067.013.131.021.196h-14.004c.007-.062.02-.122.02-.185V92.908l-3.89 1.91v36.283c0 .064.013.123.02.185H91.802V101.28l-.653.32a3.377 3.377 0 0 1-3.237-.146v29.833H72.599V95.213l-3.89 2.222v33.852H50.245v-22.324l.554-1.235.226-2.402.104-3.283-.883-.82V65.357c0-1.854-1.51-3.357-3.373-3.357S43.5 63.503 43.5 65.357v69.287a3.365 3.365 0 0 0 3.373 3.357h106.255c1.863 0 3.372-1.503 3.372-3.357s-1.51-3.357-3.372-3.357z" fill="#363535" data-color="1"></path>
                                                        <path d="M146.656 72.912a3.373 3.373 0 0 0-2.5-1.727l-16.769-2.327a3.374 3.374 0 0 0-3.25 1.43 3.342 3.342 0 0 0-.158 3.534l3.029 5.383-33.93 16.66.119-13.345a3.352 3.352 0 0 0-1.669-2.926 3.383 3.383 0 0 0-3.382-.014l-37.901 21.644v7.74L68.709 98.42l3.89-2.222L86.4 88.316l-.115 12.942a3.352 3.352 0 0 0 1.579 2.872c.015.01.033.013.048.022a3.377 3.377 0 0 0 3.237.146l.653-.32 13.964-6.856 3.89-1.91 13.964-6.856 3.872-1.901 2.817-1.383 3.38 6.006a3.374 3.374 0 0 0 3.062 1.714 3.374 3.374 0 0 0 2.932-1.925l7.06-14.927a3.35 3.35 0 0 0-.087-3.028zm-10.286 9.194l-.005-.009.012-.006-.007.015z" fill="#BAD2FF" data-color="2"></path>
                                                    </g>
                                                </svg>
                                                <h2>
                                                    Categories
                                                </h2>
                                            </div>
                                            <ul class="step-category__nav">
                                                <li class="step-category__nav-item step-category__nav-item--active"
                                                    data-category="1">
                                                    <img src={{"/images/w1.png"}} alt="">
                                                    <a>
                                                        Woman’s Fashion
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="2">
                                                    <img src={{"/images/mc.png"}} alt="">
                                                    <a>
                                                        Men’s Fashion
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="3">
                                                    <img src={{"/images/phoneC.png"}} alt="">
                                                    <a>
                                                        Phones & Telecommunication
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="4">
                                                    <img src={{"/images/comp.png"}} alt="">
                                                    <a>
                                                        Computer, Office & Security
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="5">
                                                    <img src={{"/images/ring.png"}} alt="">
                                                    <a>
                                                        Jewellery & Watches
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="6">
                                                    <img src={{"/images/home.png"}} alt="">
                                                    <a>
                                                        Home, Pet & Appliances
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="7">
                                                    <img src={{"/images/bag.png"}} alt="">
                                                    <a>
                                                        Bags & Shoes
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="8">
                                                    <img src={{"/images/toy.png"}} alt="">
                                                    <a>
                                                        Toys, Kids & Babies
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="9">
                                                    <img src={{"/images/outdoor.png"}} alt="">
                                                    <a>
                                                        Outdoor Fun & Sports
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="10">
                                                    <img src={{"/images/beauty.png"}} alt="">
                                                    <a>
                                                        Beauty, Health & Hair
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="11">
                                                    <img src={{"/images/auto.png"}} alt="">
                                                    <a>
                                                        Automobiles & Motorcycles
                                                    </a>
                                                </li>
                                                <li class="step-category__nav-item" data-category="12">
                                                    <img src={{"/images/tool.png"}} alt="">
                                                    <a>
                                                        Home Improvement & Tools
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="step-category-list step-category-list--active"
                                                data-category-list="1" data-category="Woman’s Fashion">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Woman's Fashion
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox"  value="Blouses & Skirts" id="Blouses & Skirts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Blouses & Skirts">Blouses & Skirts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox"  value="Hoodies & Sweatshirts" id="Hoodies & Sweatshirts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hoodies & Sweatshirts">Hoodies & Sweatshirts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox"  value="Women's Sets" id="Women's Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Women's Sets">Women's Sets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Suits & Blazers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Suits & Blazers">Suits & Blazers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bodysuits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bodysuits">Bodysuits

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tanks & Camis">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tanks & Camis">Tanks & Camis


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Coats & Jackets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Coats & Jackets">Coats & Jackets


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sweaters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sweaters">Sweaters


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Dresses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Dresses">Dresses</span>
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tees">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tees">Tees</span>
                                                    </label>
                                                </label>


                                                <p class="step-category-item__title mt-3">
                                                    Swimwear
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bikiki Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bikiki Sets">Bikiki Sets


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cover-ups">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cover-ups">Cover-ups
                                                    </label>
                                                </label>
                                            </div>


                                            <div class="step-category-item">
                                                <p class="step-category-item__title ">
                                                    Bottoms
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Leggings">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Leggings">Leggings
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Skirts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Skirts">Skirts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shorts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shorts">Shorts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jeans">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jeans">Jeans
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pants & Caprists">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pants & Caprists"> Pants & Capris

                                                    </label>
                                                </label>
                                                <p class="step-category-item__title mt-3">
                                                    Wedding & Events
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wedding Dress">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wedding Dress">Wedding Dress
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Prom Dress">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Prom Dress">Prom Dress

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Evening Dress">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Evening Dress">Evening Dress

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="African Clothing">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="African Clothing">African Clothing

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cosplay">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cosplay">Cosplay

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Costumes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Costumes">Costumes

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Womans Underwear
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pyjama Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pyjama Sets">Pyjama Sets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bras">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bras">Bras
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Panties">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Panties">Panties

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Woman's socks">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Woman's socks">Woman's socks

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bra & Brief Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bra & Brief Sets">Bra & Brief Sets

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hair Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hair Accessories">Hair Accessories


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sunglasses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sunglasses">Sunglasses

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Blue Light Blocking">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Blue Light Blocking">Blue Light Blocking


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Glasses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Glasses">Glasses


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baseball Caps">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baseball Caps">Baseball Caps


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bucket Hats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bucket Hats">Bucket Hats


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Belts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Belts">Belts

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a target="_blank"
                                                    href="https://www.aliexpress.com/all-wholesale-products.html?spm=a2g0o.home.16005.1.650c2145TZw4qF">here</a> at AliExpress</div>
                                        </div>
                                        <div class="step-category-list" data-category-list="2" data-category="Men's Fashion">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Men's Fashion
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hoodies & Sweatshirts-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hoodies & Sweatshirts-Men">Hoodies & Sweatshirts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="T-Shirts-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="T-Shirts-Men">T-Shirts/Shirts/Casual
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shorts-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shorts-Men">Shorts

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Sets">Men's Sets

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Bottoms
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Casual Pants">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Casual Pants">Casual Pants


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sweatpants">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sweatpants">Sweatpants
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cargo">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cargo">Cargo Pants
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jeans-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jeans-Men">Jeans
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Harem">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Harem">Harem
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pants-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pants-Men">Pants
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shorts-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shorts-Men">Shorts
                                                    </label>
                                                </label>
                                            </div>


                                            <div class="step-category-item">
                                                <p class="step-category-item__title ">
                                                    Outerwear & Jackets
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jackets & Sweaters-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jackets & Sweaters-Men">Jackets & Sweaters
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Casual Faux Leather">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Casual Faux Leather">Casual Faux Leather
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Genuine Leather">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Genuine Leather">Genuine Leather
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="ParkasDown Jackets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="ParkasDown Jackets">ParkasDown Jackets
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Suits & Blazer-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Suits & Blazer-Men">Suits & Blazer
                                                    </label>
                                                </label>
                                                <p class="step-category-item__title mt-3">
                                                    Underwear & Loungewear
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Boxers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Boxers">Boxers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Briefs-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Briefs-Men">Briefs

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Long Johns">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Long Johns">Long Johns

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Sleep & Lounge">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Sleep & Lounge">Men's Sleep & Lounge

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pajama Sets-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pajama Sets-Men">Pajama Sets

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Scarves-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Scarves-Men">Scarves

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Skullies & Beanies">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Skullies & Beanies">Skullies & Beanies
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Prescription Glasses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Prescription Glasses">Prescription Glasses

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Gloves & Mittens">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Gloves & Mittens">Gloves & Mittens

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Belts-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Belts-Men">Belts

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bomber Hats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bomber Hats">Bomber Hats

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fedoras">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fedoras">Fedoras

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Berets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Berets">Berets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baseball Caps-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baseball Caps-Men">Baseball Caps

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Novelty & Special Use
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cosplay Costumes-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cosplay Costumes-Men">Cosplay Costumes


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Stage & Dance Wear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Stage & Dance Wear">Stage & Dance Wear

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Exotic Apparel">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Exotic Apparel">Exotic Apparel


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>
                                        <div class="step-category-list" data-category-list="3" data-category="Phones & Telecommunication">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Mobile Phones
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Android Phones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Android Phones">Android Phones
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="iPhones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="iPhones">iPhones
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Feature Phones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Feature Phones">Feature Phones

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Refurbished Phones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Refurbished Phones">Refurbished Phones

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="8GB RAM 5G Phones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="8GB RAM 5G Phones">8GB RAM 5G Phones

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Hot Brands
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="realme">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="realme">realme


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="OnePlus">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="OnePlus">OnePlus
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="HUAWEI">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="HUAWEI">HUAWEI
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="infinix">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="infinix">infinix
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="POCO">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="POCO">POCO
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="UMIDIGI">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="UMIDIGI">UMIDIGI
                                                    </label>
                                                </label>
                                            </div>


                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Mobile Phone Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cases & Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cases & Covers">Cases & Covers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cables Chargers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cables Chargers">Cables Chargers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Power Bank">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Power Bank">Power Bank
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Holders & Stands">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Holders & Stands">Holders & Stands
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Screen Protectors">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Screen Protectors">Screen Protectors
                                                    </label>
                                                </label>
                                                <p class="step-category-item__title mt-3">
                                                    Hot Cases & Covers Cases
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For iPhone Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For iPhone Cases">For iPhone Cases
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For Samsung Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For Samsung Cases">For Samsung Cases

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For Huawei Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For Huawei Cases">For Huawei Cases
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For Xiaomi Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For Xiaomi Cases">For Xiaomi Cases

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For Meizu Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For Meizu Cases">For Meizu Cases

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="For OPPO">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="For OPPO">For OPPO
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Featured Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wireless Chargers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wireless Chargers">Wireless Chargers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Chargers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Chargers">Car Chargers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Lenses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Lenses">Lenses

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Adapters & Converters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Adapters & Converters">Adapters & Converters

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Mobile Phone Parts Phone
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LCDs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LCDs">LCDs


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Phone Batteries">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Phone Batteries">Phone Batteries

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Housings & Frames">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Housings & Frames">Housings & Frames


                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Communication Equipment
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Walkie Talkie">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Walkie Talkie">Walkie Talkie


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fiber Optic Equipment">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fiber Optic Equipment">Fiber Optic Equipment

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Communications Antennas">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Communications Antennas">Communications Antennas


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>
                                        <div class="step-category-list" data-category-list="4" data-category="Computer, Office & Security">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Components & Peripherals
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="CPUs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="CPUs">CPUs
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Motherboards">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Motherboards">Motherboards
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Graphics Cards">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Graphics Cards">Graphics Cards

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Mice">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Mice">Mice

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Keyboards">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Keyboards">Keyboards

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Laptops
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Gaming Laptops">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Gaming Laptops">Gaming Laptops


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Ultraslim Laptops">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Ultraslim Laptops">Ultraslim Laptops
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tablets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tablets">Tablets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Laptop Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Laptop Accessories">Laptop Accessories
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tablet Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tablet Accessories">Tablet Accessories
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Laptop Bags & Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Laptop Bags & Cases">Laptop Bags & Cases
                                                    </label>
                                                </label>
                                            </div>


                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Security & Protection
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Surveillance Items">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Surveillance Items">Surveillance Items
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Access Control Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Access Control Systems">Access Control Systems
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Smoke Detectors">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Smoke Detectors">Smoke Detectors
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Safety Equipment">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Safety Equipment">Safety Equipment
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Alarms & Sensors">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Alarms & Sensors">Alarms & Sensors
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Door Intercom Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Door Intercom Systems">Door Intercom Systems
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Storage Devices
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="USB Flash Drives">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="USB Flash Drives">USB Flash Drives
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Memory Cards">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Memory Cards">Memory Cards

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="External Hard Drives">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="External Hard Drives">External Hard Drives
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="HDD Box Enclosures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="HDD Box Enclosures">HDD Box Enclosures

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="SSDs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="SSDs">SSDs

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Office Electronics
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="3D Printers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="3D Printers">3D Printers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="3D Printer Parts & Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="3D Printer Parts & Accessories">3D Printer Parts &
                                                        Accessories
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Printers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Printers">Printers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Printer Parts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Printer Parts">Printer Parts

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Scanners">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Scanners">Scanners

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Ink Cartridges">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Ink Cartridges">Ink Cartridges

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="3D Printing Materials">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="3D Printing Materials">3D Printing Materials

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Computer Networking
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wireless Routers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wireless Routers">Wireless Routers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Network Cards">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Network Cards">Network Cards

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="3G Modems Modem-Router">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="3G Modems Modem-Router">3G Modems Modem-Router


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Combos Networking Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Combos Networking Tools">Combos Networking Tools


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="5" data-category="Jewellery & Watches">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Fine Jewellery
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="925 Silver Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="925 Silver Jewellery">925 Silver Jewellery
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Diamond Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Diamond Jewellery">Diamond Jewellery
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pearl Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pearl Jewellery">Pearl Jewellery

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Gemstones">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Gemstones">Gemstones

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="K-Gold Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="K-Gold Jewellery">K-Gold Jewellery

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fine Earrings">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fine Earrings">Fine Earrings

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fine Jewellery Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fine Jewellery Sets">Fine Jewellery Sets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Fine Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Fine Jewellery">Men's Fine Jewellery

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Wedding & Engagement
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bridal Jewellery Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bridal Jewellery Sets">Bridal Jewellery Sets


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Engagement Rings Wedding">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Engagement Rings Wedding">Engagement Rings Wedding
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hair Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hair Jewellery">Hair Jewellery
                                                    </label>
                                                </label>
                                            </div>


                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Men's Watches
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Mechanical Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Mechanical Watches">Mechanical Watches
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Quartz Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Quartz Watches">Quartz Watches
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Digital Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Digital Watches">Digital Watches
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Dual Display Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Dual Display Watches">Dual Display Watches
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sports Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sports Watches">Sports Watches
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Women's Watches
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Women's Bracelet Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Women's Bracelet Watches">Women's Bracelet Watches
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Elegant Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Elegant Watches">Elegant Watches

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Romantic Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Romantic Watches">Romantic Watches
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sports Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sports Watches">Sports Watches

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Innovative Watches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Innovative Watches">Innovative Watches

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Fashion Jewellery
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Necklaces & Pendants">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Necklaces & Pendants">Necklaces & Pendants

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Trendy Rings">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Trendy Rings">Trendy Rings
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Trendy Earrings">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Trendy Earrings">Trendy Earrings

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bracelets & Bangles">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bracelets & Bangles">Bracelets & Bangles

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Cuff Links">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Cuff Links">Men's Cuff Links

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fashion Jewellery Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fashion Jewellery Sets">Fashion Jewellery Sets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Charms Body Jewellery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Charms Body Jewellery">Charms Body Jewellery

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Beads & DIY Jewellery
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Beads">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Beads">Beads


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jewellery Findings & Components">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jewellery Findings & Components">Jewellery Findings &
                                                        Components

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jewellery Packaging & Displays">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jewellery Packaging & Displays">Jewellery Packaging &
                                                        Displays


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="6" data-category="Home, Pet & Appliances">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Art
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Scrapbook & Stamping">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Scrapbook & Stamping">Scrapbook & Stamping
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fabric & Sewing Supplies">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fabric & Sewing Supplies">Fabric & Sewing Supplies
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Needle Arts & Craft">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Needle Arts & Craft">Needle Arts & Craft

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="5D DIY Diamond Painting">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="5D DIY Diamond Painting">5D DIY Diamond Painting

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Pet Products
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Dog Collars & Leads">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Dog Collars & Leads">Dog Collars & Leads


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Toys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Toys">Toys
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fish & Aquatic">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fish & Aquatic">Fish & Aquatic
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Home Textiles
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cushion">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cushion">Cushion
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Curtains">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Curtains">Curtains
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bedding Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bedding Sets">Bedding Sets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Beach Towels">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Beach Towels">Beach Towels
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Celebrations
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Events & Parties">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Events & Parties">Events & Parties
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Artificial & Dried Flowers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Artificial & Dried Flowers">Artificial & Dried Flowers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Gift Bags & Boxes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Gift Bags & Boxes">Gift Bags & Boxes
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Household Items
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Umbrellas">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Umbrellas">Umbrellas
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bathroom">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bathroom">Bathroom
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Scales">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Scales">Scales
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sweepers & Mops">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sweepers & Mops">Sweepers & Mops
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Home Storage
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Storage Boxes & Bins">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Storage Boxes & Bins">Storage Boxes & Bins
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Laundry Baskets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Laundry Baskets">Laundry Baskets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Makeup Organizers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Makeup Organizers">Makeup Organizers
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Furniture
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Office Furniture">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Office Furniture">Office Furniture

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Home Furniture">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Home Furniture">Home Furniture
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Kitchen
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bakeware">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bakeware">Bakeware


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Drinkware">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Drinkware">Drinkware

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Kitchen Tools & Gadgets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Kitchen Tools & Gadgets">Kitchen Tools & Gadgets


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Kitchen Knives & Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Kitchen Knives & Accessories">Kitchen Knives & Accessories

                                                    </label>
                                                </label>


                                                <p class="step-category-item__title mt-3">
                                                    Home Decor
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Painting & Calligraphy">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Painting & Calligraphy">Painting & Calligraphy


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wall Stickers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wall Stickers">Wall Stickers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Figurines & Miniatures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Figurines & Miniatures">Figurines & Miniatures


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wall Clocks">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wall Clocks">Wall Clocks

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Garden Supplies
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Watering & Irrigation Kits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Watering & Irrigation Kits">Watering & Irrigation Kits


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Flower Pots & Planters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Flower Pots & Planters">Flower Pots & Planters

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Repellents Outdoor Furniture">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Repellents Outdoor Furniture">Repellents Outdoor Furniture


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="7" data-category="Bags & Shoes">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Women's Luggage & Bags
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Stylish Backpacks">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Stylish Backpacks">Stylish Backpacks
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Totes Shoulder Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Totes Shoulder Bags">Totes Shoulder Bags
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wallets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wallets">Wallets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Evening Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Evening Bags">Evening Bags

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Clutches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Clutches">Clutches

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Women's Shoes
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Women's Sandals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Women's Sandals">Women's Sandals


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Flats High">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Flats High">Flats High
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Heels">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Heels">Heels
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Vulcanized Sneakers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Vulcanized Sneakers">Vulcanized Sneakers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="House Slippers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="House Slippers">House Slippers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Boots">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Boots">Boots
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Men's Luggage & Bags
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Backpacks">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Backpacks">Men's Backpacks
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Crossbody Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Crossbody Bags">Crossbody Bags

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Briefcases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Briefcases">Briefcases
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Luggage & Travel Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Luggage & Travel Bags">Luggage & Travel Bags
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wallets-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wallets-Men">Wallets
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Men's Shoes
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Casual Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Casual Shoes">Casual Shoes
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Vulcanized Sneakers-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Vulcanized Sneakers-Men">Vulcanized Sneakers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Sandals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Sandals">Men's Sandals
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Loafers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Loafers">Loafers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Flip Flops">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Flip Flops">Flip Flops
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Boots-Men">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Boots-Men">Boots
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Other Bags & Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Kids & Baby Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Kids & Baby Bags">Kids & Baby Bags

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cosmetic Bags & Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cosmetic Bags & Cases">Cosmetic Bags & Cases
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wallets & Card Holders">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wallets & Card Holders">Wallets & Card Holders


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Luggage Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Luggage Covers">Luggage Covers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Passport Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Passport Covers">Passport Covers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bag Parts & Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bag Parts & Accessories">Bag Parts & Accessories

                                                    </label>
                                                </label>


                                                <p class="step-category-item__title mt-3">
                                                    Bestselling Shoes
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wedge Sandals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wedge Sandals">Wedge Sandals


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Classic Heels">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Classic Heels">Classic Heels

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Large-Sized Flats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Large-Sized Flats">Large-Sized Flats


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Indoor Slippers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Indoor Slippers">Indoor Slippers

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Trendy Sneakers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Trendy Sneakers">Trendy Sneakers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Comfortable Sandals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Comfortable Sandals">Comfortable Sandals

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="8" data-category="Toys, Kids & Babies">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Mother & Baby Items
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Thermometers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Thermometers">Thermometers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Diaper Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Diaper Bags">Diaper Bags
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby Teething Items">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby Teething Items">Baby Teething Items

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby Strollers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby Strollers">Baby Strollers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cloth Diapers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cloth Diapers">Cloth Diapers

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Blankets & Swaddling">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Blankets & Swaddling">Blankets & Swaddling

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Backpacks & Carriers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Backpacks & Carriers">Backpacks & Carriers

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Maternity Clothing">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Maternity Clothing">Maternity Clothing

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Highchairs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Highchairs">Highchairs

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby Cribs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby Cribs">Baby Cribs

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Baby Clothing & Shoes
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby Rompers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby Rompers">Baby Rompers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Clothing Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Clothing Sets">Clothing Sets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Outerwear & Coats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Outerwear & Coats">Outerwear & Coats
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby’s First Walkers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby’s First Walkers">Baby’s First Walkers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sandals & Clogs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sandals & Clogs">Sandals & Clogs
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Girls Clothing
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Dresses">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Dresses">Dresses
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Clothing Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Clothing Sets">Clothing Sets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tops & Tees">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tops & Tees">Tops & Tees
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Outerwear & Coats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Outerwear & Coats">Outerwear & Coats
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Family Matching Outfits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Family Matching Outfits">Family Matching Outfits
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sleepwear & Robes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sleepwear & Robes">Sleepwear & Robes
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Boys Clothing
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Clothing Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Clothing Sets">Clothing Sets
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="T-Shirts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="T-Shirts">T-Shirts
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Outerwear & Coats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Outerwear & Coats">Outerwear & Coats
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jeans">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jeans">Jeans
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hoodies & Sweatshirts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hoodies & Sweatshirts">Hoodies & Sweatshirts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shoes & Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shoes & Bags">Shoes & Bags
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sneakers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sneakers">Sneakers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sandals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sandals">Sandals
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Boots-Boys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Boots-Boys">Boots
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Toys & Hobbies
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Remote Contro">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Remote Contro">Remote Contro

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Outdoor Activities">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Outdoor Activities">Outdoor Activities
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Action & Toy Figures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Action & Toy Figures">Action & Toy Figures


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Blocks">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Blocks">Blocks

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Toys & Dolls">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Toys & Dolls">Toys & Dolls


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="RC Helicopters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="RC Helicopters">RC Helicopters

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Stuffed & Plush Animals">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Stuffed & Plush Animals">Stuffed & Plush Animals

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Diecasts & Toy Vehicles">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Diecasts & Toy Vehicles">Diecasts & Toy Vehicles

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Building & Construction Toys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Building & Construction Toys">Building & Construction Toys

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Model Building Toys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Model Building Toys">Model Building Toys

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Stickers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Stickers">Stickers

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Spinning Tops">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Spinning Tops">Spinning Tops

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Movies & TV">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Movies & TV">Movies & TV

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Playmats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Playmats">Playmats

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Baby Rattles">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Baby Rattles">Baby Rattles

                                                    </label>
                                                </label>


                                                <p class="step-category-item__title mt-3">
                                                    Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hats & Caps">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hats & Caps">Hats & Caps


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bibs & Burp">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bibs & Burp">Bibs & Burp

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cloths Headwear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cloths Headwear">Cloths Headwear


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="9" data-category="Outdoor Fun & Sports">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Swimming
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bikini Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bikini Sets">Bikini Sets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="One-Piece Suits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="One-Piece Suits">One-Piece Suits
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Two-Piece Suits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Two-Piece Suits">Two-Piece Suits

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cover-Ups">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cover-Ups">Cover-Ups

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Men's Swimwear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Men's Swimwear">Men's Swimwear

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Children's Swimwear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Children's Swimwear">Children's Swimwear

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Cycling
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bicycles">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bicycles">Bicycles


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bicycle Frames">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bicycle Frames">Bicycle Frames
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bicycle Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bicycle Lights">Bicycle Lights
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bicycle Helmets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bicycle Helmets">Bicycle Helmets
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cycling Jerseys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cycling Jerseys">Cycling Jerseys
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Cycling Eyewear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Cycling Eyewear">Cycling Eyewear
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Sneakers
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Running Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Running Shoes">Running Shoes
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hiking Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hiking Shoes">Hiking Shoes

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Soccer Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Soccer Shoes">Soccer Shoes
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Skateboarding Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Skateboarding Shoes">Skateboarding Shoes
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Dance Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Dance Shoes">Dance Shoes
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Basketball Shoes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Basketball Shoes">Basketball Shoes
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Fishing
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fishing Reels">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fishing Reels">Fishing Reels
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fishing Lures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fishing Lures">Fishing Lures
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fishing Lines">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fishing Lines">Fishing Lines
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fishing Rods">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fishing Rods">Fishing Rods
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Rod Combos">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Rod Combos">Rod Combos
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fishing Tackle Boxes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fishing Tackle Boxes">Fishing Tackle Boxes
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Sportswear
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jerseys">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jerseys">Jerseys

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hiking Jackets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hiking Jackets">Hiking Jackets
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pants">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pants">Pants


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shorts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shorts">Shorts

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sports Bags">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sports Bags">Sports Bags


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Sports Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Sports Accessories">Sports Accessories

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Other Sports Equipment
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Camping & Hiking">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Camping & Hiking">Camping & Hiking


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hunting">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hunting">Hunting

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Golf">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Golf">Golf


                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Fitness & Bodybuilding">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Fitness & Bodybuilding">Fitness & Bodybuilding


                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Skiing & Snowboarding">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Skiing & Snowboarding">Skiing & Snowboarding


                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Musical Instruments">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Musical Instruments">Musical Instruments


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="10" data-category="Beauty, Health & Hair">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Hair Weaves
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Bundles With Closure">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Bundles With Closure">Bundles With Closure
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="3/4 Bundles">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="3/4 Bundles">3/4 Bundles
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pre-Colored Weaves Closures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pre-Colored Weaves Closures">Pre-Colored Weaves Closures

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Lace Wigs
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Lace Front Wigs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Lace Front Wigs">Lace Front Wigs


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Full Lace Wigs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Full Lace Wigs">Full Lace Wigs
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="360 Lace Wigs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="360 Lace Wigs">360 Lace Wigs
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="250% Density Lace Wigs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="250% Density Lace Wigs">250% Density Lace Wigs
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Synthetic Hair
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Synthetic Lace Wigs">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Synthetic Lace Wigs">Synthetic Lace Wigs


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Synthetic Weaves">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Synthetic Weaves">Synthetic Weaves
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hair Braids">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hair Braids">Hair Braids
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Synthetic Extensions">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Synthetic Extensions">Synthetic Extensions
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Makeup
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Eyes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Eyes">Eyes
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Lips">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Lips">Lips

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Face">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Face">Face
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Makeup Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Makeup Tools">Makeup Tools
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Health Care
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Massage & Relaxation">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Massage & Relaxation">Massage & Relaxation
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Household Health Monitors">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Household Health Monitors">Household Health Monitors
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Chinese Medicine">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Chinese Medicine">Chinese Medicine
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Personal Health Care">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Personal Health Care">Personal Health Care
                                                    </label>
                                                </label>


                                                <p class="step-category-item__title mt-3">
                                                    Skin Care
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Face">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Face">Face
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Eyes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Eyes">Eyes
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Body">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Body">Body
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Skin Care Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Skin Care Tools">Skin Care Tools
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Nail Art & Tools
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Gel Nail Polish">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Gel Nail Polish">Gel Nail Polish

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Nail Drills">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Nail Drills">Nail Drills
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Nail Dryers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Nail Dryers">Nail Dryers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Nail Glitter">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Nail Glitter">Nail Glitter

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Personal Care
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hair Care & Styling">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hair Care & Styling">Hair Care & Styling


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Shaving & Hair Removal">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Shaving & Hair Removal">Shaving & Hair Removal

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Oral Hygiene">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Oral Hygiene">Oral Hygiene


                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Tattoos & Body Art
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tattoo Kits">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tattoo Kits">Tattoo Kits


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="11" data-category="Automobiles & Motorcycles">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Auto Replacement Parts
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Lights">Car Lights
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Interior Parts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Interior Parts">Interior Parts
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Exterior Parts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Exterior Parts">Exterior Parts

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Spark Plugs & Ignition Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Spark Plugs & Ignition Systems">Spark Plugs & Ignition
                                                        Systems


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Vehicle Sensors Brake Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Vehicle Sensors Brake Systems">Vehicle Sensors Brake
                                                        Systems
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Windshield Wipers ">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Windshield Wipers">Windshield Wipers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Other Replacement">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Other Replacement">Other Replacement
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Parts Tools, Maintenance & Care
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Code Readers & Scanning Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Code Readers & Scanning Tools">Code Readers & Scanning
                                                        Tools


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Diagnostic Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Diagnostic Tools">Diagnostic Tools
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Washing Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Washing Tools">Car Washing Tools
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Paint Care & Polishes">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Paint Care & Polishes">Paint Care & Polishes
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Other Maintenance Products">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Other Maintenance Products">Other Maintenance Products
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Car Electronics
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Multimedia Players">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Multimedia Players">Car Multimedia Players
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="DVR/Dash Cameras">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="DVR/Dash Cameras">DVR/Dash Cameras

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Alarm Systems & Security">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Alarm Systems & Security">Alarm Systems & Security
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="GPS Trackers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="GPS Trackers">GPS Trackers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Radios">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Radios">Car Radios
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Monitors">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Monitors">Car Monitors
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Fridges & Heaters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Fridges & Heaters">Car Fridges & Heaters
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Vehicle Cameras">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Vehicle Cameras">Vehicle Cameras
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Vehicle GPS">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Vehicle GPS">Vehicle GPS
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Systems">Systems
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Jump Starters">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Jump Starters">Jump Starters
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Exterior Accessories
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Stickers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Stickers">Car Stickers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Covers">Car Covers
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Other Exterior Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Other Exterior Accessories">Other Exterior Accessories
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Motorcycle Parts
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Body & Frame Parts">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Body & Frame Parts">Body & Frame Parts

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Helmets & Protective Gear">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Helmets & Protective Gear">Helmets & Protective Gear
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Lighting Braking Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Lighting Braking Systems">Lighting Braking Systems


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Exhaust Systems">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Exhaust Systems">Exhaust Systems

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Helmets & Headsets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Helmets & Headsets">Helmets & Headsets

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Motorcycle Seat Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Motorcycle Seat Covers">Motorcycle Seat Covers

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Other Motorcycle Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Other Motorcycle Accessories">Other Motorcycle Accessories

                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Interior Accessories
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Seat Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Seat Covers">Seat Covers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Storage Solutions">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Storage Solutions">Storage Solutions

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Car Key Cases">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Car Key Cases">Car Key Cases


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Steering Wheel Covers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Steering Wheel Covers">Steering Wheel Covers


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Floor Mats">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Floor Mats">Floor Mats


                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>

                                        <div class="step-category-list" data-category-list="12" data-category="Home Improvement & Tools">
                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Tools
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Measurement & Analysis">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Measurement & Analysis">Measurement & Analysis
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tools Hand Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tools Hand Tools">Tools Hand Tools
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Power Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Power Tools">Power Tools

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Garden Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Garden Tools">Garden Tools


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tool Sets">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tool Sets">Tool Sets
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Indoor Lighting
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Ceiling Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Ceiling Lights">Ceiling Lights


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pendant Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pendant Lights">Pendant Lights
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Downlights Chandeliers">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Downlights Chandeliers">Downlights Chandeliers
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wall Lamps">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wall Lamps">Wall Lamps
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Night Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Night Lights">Night Lights
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Tools
                                                </p>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Welding Equipment">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Welding Equipment">Welding Equipment


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Welding & Soldering Supplies">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Welding & Soldering Supplies">Welding & Soldering Supplies
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Machine Tools & Accessories">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Machine Tools & Accessories">Machine Tools & Accessories
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Woodworking Machinery">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Woodworking Machinery">Woodworking Machinery
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tool Storage Items">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tool Storage Items">Tool Storage Items
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    LED Lighting
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LED Strips">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LED Strips">LED Strips
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LED Downlights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LED Downlights">LED Downlights

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LED Panel Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LED Panel Lights">LED Panel Lights
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LED Spotlights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LED Spotlights">LED Spotlights
                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="LED Bar Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="LED Bar Lights">LED Bar Lights
                                                    </label>
                                                </label>

                                                <p class="step-category-item__title mt-3">
                                                    Home Improvement
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Electrical Equipment & Supplies">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Electrical Equipment & Supplies">Electrical Equipment &
                                                        Supplies
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Wall Switches">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Wall Switches">Wall Switches
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Hardware">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Hardware">Hardware
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Kitchen Fixtures">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Kitchen Fixtures">Kitchen Fixtures

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Paint">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Paint">Paint
                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Tools">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Tools">Tools


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Pumps">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Pumps">Pumps

                                                    </label>
                                                </label>
                                            </div>

                                            <div class="step-category-item">
                                                <p class="step-category-item__title">
                                                    Outdoor Lighting
                                                </p>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Flashlights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Flashlights">Flashlights

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Solar Lamps">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Solar Lamps">Solar Lamps

                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Floodlights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Floodlights">Floodlights

                                                    </label>
                                                </label>

                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="String Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="String Lights">String Lights


                                                    </label>
                                                </label>
                                                <label class="step-category-item__label toggle">
                                                    <input class="step-category-item__label-input toggle__input"
                                                            type="checkbox" id="Underwater Lights">
                                                    <label class="step-category-item__label-text toggle__text"
                                                            for="Underwater Lights">Underwater Lights

                                                    </label>
                                                </label>
                                            </div>
                                            <div class="step-category-list__footer">View example of products <a
                                                    href="aliexpress.com">here</a> at AliExpress</div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="nextBtn">
                        <a style="margin-right: 5px;" href="./page1.html" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>
                        <a href="./page3.html" class="next_action product-submit">
                            <button class="button">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="stepActive" id="dropshippingform">
                <div class="activeTop">
                    <h6 class="sBold">3.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step3Head.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 3
                        </p>
                        <p class="slight">
                            Store  Information
                        </p>
                    </div>
                </div>
                <div class="bodyContainer">
                    <div class="activeBody stores">
                        <!-- FORM CSS -->
                        <div class="form">
                            <p class="bold mt-2">
                                Store Name:
                            </p>
                            <textarea name="storeName" rows="1"
                                        placeholder="Enter in the name of your store"></textarea>
                            <p class="bold">
                                Store Description:
                            </p>
                            <textarea name="storeDescription" rows="3"
                                        placeholder="Share a brief description of your store"></textarea>
                            <p class="bold">
                                Additional notes:
                            </p>
                            <textarea name="additionalNotes" rows="3"
                                        placeholder="Share with us some additional information that we can keep in mind when developing your store such as colours, fonts etc.  (Optional)"></textarea>

                            <!-- <div class="upload"> -->
                            <!-- <img src={{"/images/drag.png"}} alt=""> -->
                            <!-- <p class="lg_light"> -->
                            <!-- Drag & Drop files here -->
                            <!-- </p> -->
                            <!-- <p> -->
                            <!-- or -->
                            <!-- </p> -->
                            <!-- <button class="browseBtn"> -->
                            <!-- BROWSE -->
                            <!-- </button> -->
                            <!-- </div> -->
                            <p class="bold">
                                Upload:
                            </p>
                            <p class="browse-text" >Upload any images, banners, logo ideas or any media that you may already have which you want included in your store. (Optional)
                            </p>
                            <!-- <label for="image" class="browse">
                                BROWSE
                            </label> -->
                            <input  class="browse image" name="image[]" files=true type="file"   multiple>
                            </p>
                        </div>
                    </div>
                    <p class="divider"></p>
                    <div class="nextBtn">
                        <a style="margin-right: 5px;" href="./page2.html" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>
                        <a href="./page4.html" class="next_action">
                            <button class="button">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="stepActive">
                <div class="activeTop">
                    <h6 class="sBold">4.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step5Head.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 4
                        </p>
                        <p class="slight">
                            Optional Features
                        </p>
                    </div>
                </div>
                <div class="bodyContainer">
                    <div class="activeBody stores">
                        <p class="mt-2">
                            Optional Features can be added now, during or anytime after development.
                        </p>
                        <div class="optionalContent">

                            @foreach ($addons as $addon)
                                <div class="optionalRow">
                                    <div class="left">
                                        @if ($addon->image != "")
                                            <img src="images/{{$addon->image}}" alt="addon's logo">
                                        @endif

                                            {{$addon->addonsname}}

                                    </div>
                                    <div class="right">
                                        <p class="bold">
                                            {{$addon->addonsname}}
                                        </p>

                                        @if ($addon->addonsname == "Product Title & Description Editing")

                                                <div class="checkBox d-flex">
                                                    <input style="display: none" class = "addons" type="checkbox" name="optionalFeatures[]" display="" value=""
                                                    price = "0">
                                                    <select id= "Product Title & Description Editing">
                                                        <option value="" hidden selected disabled>Choose an option</option>
                                                        <option value='"{\"price\":30,\"name\":\"Product Title & Description Editing x 50\"}"'>
                                                            Product Editing x 50 - $30
                                                        </option>
                                                        <option value='"{\"price\":60,\"name\":\"Product Title & Description Editing x 100\"}"'>
                                                            Product Editing x 100 - $60
                                                        </option>
                                                        <option value='"{\"price\":90,\"name\":\"Product Title & Description Editing x 150\"}"'>
                                                            Product Editing x 150 - $90
                                                        </option>
                                                        <option value='"{\"price\":120,\"name\":\"Product Title & Description Editing x 200\"}"'>
                                                            Product Editing x 200 - $120
                                                        </option>
                                                        <option value='"{\"price\":240,\"name\":\"Product Title & Description Editing x 400\"}"'>
                                                            Product Editing x 400 - $240
                                                        </option>
                                                    </select>

                                                </div>

                                                <script type="text/javascript">
                                                        document.getElementById('Product Title & Description Editing').addEventListener('change', (ev) =>{
                                                                var data = JSON.parse(JSON.parse(ev.target.value));
                                                                var prev_el = ev.target.previousElementSibling;
                                                                prev_el.checked = false;
                                                                prev_el.dispatchEvent(new Event('change'));
                                                                prev_el.setAttribute('price', data.price);
                                                                prev_el.setAttribute('value', data.name);
                                                                prev_el.setAttribute('display', data.name);
                                                                prev_el.checked = true;
                                                                prev_el.dispatchEvent(new Event('change'));
                                                        });
                                                </script>
                                        @else

                                                <div class="checkBox d-flex">
                                                <input class = "addons" type="checkbox" name="optionalFeatures[]" display="{{$addon->addonsname}}" value="{{$addon->addonsname}}"
                                                        id="addons_{{$addon->addonsname}}" price = "{{$addon->price == null ? 0.00 : $addon->price}}">
                                                <label for="addons_{{$addon->addonsname}}">
                                                        ${{$addon->price}} - <span id="package_stat_{{$addon->addonsname}}">Add To Package</span>
                                                </label>
                                                </div>
                                        @endif

                                        <p class="details">
                                            {{$addon->description}}
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="nextBtn">
                        <a style="margin-right: 5px;" href="./page3.html" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>
                        <a href="./page6.html" class="next_action">
                            <button class="button">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="stepActive orderStep">
                <div class="activeTop">
                    <h6 class="sBold">5.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step6.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 5
                        </p>
                        <p class="slight">
                            Checkout
                        </p>
                    </div>
                </div>

                <!--remove inline style-->
                <div class="activeBody bodyContainer stores">
                	@include('components.payment')
                    <div class="nextBtn hasPadding ssl">
                        <img src="images/ssl.png" alt="" class="ssl-img">
                        <a style="margin-right: 5px;" href="" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>

                        <a class="btn_checkout">
                            <button class="button" type="submit">
                                Checkout
                            </button>
                        </a>

                        <div class="footer">
                            <p>By checking out you agree to our <a href="/terms-page" target="_blank">Terms of Service</a> and
                                <a href="/privacy-page">Privacy Policy</a> .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="col2">

        <div class="orderSummary">
                <div class="orderContainer">
                    <div class="orderTop">
                        <p class="bolds cart">
                            <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjh7avte svg [data-color="1"] {fill: #2B074D;}</style></defs>
                                <g>
                                    <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                    <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                    <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2B074D" data-color="1"></path>
                                </g>
                            </svg>

                            <b> Order Summary</b>
                        </p>
                    </div>
                    <div class="orderBody">

                        <div class="orderList border-bottom">
                            <div class="s_between">
                                <div>
                                    <p>
                                    Dropshipping Package
                                    </p>
                                </div>
                                <div>
                                    <p class="bold">
                                        AU$999.00
                                        <span class="aus"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="orders">
                        <div class="s_betweens mid">
                                <div>
                                    <p class="promo-section">
                                        <img src="/images/coupn.png" alt="step1" class="enter">
                                        <input class="promo-input" type="text" name="promo" placeholder="Enter a promo code." oninput="order.promoCodeOnChange(this)">
                                        <button>Enter</button>
                                    </p>
                                </div>

                        </div>
                        <div class="s_between sub">
                                <div>
                                    <p>
                                        Subtotal:
                                    </p>
                                </div>
                                <div>
                                    <p class="bold sub-total-amt">AU$ 00.00<span class="aus"></span></p>
                                </div>
                        </div>


                        <div class="s_between sub">
                                <div>
                                    <p>
                                        Discounts
                                    </p>
                                </div>
                                <div>
                                    <p class="bold discount-amt" id="discount_va">00.00%<span class="aus"></span></p>
                                </div>
                        </div>
                        <div class="s_between sub" style="padding-bottom: 15px">
                                <div>
                                    <p>
                                        GST:
                                    </p>
                                </div>
                                <div>
                                    <p class = "bold gst-amt">AU$ 00.00<span class="aus"></span></p>
                                </div>
                        </div>
                        </div>
                    </div>
                    <div class="orderBottom">
                        <div class="s_between">
                            <div>
                                <p class="total">
                                    Total:
                                </p>
                            </div>
                            <div>
                            <input type="hidden" value="" name="price" class="bold total total-amt"><p class="bold total total-amt">AU$ 00.00</p><span class="aus"></span></p>
                            </div>
                        </div>

                    </div>


                    <!-- <div class="orderSvg">
                        <svg preserveAspectRatio="none" data-bbox="6.657 92.134 186.694 15.732" xmlns="http://www.w3.org/2000/svg" viewBox="6.415793281653752 91.88025806451613 187.17641343669248 16.239483870967742" data-type="shape" role="img">
                            <g>
                                <path d="M6.657 92.134v15.732h4.345a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h4.195V92.134H6.657z"></path>
                            </g>
                        </svg>
                    </div>--->
                </div>
            </div>

    </div>
</div>
</form>
</div>

@endsection
