<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <button id="myButton">Нажми меня</button>
    <div id="results"></div>
    <script>
        document.getElementById('myButton').addEventListener('click', function () {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'query.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var results = JSON.parse(xhr.responseText);
                    var html = '<table border="1">';
                    html += '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';
                    for (var i = 0; i < results.length; i++) {
                        html += '<tr>';
                        html += '<td>' + results[i].id + '</td>';
                        html += '<td>' + results[i].name + '</td>';
                        html += '<td>' + results[i].email + '</td>';
                        html += '</tr>';
                    }
                    html += '</table>';
                    document.getElementById('results').innerHTML = html;
                } else {
                    console.log('Request failed.  Returned status of ' + xhr.status);
                }
            };
            xhr.send();
        });
    </script>

</body>

</html>