'use strict';

var add2 = function(num) {
	return new Promise(function(resolve, reject) {
		resolve(num);
	});
}

add2(3)
	.then(function(val) {
		console.log(val);
		return add2(val + 1);
	})
	.then(function(val) {
		console.log(val);
	})
	.catch(function(err) {
		console.log('you suck');
	});
