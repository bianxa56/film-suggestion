submit = document.getElementById("submit")
submit.addEventListener("click", onSubmitClick);

async function onSubmitClick() {
    genre = document.getElementById("genre").value

    console.log(genre)

    url = '/api/film_suggestion/server/resource/film-resource.php'
    params = {
        genre
    }
    response = await axios.get(url, {params})
    console.log(response.data)

}  

