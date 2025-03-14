var start = "ココカラ──────── <br>";
var end = "────────ココマデ<br><br>";
var star1 = "★";
var star2 = "☆";


//問１
document.write(start);

for (var a = 1; a <= 5; a++){
    document.write(star1);
}
document.write("<br>");

document.write(end);


//var star1 = "★";
//var star2 = "☆";

//ループ処理 = for( 初期値; 条件式; 増減式 ){ 処理内容 }

//出力 = document.write


//問2
document.write(start);

for (var i = 1; i <= 2; i++){
    for(var a = 1; a <= 3; a++){
        document.write(star1);
    }
    document.write("<br>");
}

document.write(end);


//問3
document.write(start);

for (var i = 1; i <= 2; i++){
    for(var a = 1; a <= 5; a++){
        document.write(star2);
    }
    document.write("<br>");
}

document.write(end);


//問4
document.write(start);

for (var i = 1; i <= 4; i++){
    for(var a = 1; a <= 5; a++){
        document.write(star1);
    }
    document.write("<br>");
}

document.write(end);


//問5
document.write(start);

for (var i = 1; i <= 4; i++){
    for(var a = 1; a <= 3; a++){
        document.write(star1);
    }
    document.write("<br>");
}

document.write(end);


//var star1 = "★";
//var star2 = "☆";

//ループ処理 = for( 初期値; 条件式; 増減式 ){ 処理内容 }

//出力 = document.write


//問6
document.write(start);

for (var i = 1; i <= 3; i++){
    for(var a = 1; a <= 3; a++){
        if(a == 2){
            document.write(star2);
        }else{
            document.write(star1);
        }
    }
    document.write("<br>");
}

document.write(end);

//var star1 = "★";
//var star2 = "☆";

//ループ処理 = for( 初期値; 条件式; 増減式 ){ 処理内容 }

//出力 = document.write

//判定 = if (条件) {処理内容;｝else {処理内容;｝

//問7
document.write(start);

for (var i = 1; i <= 4; i++){
    for(var a = 1; a <= 5; a++){
        if(a % 2 == 0){
            document.write(star2);
        }else{
            document.write(star1);
        }
    }
    document.write("<br>");
}

document.write(end);


//問8
document.write(start);

for (var i = 1; i <= 5; i++){
    for(var a = i; a >= 1; a--){
        document.write(star1);
    }
    document.write("<br>");
}

document.write(end);