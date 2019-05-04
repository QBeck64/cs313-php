$(document).ready(function(){
    $("#ffImage").mouseover(function(){
        this.src="/Homepage/homepageImages/FF122.jpg"
    }).mouseout(function(){
        this.src="/Homepage/homepageImages/FF52.jpg"
    });

    $("#spideyImage").mouseover(function(){
        this.src="/Homepage/homepageImages/spidey149.jpg"
    }).mouseout(function(){
        this.src="/Homepage/homepageImages/spidey145.jpg"
    });

    $("#ironmanImage").mouseover(function(){
        this.src="/Homepage/homepageImages/ironman41.jpg"
    }).mouseout(function(){
        this.src="/Homepage/homepageImages/ironman25.jpg"
    });
});