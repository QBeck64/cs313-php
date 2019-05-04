$(document).ready(function(){
    $("#ffImage").mouseover(function(){
        this.src="/homepageImages/FF122.jpg"
    }).mouseout(function(){
        this.src="/homepageImages/FF52.jpg"
    });

    $("#spideyImage").mouseover(function(){
        this.src="/homepageImages/spidey149.jpg"
    }).mouseout(function(){
        this.src="/homepageImages/spidey145.jpg"
    });

    $("#ironmanImage").mouseover(function(){
        this.src="/homepageImages/ironman41.jpg"
    }).mouseout(function(){
        this.src="/homepageImages/ironman25.jpg"
    });
});