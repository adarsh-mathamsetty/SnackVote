@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting App</title>
    <script>
       function appleData() {
          document.getElementById('description').value = 'Eating apples reduce risk for developing several diseases, including cancer, heart disease, diabetes, and asthma.';
       }
        function orangeData() {
          document.getElementById('description').value = 'Oranges are rich in citrus limonoids, proven to help fight a number of varieties of cancer including that of the skin, lung, breast, stomach and colon.';
       }
        function bananaData() {
          document.getElementById('description').value = 'According to Ayurveda, banana has a sweet and sour taste. The sweet taste is said to bring about a sense of heaviness but the sour taste is known to stimulate agni (the digestive juices), thereby supporting digestion and helping in building up metabolism.';
       }
        function pineappleData() {
          document.getElementById('description').value = 'A single serving of pineapple has more than 130% of the daily requirement of vitamin C for human beings, making it one of the richest and most delicious sources of ascorbic acid. Vitamin C helps in reducing illnesses and boosting the immune system.';
       }
       function votesuccess() { alert("Your Vote is registered! Thank You. ;)");}
</script>
<style>
.round {
  background-color: #4CAF50;
    border: none;
    color: white;
    border-radius: 50%;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
  }
  .button{
    position:absolute;
    margin-left: 900px;
    padding-top: 120px;
  }
.title { color: #d54d7b;

          margin-left: 600px;
          margin-top: 400px;
          text-shadow: 0 1px 1px #fff; }
</style>

</head>
<body>
<p style="color: #d54d7b;font-size:25px; font-family: Great Vibes, cursive; margin-left:780px;"> Select a fruit to see an Interesting Fact</p>
  <p class="button">
    <button class="round" onclick="location.href='{{ url('index') }}'" >
         View votes</button></p>
<div class="container">
    <div class="row justify-content-center", style="padding-left: 200px; width:400px; height:450px; float: left;">
        <div class="col-md-8">
                <form action = "store" method = "post">


                  <div style="padding-top: 0px">
                      <input type="radio" name="name" value="Apple" onclick="appleData()"/>
                      <img src = "http://noteablemusictherapy.com/wp-content/uploads/2017/09/apple.jpg" style="width:70px;height:70px;">
                      <font size="6" color="red"> Apple</font>
                  </div>
                    <br/>

                  <div>
                      <input type="radio" name="name" value="Orange" onclick="orangeData()"/>
                      <img src = "https://www.oasis-botanical.ca/wp-content/uploads/2017/02/orange-web.jpg" style="width:70px;height:70px;">
                      <font size="6" color="orange"> Orange</font>
                  </div>
                    <br/>

                  <div>
                      <input type="radio" name="name" value="Banana" onclick="bananaData()"/>
                      <img src = "http://images6.fanpop.com/image/photos/34500000/Banana-3-bananas-34512789-1000-1000.jpg" style="width:70px;height:70px;">
                      <font size="6" color="greenyellow"> Banana</font>
                  </div>
                    <br/>

                  <div>
                      <input type="radio" name="name" value="Pineapple" onclick="pineappleData()"/>
                      <img src = "https://www.organicfacts.net/wp-content/uploads/2013/06/Pineapple.jpg" style="width:70px;height:70px;">
                      <font size="6" color="orange"> Pineapple</font>
                  </div>
                    <br/>

                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="submit" class="round" name = "submit" value = "Vote!" >&nbsp;&nbsp;&nbsp;

                </form>
        </div>
    </div>

    <div class="row justify-content-center", style="margin-left: 630px; width:500px; height:100px; ">

        <textarea id="description" rows="5" cols="60" style="border:none">

        </textarea>
    </div>
</div>

</body>
</html>
@endsection
