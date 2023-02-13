<!DOCTYPE html>
<html lang="en">
<head>
<script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            const data = JSON.parse(this.responseText);
            console.log(typeof parsed, parsed);
        }
    };
    xhr.open("GET", "", true);
    xhr.send();
</script>
</head>
<body>
</body>
</html>


