btnSubmit = document.getElementById("btn-submit")
btnSubmit.addEventListener("click", onSubmitClick);

function onSubmitClick() {
    username = document.getElementById("txt-username").value
    password = document.getElementById("txt-password").value

    request = {
        username, password
    }
    console.log(request)
}