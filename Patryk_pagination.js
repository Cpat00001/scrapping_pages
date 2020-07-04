<!-- ########## div to call JS #################-->

<!-- GRID display new products here after clicking button "Show More"-->
<div class="container" id="elem"></div>
<!-- end GRID -->

<!-- Buttons -->
{% if paginate.next %}
    <div style="border:1px solid rgb(116, 111, 111);">
        <div style="width:20%;height:auto;margin-left:70%; background-color:rgb(243, 68, 97);
            border-radius:20px 5px 20px 5px;text-align:center;border: 1px solid rgb(170, 164, 164);
            padding: 10px;box-shadow: 3px 3px #e0d4d4;">
            <!-- <a id="more" href="{{ paginate.next.url }}" onClick="showMore(this.value)">Show More</a> -->
            <!-- bring product from next pagination page -->
            <a id="more" onClick="showMore()" style="color:white;">Show More</a>
      </div>
    </div>
      
    {% endif %}

    {% if paginate.previous.is_link %}
    <div id="less" style="width:100px;height:50px; background-color:rgb(48, 182, 70)">
        <a id="link2" href="{{ paginate.previous.url }}">Show Less</a>
    </div>
{% endif %}
<!-- end Buttons -->



<script>
    // let nextUrl = document.getElementById('link1').href;
    let nextUrl = document.getElementById('more').href;
    //let endPath = document.getElementById('more').getAttribute("href");
    let endPath = document.getElementById('more').getAttribute("value");
    //let test = 'https://olivias-dev.myshopify.com/collections/lamps/products.json';
    let test = '/admin/api/2020-04/products.json?limit=6&collection_id=157079961644';
    console.log( "SHOW full path:" + nextUrl);
    console.log( "SHOW end of path:" + endPath);
    //count button clicks
    var clicks = 0;

    function showMore(){
        clicks += 1;
        console.log("SHOW CLICKS AMOUNT: " + clicks);
        jQuery.ajax({
                    type:"GET",
                    url: test,
                    dataType: 'json'
                })
                .done(function(data){
                    //stringify JSON
                    let productsList = JSON.stringify(data);
                    console.log("SHOW DATA TYPE: " + typeof productsList + " DATA " + productsList );
                    let products = data.products;
                    //get amount/length of array elements
                    console.log("products.length: " + products.length);

                    var box = document.getElementById('elem');
                     //create row
                     var row = document.createElement('div');
                        row.className = "grid grid--uniform grid--collection small--grid--flush";

                    products.forEach(function(product){
                        
                        //column element with <img>
                        var div = document.createElement('div');
                        div.className = "grid__item grid-product small--one-half medium-up--one-third aos-init aos-animate";
                        //create link
                        var link = document.createElement('a');
                        link.href = 'https://olivias-dev.myshopify.com/collections/lamps/products/' + product.handle;
                        var tytul = document.createElement('p');
                        tytul.innerHTML = product.title;
                        tytul.className = "grid-product__title grid-product__title--body";
                        var img = document.createElement('img');
                        img.src = product.images[0].src;
                        var price = document.createElement('p');
                        price.innerHTML = '£' + product.variants[0].price;
                        price.className="grid-product__price";
                        
                        link.appendChild(img);
                        link.appendChild(tytul);
                        link.appendChild(price);
                        div.appendChild(link);
                        row.appendChild(div);
                        box.appendChild(row);
 
                    });
                    // row.appendChild(div);
                 
                });
        console.log('CLICKED');
    }
</script>


    






















