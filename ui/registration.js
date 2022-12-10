btnSubmit = document.getElementById("btn-submit")
btnSubmit.addEventListener("click", onSubmitClick);

function onSubmitClick() {
    username = document.getElementById("txt-username").value
    password = document.getElementById("txt-password").value
    firstName = document.getElementById("txt-firstname").value
    lastName = document.getElementById("txt-lastname").value

    request = {
        username, password, firstName, lastName
    }
    console.log(request)
    url = '/api/film_suggestion/server/resource/registration-resource.php'
    axios.post(url, request)
}
