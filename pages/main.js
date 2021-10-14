function changeStyle(){
    var element = document.getElementById("flex-container_2");
    element.style.display = "none";
}
function myFunction() {
    
    var input = document.getElementById("search").value;

    if (input && input.length>0){
        alert("hello")
        $('.flex-container_2').find('.flip-card.flip-card-inner.flip-card-front.h3:not(:contains("'+input+'"))').parentsUntil('.flip-card').parent().addClass('d-none');
        alert("hello world")
    };
};
