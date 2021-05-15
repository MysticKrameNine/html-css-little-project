<?php

$exptime = time() + (60 * 60 * 24 * 1/2);
$timeMemo = (string)$exptime;
$cookie_uame = "myuser";
$cookie_uvalue = "Cosette";
setcookie($cookie_uame, "$cookie_uvalue|$timeMemo", $exptime);

?>
<html>

<head>
    <title>
        Get cookie expiration date from JS
    </title>

    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <script type="text/javascript">
        function cookieExpirationDate() {

            // JQuery: AJAX : Appel Asynchrone
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "cookie.php",
                    dataType: 'html',
                    success: function(data) {
                        var response = '<p>' + data + '</p>';
                        console.log(response);
                        $(response).appendTo($("#info")); //JQuery
                    }
                });
            });

        }
    </script>

</head>

<!--         for (var user in data) {
          response += "<tr>" +
            "<td>" + data[user].name + "</td>" +
            "<td>" + data[user].email + "</td>" +
            "<td>" + data[user].phone + "</td>" +
            "<td>" + ((data[user].gender == 0) ? "Male" : "Female") + "</td>" +
            "<td>" + data[user].specialist + "</td>" +
            "<td><a href='../doctor/update.php?id=" + data[user].id + "'>Edit</a> | <a href='#' onClick=Remove('" + data[user].id + "')>Remove</a></td>" +
            "</tr>";
        } -->









<body>
    <button class="btn-submit" onclick="javascript:cookieExpirationDate();">
        Get Cookie expire date
    </button>
    <hr />
    <div id="info"><p></p></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>