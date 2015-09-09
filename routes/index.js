var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('homepage', { title: 'Express' });
});

router.get('/request', function(req, res, next) {
  res.render('request', { title: 'Express' });
});

router.get('/request/detail', function(req, res, next) {
  res.render('req-data', { title: 'Express' });
});

module.exports = router;
