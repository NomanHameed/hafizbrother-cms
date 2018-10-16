// var btn= document.getElementById("pre");
// var divh=document.getElementById("heading123");
// btn.addEventListener("click",function () {
// divh.insertAdjacentHTML("beforeend","good one");
// });
// $.ajax({ url: 'src/controllers/ProductsController.php',
//     data: {function2call: 'showMessage',id:'3'},
//     type: 'post',
//     success: function(output) {
//         alert(output);
//     }
// });


var ajaxRequest;  // The variable that makes Ajax possible!
function createRequest() {
    try {
        // Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    return ajaxRequest;
}
