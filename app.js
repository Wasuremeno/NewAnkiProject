function familiar(){
    document.getElementById("green-button").classList.toggle("affirmative");
}
function unfamiliar(){
    document.getElementById("grey-button").classList.toggle("negative");
}

function green(){
    document.getElementById("green").click();
}
function grey(){
    document.getElementById("grey").click();
}

// function myFunction() {
//     document.getElementById("selecting").submit();
//   }

addEventListener("keydown", (event) => {
    let key = event.key;
    if (key == "F" || key == "f") { 
      let text = "You pressed the 'f' key!";
        console.log(text);
        familiar();
        setTimeout(green, 300);
    }
});



addEventListener("keydown", (event) => {
    let key = event.key;
    if (key == "J" || key == "j") { 
      let text = "You pressed the 'j' key!";
        console.log(text);
        unfamiliar();
        setTimeout(grey, 300);
    }
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }



  strValueTranslation = document.getElementById("translation").innerHTML;

  if (strValueTranslation === "") {
    console.log("translation is empty");
    document.getElementById("translation").innerHTML = "Share";
    document.getElementById("memorized").style.display = "flex";

}else{
    document.getElementById("choose").style.display = "flex";

}

  strValueFurigana = document.getElementById("furigana").innerHTML;
  if (strValueFurigana === "" && strValueKatakana === "") {
    console.log("translation is empty");
    document.getElementById("furigana").innerHTML = "Nice job!";
    document.getElementById("furigana").style.color = "#939496";
    document.getElementById("furigana").style.padding = "10px 0px 10px 0px";
    document.getElementById("furigana").style.justifyContent = "space-around";
}
  strValueKanji = document.getElementById("kanji").innerHTML;
  strValueKatakana = document.getElementById("katakana").innerHTML;
  if (strValueKanji === "" && strValueKatakana === "") {
    console.log("translation is empty");
    document.getElementById("kanji").innerHTML = "Today you've memorized";
    document.getElementById("kanji").style.color = "white";
    document.getElementById("kanji").style.justifyContent = "space-around";
    document.getElementById("kanji").style.paddingLeft = "0";


}
  
function switching(){
  if(document.getElementById('toggle').checked) {
    document.getElementById("dbwordcounter").style.zIndex = "-1";
    console.log("checked learn");
  }else if (document.getElementById('toggle-switch').checked == false){
    console.log("i don't understand it");

  }else{
    document.getElementById("dbwordcounter").style.zIndex = "10";
    console.log("checked review");
  }

}

