
var i=0;

var gallery=['event1.jfif','event4.jfif','event5.jpg'];

function slide(){

document.slide.src=gallery[i];
if(i<gallery.length-1){

    i++;
}
else{
    i=0;
}
setTimeout("slide()",3000);

}
window.onload=slide();

// jQuery

function seemore(){

setInterval(function(){


    $(document).ready(function(){

        $("span").animate({
        
        marginLeft:'20px'
        
        },500);
        $("span").animate({
        
            marginLeft:'5px'
                
            },);
        });
})
}


$(document).ready(function(){

    $("h5").click(
        function(){
    
    $("ul").slideDown(2000);
    
    });
    
    $("ul").mouseleave(function(){
    
    $("ul").slideUp(1000);
    
    });
    
    
    });
seemore();


