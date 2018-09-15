// Imports the Google Cloud client library
/*const vision = require("@google-cloud/vision");

// Creates a client
const client = new vision.ImageAnnotatorClient();

// Performs label detection on the image file
client
  .labelDetection("img/supremeshirt.jpg")
  .then(results => {
    const labels = results[0].labelAnnotations;

    console.log("Labels:");
    //labels.forEach(label => console.log(label.description));
   // createHTML(labels);
  
  })
  .catch(err => {
    console.error("ERROR:", err);
  });


const fileName = 'img/supremeshirt.jpg';


client
  .logoDetection(fileName)
  .then(results => {
    //console.log('Logos:');
    var data1=(results[0].logoAnnotations[0].description);
 //   createHTML(data1);
 
  })
  .catch(err => {
    console.error('ERROR:', err);
  });*/


/*function createHTML(data){

var rawTemplate=document.getElementById("template").innerHTML;
var compiledTemplate= Handlebars.compile(rawTemplate);
var ourGeneratedHTML= compiledTemplate(data);
    
var container= document.getElementById("container");
container.innerHTML=ourGeneratedHTML;
    
    
var context = {title: "My New Post", body: "This is my first post!"}
var html    = template(context);
    
    
    

}*/

var source = $("#some-template").html(); 
var template = Handlebars.compile(source); 

var data = { 
    users: [ { 
        person: {
            firstName: "Garry", 
            lastName: "Finch"
        },
        jobTitle: "Front End Technical Lead",
        twitter: "gazraa" 
    }, {
        person: {
            firstName: "Garry", 
            lastName: "Finch"
        }, 
        jobTitle: "Photographer",
        twitter: "photobasics"
    }, {
        person: {
            firstName: "Garry", 
            lastName: "Finch"
        }, 
        jobTitle: "LEGO Geek",
        twitter: "minifigures"
    } ]
}; 

Handlebars.registerHelper('fullName', function(person) {
  return person.firstName + " " + person.lastName;
});

$('body').append(template(data));

