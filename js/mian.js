// var btn= document.getElementById("pre");
// btn.addEventListener("click",function () {
//     alert("12");
// });
$.ajax({ url: 'src/controllers/ProductsController.php',
    data: {function2call: 'showMessage',id:'3'},
    type: 'post',
    success: function(output) {
        alert(output);
    }
});
