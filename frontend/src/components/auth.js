const AUTH = {
	isAuth: function () {
		return localStorage.getItem('user') !== null;
	}
};

export default AUTH;