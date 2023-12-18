
const product = [
    {
        id: 0,
        image: 'data:image/jpeg;base64,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',
        title: 'Z Flip Foldable Mobile',
        price: 120,
    },
    {
        id: 1,
        image: 'https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792https://stickybunny.com/cdn/shop/products/sticky-bunny-shop-airpods-pro-violet-classic-solid-color-airpods-pro-skin-15220045873270_2000x.jpg?v=1614735792',
        title: 'Air Pods Pro',
        price: 60,
    },
    {
        id: 2,
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXxTzHcAqALztac_ZxCjwNaP48tTR8jWFESA&usqp=CAU',
        title: '250D DSLR Camera',
        price: 230,
    },
    {
        id: 3,
        image: 'https://www.energysistem.com/cdnassets/products/45305/principal_2000.jpg',
        title: 'Head Phones',
        price: 100,
    }
];

const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}