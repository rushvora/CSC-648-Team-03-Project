<div class="panel panel-default">
    <div class="panel-body">
        <h1 style="text-align: center;">Welcome to Gator Swap!</h1>
        <p style="text-align: center;">
            Gator Swap is a website where San Francsico State University students can buy and sell things to each other.
        </p>
    </div>
</div>
<br>
<div class="container" style="text-align: center; padding-top: 2%;">
    <div class="row">
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'Furniture']); ?>>
                    <img src="/~sp17g03/content/images/chair.png">
                    <div class="caption">
                        <p>Furniture</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'Electronics']); ?>>
                    <img src="/~sp17g03/content/images/MacBookPro.jpeg">
                    <div class="caption">
                        <p>Electronics</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'Books']); ?>>
                    <img src="/~sp17g03/content/images/books.jpg">
                    <div class="caption">
                        Books
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 2%;">
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'Clothes']); ?>>
                    <img src="/~sp17g03/content/images/clothes.jpg">
                    <div class="caption">
                        Clothes
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'School Supplies']); ?>>
                    <img src="/~sp17g03/content/images/supplies.jpg">
                    <div class="caption">
                        School Supplies
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="btn-default thumbnail" style="width: 175px; height: 175px; margin: auto; margin-bottom: 38px;">
                <a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search', 'category' => 'Miscellaneous']); ?>>
                    <img src="/~sp17g03/content/images/misc.jpg">
                    <div class="caption">
                        Miscellaneous
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<br>
<br>
<br>

