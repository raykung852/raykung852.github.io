<?php
   // Initialize the session
   session_start();

   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
   }
   ?>
<!DOCTYPE html>
<html lang="zh">
   <head>
      <meta charset="UTF-8">
      <title>活動參與/所獲獎項資料上報表</title>
      <link href="css/welcome.css" rel="stylesheet">
      <link href="css/form.css" rel="stylesheet">
      <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/earlyaccess/notosanstc.css" rel='stylesheet'>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">再創世紀</span>
            <a class="btn btn-sm btn-outline-warning" href="logout.php">Sign Out</a>
         </nav>
      </header>
      <div class="container">
         <h4 class="d-flex justify-content-between align-items-center mb-3">
      </div>
      <div class="col-md-8 order-md-1">
         <h4 class="mb-3">活動參與/所獲獎項資料上報表</h4>
         <form>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">1. 參與活動記錄</label>
               <div class="col-sm-4">
                  <select class="form-control">
                     <option>請選擇</option>
                     <option>透過學校參與的校外活動</option>
                     <option>校內舉辦的活動</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="input2" class="col-sm-3 col-form-label">2. 活動名稱</label>
               <div class="col-sm-4">
                  <input class="form-control" id="inputPassword3" placeholder="活動名稱">
               </div>
               <label for="input2" class="col-form-label">日期</label>
               <div class="col-sm-3">
                  <input type="date" name="bday" class="form-control" min="2018-01-01" max="2018-12-31">
               </div>
            </div>
            <div class="form-group row">
               <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label" >3. 活動簡介（不多於30字）</label>
               <textarea class="form-control ml-3 col-sm-5" id="exampleFormControlTextarea1" maxlength="30" rows="2"></textarea>
            </div>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">4. 活動時間</label>
               <label for="input1" class="col-form-label">由</label>
               <div class="col-sm-3">
                  <input type="time" class="form-control">
               </div>
               <label for="input1" class="col-form-label">至</label>
               <div class="col-sm-3">
                  <input type="time" class="form-control">
               </div>
            </div>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">5. 活動時數</label>
               <label for="input1" class="col-form-label">小時</label>
            </div>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">6. 主辦/合辦機構（如有）</label>
               <div class="col-sm-4">
                  <input class="form-control" id="inputPassword3" placeholder="活動名稱">
               </div>
            </div>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">7. 參與學生</label>
               <div class="col-sm-4">
                  <input class="form-control" id="inputPassword3" placeholder="活動名稱">
               </div>
            </div>
            <div class="form-group row">
               <label for="input1" class="col-sm-3 col-form-label">8. 其他學習經歷主要能力</label>
            </div>
            <div class="form-group row">
               <div class="form-check ">
                  <label for="default" class="btn btn-primary">語言智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-secondary ">邏輯數學智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-success ">音樂智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-danger ">空間智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
            </div>
            <div class="form-group row">
               <div class="form-check ">
                  <label for="default" class="btn btn-warning ">人際關係智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-info ">自省智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-light ">身體動覺智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
               <div class="form-check ">
                  <label for="default" class="btn btn-dark ">自然辨識智能<input type="checkbox" id="default" class="badgebox"><span class="badge badge-light">&check;</span></label>
               </div>
            </div>
            <fieldset class="form-group">
               <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                        First radio
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                        Second radio
                        </label>
                     </div>
                     <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                        </label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <div class="form-group row">
               <div class="col-sm-2">Checkbox</div>
               <div class="col-sm-10">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                     Example checkbox
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Sign in</button>
               </div>
            </div>
         </form>
      </div>
      </div>
   </body>
</html>
