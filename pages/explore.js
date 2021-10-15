$(document).ready(function() {
                
 });




function myFunction() {
    

    var input = document.getElementById("search").value;
    //alert ("Hello");
    //alert (input);
    var text_1 = [
        ["John","jdoe@rpi.edu","I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets","Technology Sports Pets","profile_images/default.png"],
        ["Aneesh","kadala@rpi.edu","I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets","Technology Pets","profile_images/aneesh_kadali.jpeg" ],
        ["Matthew","mwright@rpi.edu","I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets","Technology Sports", "profile_images/default.png"],
      ];
        //clear the previous dynamic content
        const myNode = document.getElementById("dyn-cont");
        while (myNode.firstChild) {
            myNode.removeChild(myNode.lastChild);
        }
        let divElement_c2 = document.createElement('div');
        divElement_c2.setAttribute('id', 'flex-container_2');
        var div_cont = document.getElementById("dyn-cont");
        div_cont.appendChild(divElement_c2);
        
    //console.log(text_1.length)
    for (var i = 0; i < text_1.length; i++) {
        var interest_x = text_1[i][3];
        var img_x = text_1[i][4];
        var name_x = text_1[i][0];
        
        //alert (interest_x);
        var index = interest_x.indexOf(input); 
        
        //alert (index);
        if (index!== -1){
        //console.log(index)
            
        let divElement_c21 = document.createElement('div');
            divElement_c21.classList.add('flip-card');
            divElement_c2.appendChild(divElement_c21);
            
            let divElement_c22 = document.createElement('div');
            divElement_c22.classList.add('flip-card-inner');
            divElement_c21.appendChild(divElement_c22);
        
            let divElement_c23 = document.createElement('div');
            divElement_c23.classList.add('flip-card-front');
            divElement_c22.appendChild(divElement_c23);

            let h3_tag = document.createElement('h3');
            h3_tag.innerHTML = name_x;
            divElement_c23.appendChild(h3_tag);

            let img = document.createElement('img');
            img.src = img_x;
            img.style="width:300px;height:300px;";
            divElement_c23.appendChild(img);

            let divElement_c24 = document.createElement('div');
            divElement_c24.classList.add('flip-card-back');
            divElement_c22.appendChild(divElement_c24);
            
            let p_tag = document.createElement('p');
            p_tag.innerHTML = "I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other's pets.";
            divElement_c24.appendChild(p_tag);

        }
    }
    
}