<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dua</title>
</head>
<body>
    <script>
        function balikKata(kalimat){
            let newKata = "";
            for(let i = kalimat.length - 1; i >= 0; i--){
                newKata = newKata + kalimat[i];
            }
            return newKata;
        }

        let a = balikKata('abcde');
        document.write('abcde dibalik menjadi <strong>' + a + '</strong>');
    </script>
</body>
</html>
