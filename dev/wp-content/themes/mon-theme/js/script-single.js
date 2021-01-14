(function(){ 
    const h2 = document.querySelectorAll("#contenu h2");

    if(h2.length > 0){
        const sommaire = document.querySelector("#sommaire");
        let html = "<h3 class='h5'>Sommaire article :</h3><ul>";
        h2.forEach( function(item ){ 
            html += `<li>${item.innerHTML}</li>`;
        } )
        html += "</ul>";
        sommaire.innerHTML = html ;
    }
})();

