/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var hb = function documentHeight() {
    return Math.max(
            document.documentElement.clientHeight,
            document.body.scrollHeight,
            document.documentElement.scrollHeight,
            document.body.offsetHeight,
            document.documentElement.offsetHeight
            );
};
var obj = document.getElementById('content').offsetHeight;
var res = (hb() / 2) - (obj / 2);
document.getElementById("content").style.margin = res + "px auto";
var d = document.querySelector("figure#cambiado").style.backgroundImage = "url(../resources/images/bri/imagen" + Math.floor(Math.random() * 10) + ".jpg)";
console.log(d);
//document.getElementById("bu").addEventListener("click", val);
//function val() {
//    if (document.form.user.value.length === 0 || document.form.pass.value.length === 0) {
//        var d = document.getElementById("en");
//        d.setAttribute("action", "");
//        d.setAttribute("href", "javascript:location.reload()");
//        return false;
//    } else
//        return true;
//}
document.getElementById("password").placeholder = "Contraseña";
