/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    setInterval(chargerNews(),5000);
});

var dernier_id;
function setId(id){
    dernier_id = id;
}

function chargerNews(){
    alert('ototoot');
    $.load('news.php?id='+dernier_id , function(data){
            if(data!=''){
                $(data).prependTo('#actus').hide().animate({'height':'toggle','opacity':'toggle'},2000);
                $('#actus li:last-child').animate({'height':'toggle','opacity':'toggle'},2000,function(){
                    $(this).remove();
                });
            }
            return false;
        });
}

