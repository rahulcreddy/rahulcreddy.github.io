
<!DOCTYPE html>

<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <link rel="stylesheet" type = "text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
      <link rel="shortcut icon" href="icon.png" />
    <title>Recipe Finder</title>
      
      <script type = "text/javascript" src = "jquery.min.js"></script>
      
    <style type="text/css">
        
        
        html { 
            background: url(bg.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
        }
        
        body {
            
            background: none;
            
        }
        
        .container {
            
            text-align: center;
            margin-top: 150px;
            width: 450px;
            
        }
        
        
        input {
            
            margin: 20px 0;
            
        }
        
        .navbar-inner {
    background:transparent;
}
        
        .navbar-brand, .navbar-brand:hover {
            
    color: black;
            
        }
        
      </style>
      
      
  </head>
    
  <body>
      
      <!-- Image and text -->
<nav class="navbar">
  <a class="navbar-brand" href="#">
    <img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Recipe Finder
  </a>
</nav>
      
      <div class="container">
      
        <h1>Find The Best Recipes</h1>
        <form action="recipe_search.php" method="get">
                <label for="ingredients">Enter the ingredients you have</label>
                    <input type="text" class="form-control leftdiv" id="notes" name= "ingredients" placeholder="Eg. Cabbage Onion, Brinjal Capsicum potato"> 
            <button type="button" class="btn btn-danger leftdiv" id="start-record-btn" title="Start Recording"><i class = "fa fa-microphone"></i> Record</button>
            
            <button type="submit" class="btn btn-primary" id="submitButton" action="/recipe_search.php">Submit</button>
            
            <!-- <button type="submit" class="btn btn-primary" id="pause-record-btn" title="Pause Recording">Pause Recognition</button>
            -->
          </form>
          </div>
      
    <script type="text/javascript">
        //element.webkitSpeech = true;
            var final_transcript = "";
        
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
        
        $('#start-record-btn').on('click', function(e) {
        recognition.start();
});
        $('#end-record-btn').on('click', function(e){
           recognition.stop(); 
        });
       
  
    
recognition.onresult = function(event) { 
    // Get a transcript of what was said.
   var interim_transcript = '';

    for (var i = event.resultIndex; i < event.results.length; i++) {
        
      if (event.results[i].isFinal) {
          
          final_transcript += event.results[i][0].transcript;
          
      } else {
          
          interim_transcript += event.results[i][0].transcript;
          
      }
    }
    var note = final_transcript+interim_transcript;
    
    $('#notes').val(note);
}
    
    /*$("#submitButton").click(function () {
                $.getJSON('curl "https://api.edamam.com/search?q=' + &app_id=${a682390f}&app_key=${f36c17d6c40b80ee106fe75f00a164ec}&from=0&to=5"',

                    function (data) {
                        alert(JSON.stringify(data));
                    });
                });
} 
 
    
    function createNode(element) {
      return document.createElement(element);
  }

  function append(parent, el) {
    return parent.appendChild(el);
  }

  const ul = document.getElementById('recipes');
  const url = 'https://api.edamam.com/search?q=' + note + '&app_id=${a682390f}&app_key=${f36c17d6c40b80ee106fe75f00a164ec}&from=0&to=5';
  fetch(url)
  .then((resp) => resp.json())
  .then(function(data) {
    let recipes = data.results;
    return recipes.map(function(recipe) {
      let li = createNode('li'),
          img = createNode('img'),
          span = createNode('span');
      img.src = recipe.picture.medium;
      span.innerHTML = `${author.name.first} ${author.name.last}`;
      append(li, img);
      append(li, span);
      append(ul, li);
    })
  })
  .catch(function(error) {
    console.log(error);
  });   
   */
      </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
          
  </body>
</html>