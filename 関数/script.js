//問1
function menseki(hankei){
    return "半径" + hankei + "㎝の面積は" + hankei * hankei * 3.14 + "㎠です。";
}

document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));


document.write("<br>");
document.write("<br>");


//関数 = function 関数名(引数1, 引数2, ・・・){ return 戻り値; }
//出力 = document.write


//問２
//function totalfee(adult, child, adultfee = 500, childfee = 200){
//    return adultfee * adult + childfee * child + "円です。";
//}
//
//document.write(totalfee(2,4));
//document.write("<br>");
//document.write(totalfee(1,5));
//document.write("<br>");
//document.write(totalfee(3,7));
//
//
//document.write("<br>");
//document.write("<br>");


function totalfee(group, adult, child,){
    return group + "グループの合計金額は" + 
           (500 * adult + 200 * child) + "円です。";
}

document.write(totalfee("A",2,4));
document.write("<br>");
document.write(totalfee("B",1,5));
document.write("<br>");
document.write(totalfee("C",3,7));


document.write("<br>");
document.write("<br>");


//function totalfee(adultfee = 500, adult, childfee = 200, child,){
//    return adultfee * adult + childfee * child + "円です。";
//}
//
//document.write(totalfee(2,4));
//document.write("<br>");
//document.write(totalfee(1,5));
//document.write("<br>");
//document.write(totalfee(3,7));
