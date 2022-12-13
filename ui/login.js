btnSubmit = document.getElementById("btn-submit")
btnSubmit.addEventListener("click", onSubmitClick);

async function onSubmitClick() {
    username = document.getElementById("txt-username").value
    password = document.getElementById("txt-password").value

    request = {
        username, password
    }
    console.log(request)
    url = '/api/film_suggestion/server/resource/login-resource.php'
    response = await axios.post(url, request)
    if (response.data == "OK")
        window.location.replace("/api/film_suggestion/ui/index.html")
    else
        alert(response.data)
}