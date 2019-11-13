
let latestproducts = [
    {
        prdid:          1,
        prdimg:         'img/ree1.jpg',
        prdtitle:       'product Title',
        prdprice:        '#5000',
        prddesc:         'Short Details about product goes here'
    },
    {
        prdid:          2,
        prdimg:         'img/ree2.jpg',
        prdtitle:       'product Title',
        prdprice:        '#5000',
        prddesc:         'Short Details about product goes here'
    },
    {
        prdid:          3,
        prdimg:         'img/ree3.jpg',
        prdtitle:       'product Title',
        prdprice:        '#5000',
        prddesc:         'Short Details about product goes here'
    },
    {
        prdid:          4,
        prdimg:         'img/ree4.jpg',
        prdtitle:       'product Title',
        prdprice:        '#5000',
        prddesc:         'Short Details about product goes here'
    },
];
//loop through latest products
latestproducts.forEach(product=>{
     let eachproducts = `
                        <div class="box">
                            <div class="imagebox">
                                <img src="${product.prdimg}" alt="" srcset="" class="img-fluid">
                            </div>
                            <div class="detailbox">
                            ${product.prdtitle}
                                <br>
                                ${product.prdprice}
                            </div>
                            <div class="hiddendetails">
                                <div class="hiddendetailb">
                                    <div class="iconparts">
                                        <i class="fa fa-eye detailbtn" data-type="detail" data-product-id="${product.prdid}"> Detail </i>
                                        <i class="fa fa-cart-plus buybtn" aria-hidden="true" data-type="buy" data-product-id="${product.prdid}"> Buy</i>
                                    </div>
                                </div>
                            </div>
                        </div>
    `;

    //productbox.innerHTML = eachproducts;

    showEachproduct(eachproducts);
 

});
//display latest products
function showEachproduct(eachproducts){
    let productbox = document.querySelector('.productbox');
    productbox.innerHTML += eachproducts;
}

let detailbtn = document.querySelectorAll('.detailbtn');
//buybtn.addEventListener('click', buybtnclicked);
detailbtn.forEach(btn=>{
    btn.addEventListener('click', detailbtnclicked); 
})
function detailbtnclicked(e){
    let clickedid = e.target.dataset.productId;
    let selectedproductdetail = latestproducts[clickedid-1];
    //console.log(selectedproductdetail.prddesc);
    //send it to a function that launch modal and populate it with details sent.
    singleProductdetail(selectedproductdetail);
}
function singleProductdetail(selectedproductdetail){
    let prdimgx = document.querySelector('#prdimg');
    //prdimgx.attr('src', selectedproductdetail.prdimg);
    prdimgx.src = selectedproductdetail.prdimg;
    let openedmodal = document.querySelector('.singleproductnodal');
    openedmodal.classList.add('open-modal');
    
}
//closemodal button action
let closemodalbtn = document.querySelector('#closespmodal');
closemodalbtn.addEventListener('click', closemodalsp);
function closemodalsp(){
    let openedmodal = document.querySelector('.singleproductnodal');
    openedmodal.classList.remove('open-modal'); 
}

//nav fixed top scroll +it toggles fixed top class
window.addEventListener('scroll', windowscrooler);
function windowscrooler(){
    let header = document.querySelector('.lineone'); 
    let sticky = header.offsetTop;
    let targettedhead = document.querySelector('#headertop .boxholder .lineone');
    if (window.pageYOffset > 100) {
        header.classList.add("sticky");
        targettedhead.style.paddingTop=0;
      } else {
        header.classList.remove("sticky");
        targettedhead.style.paddingTop=`50px`;
      }
}



//buy button 
let cartcontent = []; 
let buybtn = document.querySelectorAll('.buybtn');
buybtn.forEach(btn=>{
    btn.addEventListener('click', buybtnclicked); 
})
function buybtnclicked(e){
    let clickedid = e.target.dataset.productId;
    let selectedproductdetail = latestproducts[clickedid-1];
    cartstorage(selectedproductdetail);
   
}


function cartstorage(selectedproductdetail){
    let cartnum = document.querySelector('#cartnum');
    cartcontent.push(selectedproductdetail);
    
    console.log(cartcontent);

    if(cartcontent.length >0){
        cartnum.innerHTML = `(${cartcontent.length})`;
    }

    //cartcontent.push(selectedproductdetail);
 
}

//toggling of order and detail button of best seller section
let parentbox = document.querySelector('.bsbox');
parentbox.addEventListener('click', (e)=>{
    e.target.classList.add('showhiddendetails');
});


//display products in shops
function displayshopproducts(latestproducts){
    console.log(latestproducts);
}