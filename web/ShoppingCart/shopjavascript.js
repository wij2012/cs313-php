function onToNumbers(){
    if(document.getElementById("ironman1").checked == true){
        
        //document.getElementById("ironman1").value = 1;
        //document.getElementById("testing").innerHTML = document.getElementById("ironman1").value; 

        document.getElementById("i1howmany").innerHTML = "Input the amount of this item you wish to purchase. <input type='text' id='numiron1'>";
        document.getElementById("i1howmany").innerHTML += "<br> <button value='Add this many to your cart'>";
    }
}