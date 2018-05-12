function howMany(){
    //ironman1
    if(document.getElementById("ironman1").checked == true){
        
        document.getElementById("ironman1").value = 0;

        document.getElementById("i1howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numiron1'>";
        document.getElementById("i1howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("ironman1").checked == false){
        document.getElementById("i1howmany").innerHTML = "";
    }

    //ironman2
    if(document.getElementById("ironman2").checked == true){
        
        document.getElementById("ironman2").value = 0;

        document.getElementById("i2howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numiron2'>";
        document.getElementById("i2howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("ironman2").checked == false){
        document.getElementById("i2howmany").innerHTML = "";
    }

    //ironman3
    if(document.getElementById("ironman3").checked == true){
        
        document.getElementById("ironman3").value = 0;

        document.getElementById("i3howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numiron3'>";
        document.getElementById("i3howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("ironman3").checked == false){
        document.getElementById("i3howmany").innerHTML = "";
    }

    //cap1
    if(document.getElementById("cap1").checked == true){
        
        document.getElementById("cap1").value = 0;

        document.getElementById("c1howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numcap1'>";
        document.getElementById("c1howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("cap1").checked == false){
        document.getElementById("c1howmany").innerHTML = "";
    }

    //cap2
    if(document.getElementById("cap2").checked == true){
        
        document.getElementById("cap2").value = 0;

        document.getElementById("c2howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numcap2'>";
        document.getElementById("c2howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("cap2").checked == false){
        document.getElementById("c2howmany").innerHTML = "";
    }

    //cap3
    if(document.getElementById("cap3").checked == true){
        
        document.getElementById("cap3").value = 0;

        document.getElementById("c3howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numcap3'>";
        document.getElementById("c3howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("cap3").checked == false){
        document.getElementById("c3howmany").innerHTML = "";
    }

    //thor1
    if(document.getElementById("thor1").checked == true){
        
        document.getElementById("thor1").value = 0;

        document.getElementById("t1howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numthor1'>";
        document.getElementById("t1howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("thor1").checked == false){
        document.getElementById("t1howmany").innerHTML = "";
    }

    //thor2
    if(document.getElementById("thor2").checked == true){
        
        document.getElementById("thor2").value = 0;

        document.getElementById("t2howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numthor2'>";
        document.getElementById("t2howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("thor2").checked == false){
        document.getElementById("t2howmany").innerHTML = "";
    }

    //thor3
    if(document.getElementById("thor3").checked == true){
        
        document.getElementById("thor3").value = 0;

        document.getElementById("t3howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numthor3'>";
        document.getElementById("t3howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("thor3").checked == false){
        document.getElementById("t3howmany").innerHTML = "";
    }

    //avengers1
    if(document.getElementById("avengers1").checked == true){
        
        document.getElementById("avengers1").value = 0;

        document.getElementById("a1howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numavengers1'>";
        document.getElementById("a1howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("avengers1").checked == false){
        document.getElementById("a1howmany").innerHTML = "";
    }

    //avengers2
    if(document.getElementById("avengers2").checked == true){
        
        document.getElementById("avengers2").value = 0;

        document.getElementById("a2howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numavengers2'>";
        document.getElementById("a2howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("avengers2").checked == false){
        document.getElementById("a2howmany").innerHTML = "";
    }

    //spider-man
    if(document.getElementById("spider-man").checked == true){
        
        document.getElementById("spider-man").value = 0;

        document.getElementById("showmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numspider'>";
        document.getElementById("showmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("spider-man").checked == false){
        document.getElementById("showmany").innerHTML = "";
    }

    //guardians1
    if(document.getElementById("guardians1").checked == true){
        
        document.getElementById("guardians1").value = 0;

        document.getElementById("g1howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numguardians1'>";
        document.getElementById("g1howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("guardians1").checked == false){
        document.getElementById("g1howmany").innerHTML = "";
    }

    //guardians2
    if(document.getElementById("guardians2").checked == true){
        
        document.getElementById("guardians2").value = 0;

        document.getElementById("g2howmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numguardians2'>";
        document.getElementById("g2howmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("guardians2").checked == false){
        document.getElementById("g2howmany").innerHTML = "";
    }

    //panther
    if(document.getElementById("panther").checked == true){
        
        document.getElementById("panther").value = 0;

        document.getElementById("phowmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numpanther'>";
        document.getElementById("phowmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("panther").checked == false){
        document.getElementById("phowmany").innerHTML = "";
    }

    //hulk
    if(document.getElementById("hulk").checked == true){
        
        document.getElementById("hulk").value = 0;

        document.getElementById("hhowmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numhulk'>";
        document.getElementById("hhowmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("hulk").checked == false){
        document.getElementById("hhowmany").innerHTML = "";
    }

    //ant-man
    if(document.getElementById("ant-man").checked == true){
        
        document.getElementById("ant-man").value = 0;

        document.getElementById("amhowmany").innerHTML = "Input the amount of this item you wish to purchase. <br> <input type='text' id='numant'>";
        document.getElementById("amhowmany").innerHTML += "<br> <input type='button' value='Add this many to your cart' onclick='add()'>";
    }
    else if(document.getElementById("ant-man").checked == false){
        document.getElementById("amhowmany").innerHTML = "";
    }

}

function add(){
    //ironman1
    if(document.getElementById("ironman1").value >= 0){
        document.getElementById("ironman1").value += document.getElementById("numiron1").value;

        document.getElementById("testing").innerHTML = document.getElementById("ironman1").value; 
    }
    
    //ironman2
    if(document.getElementById("ironman2").value >= 0){
        document.getElementById("ironman2").value += document.getElementById("numiron2").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("ironman2").value; 
    }

    //ironman3
    if(document.getElementById("ironman3").value >= 0){
        document.getElementById("ironman3").value += document.getElementById("numiron3").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("ironman3").value; 
    }

    //cap1
    if(document.getElementById("cap1").value >= 0){
        document.getElementById("cap1").value += document.getElementById("numcap1").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("cap1").value; 
    }

    //cap2
    if(document.getElementById("cap2").value >= 0){
        document.getElementById("cap2").value += document.getElementById("numcap2").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("cap2").value; 
    }

    //cap3
    if(document.getElementById("cap3").value >= 0){
        document.getElementById("ironman1").value += document.getElementById("numcap3").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("cap3").value; 
    }

    //thor1
    if(document.getElementById("thor1").value >= 0){
        document.getElementById("thor1").value += document.getElementById("numthor1").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("thor1").value; 
    }

    //thor2
    if(document.getElementById("thor2").value >= 0){
        document.getElementById("thor2").value += document.getElementById("numthor2").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("thor2").value; 
    }

    //thor3
    if(document.getElementById("thor3").value >= 0){
        document.getElementById("thor3").value += document.getElementById("numthor3").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("thor3").value; 
    }

    //avengers1
    if(document.getElementById("avengers1").value >= 0){
        document.getElementById("avengers1").value += document.getElementById("numavengers1").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("avengers1").value; 
    }

    //avengers2
    if(document.getElementById("avengers2").value >= 0){
        document.getElementById("avengers2").value += document.getElementById("numavengers").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("avengers2").value; 
    }

    //spider-man
    if(document.getElementById("spider-man").value >= 0){
        document.getElementById("spider-man").value += document.getElementById("numspider").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("spider-man").value; 
    }

    //guardians1
    if(document.getElementById("guardians1").value >= 0){
        document.getElementById("guardians1").value += document.getElementById("numguardians1").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("guardians1").value; 
    }

    //guardians2
    if(document.getElementById("guardians2").value >= 0){
        document.getElementById("guardians2").value += document.getElementById("numguardians2").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("guardians2").value; 
    }

    //panther
    if(document.getElementById("panther").value >= 0){
        document.getElementById("panther").value += document.getElementById("numpanther").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("panther").value; 
    }

    //hulk
    if(document.getElementById("hulk").value >= 0){
        document.getElementById("hulk").value += document.getElementById("numhulk").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("hulk").value; 
    }

    //ant-man
    if(document.getElementById("ant-man").value >= 0){
        document.getElementById("ant-man").value += document.getElementById("numant").value;
    
        document.getElementById("testing").innerHTML = document.getElementById("ant-man").value; 
    }

    
}
