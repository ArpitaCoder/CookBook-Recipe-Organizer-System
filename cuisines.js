let indian = document.getElementById("indian");
let chinese = document.getElementById("chinese");
let italian = document.getElementById("italian");
let rice = document.getElementById("rice");
let beverages = document.getElementById("beverages");
let desserts = document.getElementById("desserts");
let content= document.getElementById("content");
let I = document.getElementById("I");
let img1 = document.getElementById("img1");
let img2 = document.getElementById("img2");
let img3 = document.getElementById("img3");
let img4 = document.getElementById("img4");
let img5 = document.getElementById("img5");
let img6 = document.getElementById("img6");
let img7 = document.getElementById("img7");

let title1 = document.getElementById("title1");
let title2 = document.getElementById("title2");
let title3 = document.getElementById("title3");
let title4 = document.getElementById("title4");
let title5 = document.getElementById("title5");
let title6 = document.getElementById("title6");let title7 = document.getElementById("title7");
let disc1 = document.getElementById("disc1");
let disc2 = document.getElementById("disc2");
let disc3 = document.getElementById("disc3");
let disc4 = document.getElementById("disc4");
let disc5 = document.getElementById("disc5");
let disc6 = document.getElementById("disc6");
let disc7 = document.getElementById("disc7");

function chineseClick(){
    content.innerText="hinese";
    I.innerText="C";
    img1.src="img/manchu.jfif";
    img2.src="img/shezwan.jfif";
    img3.src="img/pasta.jfif";
    img4.src="img/manchu.jfif";
    img5.src="img/manchu.jfif";
    img6.src="img/manchu.jfif";
    img7.src="img/manchu.jfif";
    title1.innerText = "Veg Manchurian";
    title2.innerText = "Hakka Noodles";
    title3.innerText = "Chilli Paneer";
    title4.innerText = "Veg Fried Rice";
    title5.innerText = "Spring Rolls";
    title6.innerText = "Schezwan Noodles";
    title7.innerText = "Paneer Chilli Dry";
    disc1.innerText = "By Chef Kunal";
    disc2.innerText = "By Riya Sharma";
    disc3.innerText = "By Chef Aman Gupta";
    disc4.innerText = "By Neha Verma";
    disc5.innerText = "By Rahul Mehta";
    disc6.innerText = "By Chef Simran Kaur";
    disc7.innerText = "By Arjun Singh";
}
function indianClick(){
    content.innerText = "ndian";
    I.innerText = "I";

    img1.src="img/dalMakhni.jfif";
    img2.src="img/paneer.jpg";
    img3.src="img/jeera.jfif";
    img4.src="img/jeera.jfif";
    img5.src="img/rajma.jfif";
    img6.src="img/tandoori.jfif";
    img7.src="img/rasmalai.jfif";

    title1.innerText = "Dal Makhani";
    title2.innerText = "Paneer Butter Masala";
    title3.innerText = "Jeera Rice";
    title4.innerText = "Jeera Rice";
    title5.innerText = "Rajma Chawal";
    title6.innerText = "Tandoori Roti";
    title7.innerText = "Rasmalai (2 pcs)";

    disc1.innerText = "By Arpita Sharma";
    disc2.innerText = "By Aman";
    disc3.innerText = "By Sayma";
    disc4.innerText = "By Sayma";
    disc5.innerText = "By Khushi";
    disc6.innerText = "By Arpita";
    disc7.innerText = "By Sanjana Kumari";
}
function italianClick(){
    content.innerText = "talian";
    I.innerText = "I";

    img1.src="img/pasta.jfif";
    img2.src="img/pizza.jfif";
    img3.src="img/lasagna.jfif";
    img4.src="img/spaghetti.jfif";
    img5.src="img/risotto.jfif";
    img6.src="img/garlicbread.jfif";
    img7.src="img/tiramisu.jfif";

    title1.innerText = "White Sauce Pasta";
    title2.innerText = "Margherita Pizza";
    title3.innerText = "Veg Lasagna";
    title4.innerText = "Spaghetti";
    title5.innerText = "Mushroom Risotto";
    title6.innerText = "Garlic Bread";
    title7.innerText = "Tiramisu";

    disc1.innerText = "By Chef Rohan";
    disc2.innerText = "By Neha Sharma";
    disc3.innerText = "By Aman Gupta";
    disc4.innerText = "By Simran Kaur";
    disc5.innerText = "By Rahul Mehta";
    disc6.innerText = "By Chef Arjun";
    disc7.innerText = "By Riya Verma";
}
function riceClick(){
    content.innerText = "ice and Naan";
    I.innerText = "R";

    img1.src="img/jeera.jfif";
    img2.src="img/friedrice.jfif";
    img3.src="img/biryani.jfif";
    img4.src="img/pulao.jfif";
    img5.src="img/lemonrice.jfif";
    img6.src="img/curdrice.jfif";
    img7.src="img/vegfriedrice.jfif";

    title1.innerText = "Jeera Rice";
    title2.innerText = "Veg Fried Rice";
    title3.innerText = "Veg Biryani";
    title4.innerText = "Pulao";
    title5.innerText = "Lemon Rice";
    title6.innerText = "Curd Rice";
    title7.innerText = "Schezwan Fried Rice";

    disc1.innerText = "By Arjun Singh";
    disc2.innerText = "By Chef Kunal";
    disc3.innerText = "By Riya Sharma";
    disc4.innerText = "By Aman Gupta";
    disc5.innerText = "By Neha Verma";
    disc6.innerText = "By Simran Kaur";
    disc7.innerText = "By Rahul Mehta";
}
function beveragesClick(){
    content.innerText = "everages";
    I.innerText = "B";

    img1.src="img/lassi.jfif";
    img2.src="img/coldcoffee.jfif";
    img3.src="img/mojito.jfif";
    img4.src="img/tea.jfif";
    img5.src="img/juice.jfif";
    img6.src="img/milkshake.jfif";
    img7.src="img/smoothie.jfif";

    title1.innerText = "Sweet Lassi";
    title2.innerText = "Cold Coffee";
    title3.innerText = "Mint Mojito";
    title4.innerText = "Masala Tea";
    title5.innerText = "Fresh Juice";
    title6.innerText = "Chocolate Milkshake";
    title7.innerText = "Fruit Smoothie";

    disc1.innerText = "By Riya Sharma";
    disc2.innerText = "By Aman Gupta";
    disc3.innerText = "By Chef Kunal";
    disc4.innerText = "By Neha Verma";
    disc5.innerText = "By Rahul Mehta";
    disc6.innerText = "By Simran Kaur";
    disc7.innerText = "By Arjun Singh";
}
function dessertsClick(){
    content.innerText = "esserts";
    I.innerText = "D";

    img1.src="img/gulabjamun.jfif";
    img2.src="img/rasgulla.jfif";
    img3.src="img/icecream.jfif";
    img4.src="img/brownie.jfif";
    img5.src="img/cake.jfif";
    img6.src="img/kheer.jfif";
    img7.src="img/halwa.jfif";

    title1.innerText = "Gulab Jamun";
    title2.innerText = "Rasgulla";
    title3.innerText = "Ice Cream";
    title4.innerText = "Chocolate Brownie";
    title5.innerText = "Cake";
    title6.innerText = "Kheer";
    title7.innerText = "Gajar Halwa";

    disc1.innerText = "By Chef Rohan";
    disc2.innerText = "By Riya Sharma";
    disc3.innerText = "By Aman Gupta";
    disc4.innerText = "By Neha Verma";
    disc5.innerText = "By Rahul Mehta";
    disc6.innerText = "By Simran Kaur";
    disc7.innerText = "By Arjun Singh";
}



chinese.addEventListener("click",chineseClick);
indian.addEventListener("click",indianClick);
italian.addEventListener("click",italianClick);
rice.addEventListener("click",riceClick);
beverages.addEventListener("click",beveragesClick);
desserts.addEventListener("click",dessertsClick);
window.onload = function(){

    let cuisine = localStorage.getItem("cuisine");

    if(cuisine === "indian"){
        indianClick();
    }
    else if(cuisine === "chinese"){
        chineseClick();
    }
    else if(cuisine === "italian"){
        italianClick();
    }
    else if(cuisine === "rice"){
        riceClick();
    }
    else if(cuisine === "beverages"){
        beveragesClick();
    }
    else if(cuisine === "desserts"){
        dessertsClick();
    }

}