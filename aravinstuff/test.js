var http = require("http");
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: true });

// Running Server Details.
var server = app.listen(8001, function () {
        var host = server.address().address
        var port = server.address().port
        console.log("Example app listening at %s:%s Port", host, port)
});


app.get('/form', function (req, res) {
        var html='';
        html +="<center><body>";
        html += "<form action='/application/json'  method='post' name='form1'>";
        html += "Thr picture you would like to analyze</p><input type= 'text' name='name' size='100'>";
        html += "<input type='submit' value='submit'>";
        html += "<a class='btn' href='http://localhost:8888/connect.php'>Next</a>";
        html += "</form>";
        html += "</body></center>";
        res.send(html);
});






app.post('/application/json', urlencodedParser, function (req, res){
        
        var URL =req.body.name;
    
    
    
    

// Imports the Google Cloud client library
const vision = require("@google-cloud/vision");

// Creates a client
const client = new vision.ImageAnnotatorClient();

// Performs label detection on the image file
client
  .labelDetection(URL)
  .then(results => {
    var x={
        results: results[0]
    }
        ;
    
    
 /*   res.setHeader('Content-Type', 'application/json');
        res.send(JSON.stringify(x));

        app.get('/', function(req, res){
            res.send(JSON.stringify(x));
        });
*/
    
    var json = JSON.stringify(x);
    var fs = require('fs')
fs.writeFile ("app.json", json, function(err) {
    if (err) throw err;
    console.log('complete');
    }
);

    //labels.forEach(label => console.log(label.description));
    //putin(labels);
  
  })
  .catch(err => {
    console.error("ERROR:", err);
  });





client
  .logoDetection(URL)
  .then(results => {

    
    
    var x={results:results[0]};
    
   
        /*res.send(JSON.stringify(x));

        app.get('/', function(req, res){
            res.send(JSON.stringify(x));
        });*/

    
    
    //putin(data1);
    
     var json = JSON.stringify(x);
    var fs = require('fs')
fs.writeFile ("logo.json", json, function(err) {
    if (err) throw err;
    console.log('complete');
    }
);
    
 
  })
  .catch(err => {
    console.error('ERROR:', err);
  });


function createHTML(data){

//console.log ("test");
console.log(data);

}
    
    
    
     app.set('view engine', 'hbs');
    
    
                
                
                
             
        
    
    /*function putin (data1){
        
        
           var html = buildHtml(req);
                
                res.writeHead(200, {
                        'Content-Type': 'text/html',
                        'Content-Length': html.length,
                        'Expires': new Date().toUTCString()
                });
                res.end(html);
                
                
                function buildHtml(req) {
                        var header = 'WHAT HEALTHY MEALS ARE AVAILABLE IN YOUR FRIDGE?';
                        
                        var body = "Labels: "+data1+"\n\n";
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        // concatenate header string
                        // concatenate body string
                        
                        return '<!DOCTYPE html>'
                        + '<html><centre><header><strong>' + header+'</strong><br /><br /><br </centre><body>' + body+'<br />'+ '</centre>';
                };
    }*/
    

        
        
        
        
        
        });
        

