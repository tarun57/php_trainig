<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
  text-align: center;
  font-size: 14px;
  background-color: #DBE3E6;
}
h1{
  font-family: 'Pacifico', cursive;
  font-size: 6em;
  color: #252E40;
  line-height: 2.0em;
}
button{
  background-color: #F16669;
  border: none;
  padding: 15px 20px;
  color: white;
  font-size: 2em;
  margin-top: 40px;
  transition: 1s;
  cursor: pointer;
  border-radius: 4px;
}

button:hover{
  background-color: darken(#F16669, 30)
}
  </style>
</head>
<body>
<h1>Sweet Alert.js</h1>
<button>Hey, click me!</button>
  <script>
  $("button").click(function() {
  swal({
    title: "Red Alert!",
    text: "I will close in 4 seconds.",
    timer: 4000,
    showConfirmButton: false
  });
});
  </script>
</body>
</html>
