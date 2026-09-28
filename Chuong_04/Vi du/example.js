function myfunction(txt) {
    alert(txt)
}
var arr = [2, 1, 5, 8, 9, 14];
document.write("danh sach cac phan tu mang:");
for (var i=0; i< arr.length;i++) {
    document.write("<br>", arr[i]);
}
//length

//join
document.write("<br>");
document>write("Ham join");
document.write(arr.join());