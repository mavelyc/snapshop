// Download the helper library from https://www.twilio.com/docs/node/install
// Your Account Sid and Auth Token from twilio.com/console
const accountSid = 'AC074fc9fef42f078fc2408ace257ec1a3';
const authToken = 'b6721c1711fe2fcb53bb3ff65f75efa1';
const client = require('twilio')(accountSid, authToken);
var http = require("http");
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: true });

// Running Server Details.
var server = app.listen(4000, function () {
        var host = server.address().address
        var port = server.address().port
        console.log("Example app listening at %s:%s Port", host, port)
});


app.get('/form', function (req, res) {
        var html='';
        html +="<center><body>";
        html += "<form action='/application/json'  method='post' name='form1'>";
        html += "The picture you would like to send to your friend</p><input type= 'text' name='name' size='100'><br /><br />";
        html += "Please provide your friends phone number</p><input type= 'text' name='number1' size='100'><br /><br />";
        html += "<input type='submit' value='submit'>";
        html += "</form>";
        html += "</body></center>";
        res.send(html);
});



app.post('/application/json', urlencodedParser, function (req, res){
        
        var URL =req.body.name;
        var phone = req.body.number1;




client.messages
  .create({
     body: "\n\n YOU HAVE JUST BEEN SENT A SNAP SHOT:"  + URL ,
     from: '+1249490-8473',
     to: '+1'+phone
   })
  .then(message => console.log(message.sid))
  .done();
    
    
});


    
    
    