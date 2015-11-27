(function () {
	var hash = function (args) {
		return JSON.stringify(args);
	}
	window.hash=hash;
})();