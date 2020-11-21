const db = require('./db');

module.exports ={

	validate: function(user, callback){
		var sql = "select * from product where username=? and password=?";
		db.getResults(sql, [user.username, user.password], function(results){
			if(results.length > 0){
				callback(true);
			}else{
				callback(false);
			}
		});
	},
	getById: function(){

	},
	getAll: function(callback){
		var sql = "select * from product";
		db.getResults(sql, null, function(results){
			callback(results);
		});
	},
	insert: function(user, callback){
		var sql = "insert into product VALUES (?, ?, ?, ?)";

		db.execute(sql, ['', user.username, user.password, user.type], function(status){
			callback(status);
		});
	},
	update: function(){

	},
	delete: function(){

	}
}