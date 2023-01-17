const express = require('express');
const fs = require('fs');
const app = express();
app.set('view engine', 'ejs');
app.set('views', 'all');
app.use(express.static("public"));
app.get('/', function(req, res){
  fs.readFile('./data.json', (err, data) => {const listObj= JSON.parse(data);
    if(err) {res.status(400).send('Error List not found');
  } else {
    res.render('template', {lists: listObj});
  }
});
});
app.listen(3000, function(){
  console.log('Listening on port 3000');
});