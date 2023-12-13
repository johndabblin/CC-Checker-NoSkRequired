<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asklahanov ・ CC Checker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/main.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
                <form id="form">
                <div class="form-group">
                  <textarea class="form-control" id="ccData" placeholder="49090005276xxxxx|04|2025|896" required></textarea>
                </div>
                <div class="col-md-offset-5">
                  <div class="form-group">
                    <button type="submit" id="submitBtn" class="btn start" disabled>Start</button>
                    <button type="button" id="stopBtn" class="btn stop" disabled>Stop</button>
                  </div>
                </div>
            </form>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title live">Live <span class="badge">0</span>
              </h3>
            </div>
            <div class="panel-body success">
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title dead">Dead <span class="badge">0</span>
              </h3>
            </div>
            <div class="panel-body danger"></div>
          </div>
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title unknown">Unknown <span class="badge">0</span>
              </h3>
            </div>
            <div class="panel-body warning"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer text-center">
      <a href="https://github.com/asklahanov2121" target="_blank">© <script>document.write(new Date().getFullYear())</script> Asklahanov Pogi</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./assets/index.js"> </script>
  </body>
</html>
