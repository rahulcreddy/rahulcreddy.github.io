<?php
        
        $ingredient = str_replace(' ', ',',$_REQUEST['ingredients']);
        
        $urlContents = file_get_contents('https://api.edamam.com/search?q='.$ingredient.'&app_id=a682390f&app_key=f36c17d6c40b80ee106fe75f00a164ec&from=0&to=20');
        
        $ingArray = json_decode($urlContents, true);
        
        $label = array($ingArray['hits'][0]['recipe']['label'], $ingArray['hits'][1]['recipe']['label'], $ingArray['hits'][2]['recipe']['label']);

        $image = array($ingArray['hits'][0]['recipe']['image'], $ingArray['hits'][1]['recipe']['image'], $ingArray['hits'][2]['recipe']['image']);
        
      /*for($i = 0; $i < 3; $i++){  
if($source[$i] == 'Foodista'){
    $source[$i] == $ingArray['hits'][$i+3]['recipe']['source'];
    
}else{
    $ingArray['hits'][$i]['recipe']['source'];
}} */
        $source = array($ingArray['hits'][0]['recipe']['source'], $ingArray['hits'][1]['recipe']['source'], $ingArray['hits'][2]['recipe']['source']);

        $url = array($ingArray['hits'][0]['recipe']['url'], $ingArray['hits'][1]['recipe']['url'], $ingArray['hits'][2]['recipe']['url']);
        

?>


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
            background: url(background4.jpg) no-repeat center center fixed; 
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
            margin-top: 80px;
            
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
      
      <nav class="navbar">
  <a class="navbar-brand" href="https://recipefind.azurewebsites.net/">
    <img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Recipe Finder
  </a>
</nav>
      
      <div class="container">
          
    <div class="card-deck">
                  <div class="card"><?php
                        echo "<img class='card-img-top' src=".$image[0]." alt='Card image cap'>";
                        ?>
                            <div class="card-body">
                              <h5 class="card-title">
                                  <?php 
                                  echo $label[0];
                                  ?>
                                </h5>
                                <div><?php

                                echo "<a href='".$url[0]."' class='btn btn-primary'>Visit Site</a>";

                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><u>Source</u> : <?php
                                  echo $source[0];
                                  ?></small>
                            </div>
                  </div>
                    <div class="card"><?php
                                echo "<img class='card-img-top' src=".$image[1]." alt='Card image cap'>";
                                ?>
                            <div class="card-body">
                              <h5 class="card-title">
                                  <?php 
                                  echo $label[1];
                                  ?>
                                </h5>
                                <div><?php

                                echo "<a href='".$url[1]."' class='btn btn-primary'>Visit Site</a>";

                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted"><u>Source</u> : <?php
                                  echo $source[1];
                                  ?></small>
                            </div>
                  </div>
                              <div class="card" id = "thirdOne" display = 'block'><?php
                        echo "<img class='card-img-top' src=".$image[2]." alt='Card image cap'>";
                        ?>
                    <div class="card-body">
                      <h5 class="card-title">
                          <?php 
                          echo $label[2];
                          ?>
                        </h5>
                        <div><?php

                        echo "<a href='".$url[2]."' class='btn btn-primary'>Visit Site</a>";

                            ?>
                        </div>
                        </div>
                            <div class="card-footer">
                              <small class="text-muted"><u>Source</u> : <?php
                                  echo $source[2];
                                  ?></small>
                            </div>
          </div>
          </div>
          
    <!--    <div id="previewWidget" style="overflow-x: hidden;height:800px"></div>
<div id="previewWidgetHidden" style="display: none"><svg class="circularLoader centered" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="width:200px;height:200px">
    -->
          </div>
      
    <script type="text/javascript">
         /*
        var ingre = window.location.search;
        var ing = String.replace("+", ",")
    
    $("#submitButton").click(function () {
                $.getJSON("http://food2fork.com/api/search?key={3f985e2e1bdce592d59fc0bd293c5ab5}&q=" + ing;
                    function (data) {
                        alert(JSON.stringify(data));
                    });
                });
 
 
    
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