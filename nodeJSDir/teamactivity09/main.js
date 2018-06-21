const express = require('express');
const app = express();

var num1 = parseInt(process.argv[2]);
var op = process.argv[3];
var num2 = parseInt(process.argv[4]);
var ans = eval('num1 + op + num2');

app.get('/math', function (req, res) {
    res.send(num1 + op + num2 + ' = ' + ans);
  });

app.listen(3000,() => console.log('step one'));
