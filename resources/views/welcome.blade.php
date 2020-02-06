<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">  
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-2 control-label">NAMES</label>
                            <div class="col-md-2 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <?php
                                        foreach($names as $name){
                                          
                                          echo "<option>".$name->name."</option>";
                                        } 
                                     ?>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <br>
                         <div class="form-group">
                            <label class="col-md-2 control-label" id="time"></label>
                         </div>
                         <div class="form-group">
                          <div class ="col-md-1">
                            <button class= "btn btn-primary" onclick="showCurrentTime()">clock In</a></button>
                          </div>
                          <div class ="col-md-1">
                            <label id="clockin">time</label>
                          </div>
                         </div>
                         <div>
                        <div class="container">
                          <h2>Break</h2>
                          <div class="card">
                            <div class="card-body">
                              <button class="btn btn-primary">start</button>
                              <button class="btn btn-danger">end</button><p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class ="col-md-1">
                            <button class= "btn btn-primary">clock Out</button>
                        </div>
                        <div class ="col-md-1">
                            <label class="col-md-4 control-label" id = "end"></label>
                          </div>
                        </div>
                         <div class="form-group">
                            <h2>Total time worked</h2>
                            <h2>Total left before timeout</h2>
                            <h2>Total breaks used</h2>
                         </div>

                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
    </body>
</html>
<script>
  function showCurrentTime(){
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    document.getElementById('clockin').innerHTML = h + ":" + m;
    return false;
  }
  function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }

  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m ;
    t = setTimeout(function() {
      startTime()
    }, 500);
  }
  startTime();

  
</script>
