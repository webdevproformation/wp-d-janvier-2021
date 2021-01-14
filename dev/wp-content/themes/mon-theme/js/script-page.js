(function(){
    const imgs = document.querySelectorAll("section img");
    imgs.forEach( function(item) {
        item.addEventListener( "click", function( e ){ 
            let tableau = e.target.src.split("/");
            const p = document.createElement("p");
            p.innerHTML = tableau[tableau.length - 1] ;
            e.target.parentNode.insertBefore(  p , e.target.nextSibling);
        } )
    } )
})();