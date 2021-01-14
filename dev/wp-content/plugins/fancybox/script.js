(function($){

    $("document").ready(function(){
        $("section img").each( function(){
            $(this).wrap( `<a href="${this.src}"  data-fancybox="gallery">`)
        } )
    })

})(jQuery)