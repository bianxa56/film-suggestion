btnSubmit = document.getElementById("btn-submit")
btnSubmit.addEventListener("click", onSubmitClick);

async function onSubmitClick() {
    firstName = document.getElementById("txt-firstname").value
    lastName = document.getElementById("txt-lastname").value
    email = document.getElementById("txt-email").value
    password = document.getElementById("txt-password").value

    request = {
        firstName, lastName, email, password
    }
    console.log(request)
    url = '/api/film_suggestion/server/resource/registration-resource.php'
    response = await axios.post(url, request)
    alert(response.data)
    window.location.replace("/api/film_suggestion/ui/index.html")

}
