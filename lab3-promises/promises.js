'use strict';

var add2 = function(num) {
	var promise = new Promise(function(resolve, reject) {
	resolve(num);
	});

	promise.then(function(val) {
		console.log(val);
		return val + 1;
	})
	.then(function(val) {
		console.log(val);
	})
	.catch(function(err) {
		console.log('you suck');
	});
}

add2(3);
