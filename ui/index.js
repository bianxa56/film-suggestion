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
    console.log(JSON.stringify(response.data))

    var table = document.getElementById("film");
    var rowCount = table.rows.length;
    for (var i = 1; i < rowCount; i++) {
        table.deleteRow(1);
    }
    for (var i = 0; i < response.data.length; i++) {
        film = response.data[i];
        
        var row = table.insertRow(i+1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = film.name;
        cell2.innerHTML = film.synopsis;
        cell3.innerHTML = film.year;
        cell4.innerHTML = film.length;
    }      
    }
    

