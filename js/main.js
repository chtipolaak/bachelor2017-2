/*(function() {
var j=1;
    $("#voyelle").click(function(){

            var ListeCar = new Array("A", "I", "O", "U", "I", "E");
            var chaine = '';
            for (i = 0; i < 1; i++) {
                chaine = chaine + ListeCar[Math.floor(Math.random() * ListeCar.length)];
            }
        $("#lettre"+j).css("color","red");
            $("#lettre"+j).html(chaine);
j++
    })
    $("#consonne").click(function(){

        var ListeCar = new Array("Z", "R", "T", "P", "Q", "S", "D", "F", "G", "H", "J","K","L","M","W","X","C","V","B","N" );
        var chaine = '';
        for (i = 0; i < 1; i++) {
            chaine = chaine + ListeCar[Math.floor(Math.random() * ListeCar.length)];
        }
$("#lettre"+j).css("color","blue");
        $("#lettre"+j).html(chaine);
j++
    })
}());*/


/*var word = "l"
var resultNode = document.getElementById("result");
var counter = 0;
var oldString = "";
var interval = setInterval(function(){
    wordGenerator();
    if(!counter){
        clearInterval(interval);
    }
}, 100);

function wordGenerator() {
    var returnedString = "";
    counter = 0;

    for(var i=0; i<word.length; i++) {
        if(!oldString.length || oldString.charAt(i) != word.charAt(i)){
            var letter = String.fromCharCode(32 + Math.random() * 94);
            counter ++;
        }else{
            var letter = word.charAt(i);
        }
        returnedString += letter;
    }
    oldString = returnedString;
    resultNode.innerHTML=returnedString;

}



function wordGenerator() {
    var returnedString = "";
    counter = 0;

    for(var i=0; i<word.length; i++) {
        if(!oldString.length || oldString.charAt(i) != word.charAt(i)){
            var letter = String.fromCharCode(32 + Math.random() * 94);
            counter ++;
        }else{
            var letter = word.charAt(i);
        }
        returnedString += letter;
    }
    oldString = returnedString;
    resultNode.innerHTML=returnedString;

}*/

var j = 1;
(function () {
        var state = false;
        $("#voyelle").click(function(){
            $.get('/lettre.php?type=voyelle',function(e){
            $('#lettre'+j).html(e);
            j++;
        })

    })
    $("#consonne").click(function() {
        $.get('/lettre.php?type=consonne', function (e) {
            $('#lettre'+j).html(e);
            j++
        })
    })

    $("#zero").click(function() {
        $.get('/lettre.php?type=zero', function (e) {
            $('#lettre'+j).html(e);
            j++
        })
    })
    }());


