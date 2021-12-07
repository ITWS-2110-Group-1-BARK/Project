function myFunction() {
    //alert ("Hello");
    search = '';
search = document.getElementById('search').value;
jQuery.ajax({
    url: "explore_search3.php",
    data:'search='+search,
    type: "POST",
    success:function(response){
        //alert(response);
        var obj1 = JSON.parse(response);
        var outer_array = [];
        var inner_array = [];
        for (var key in obj1){
            inner_array = [];
            for (var key1 in obj1[key]){
                inner_array.push(obj1[key][key1]);
            }
            outer_array.push(inner_array);
        }
        //alert(outer_array[0][2]);
        myFunction1(outer_array);
    }
});   
//alert (data.fname);
} 
function myFunction1(){
text_1 = arguments[0];
//alert ("Hello");
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
    var description_x = text_1[i][2];
    var img_x = text_1[i][3];
    var name_x = text_1[i][0] + ' ' + text_1[i][1];
    var username_x = text_1[i][4];
    
        
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
    p_tag.innerHTML = description_x;
    divElement_c24.appendChild(p_tag);

    let a_tag = document.createElement('a');
    var link_text = document.createTextNode('Click Here for More Information');
    a_tag.appendChild(link_text);
    a_tag.target = 'popup';
    a_tag.id = username_x;
    a_tag.href = '#';
    a_tag.onclick = myFunction2;
    divElement_c24.appendChild(a_tag);




}

}
function myFunction2() {
    var id = $(this).attr('id');
    var popUpObj;
    var username = id;
    //window.open("page2.aspx?myvar=" + encodeURI(myVariable), "mywindow", "width=420, height=650, top=0, screenX=1000, screenY=1000");

    //popUpObj=window.open("popup1.php", "ModalPopUp",  "toolbar=no," + "scrollbars=no," +  "location=no," +  "statusbar=no," +
    //"menubar=no," + "resizable=0," +  "width=1000," + "height=600," + "left = 800," +  "top=300"  );
    popUpObj=window.open("popup1.php?username=" + username, "ModalPopUp",  "toolbar=no," + "scrollbars=no," +  "location=no," +  "statusbar=no," +
    "menubar=no," + "resizable=0," +  "width='1200px'," + "height='400px'"  );
    popUpObj.focus();
    LoadModalDiv();
}
function LoadModalDiv(){
    var bcgDiv = document.getElementById("divBackground");
    bcgDiv.style.display="block";
}
function HideModalDiv(){
    var bcgDiv = document.getElementById("divBackground");
    bcgDiv.style.display="none";
}