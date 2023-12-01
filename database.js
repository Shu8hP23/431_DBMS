const {createPool} = require('mysql');

var pool = createPool({
    host: "localhost",
    user: "root",
    passowrd:"",
    database: "DBMS",
    port: 3306,
    
})

pool.query ('SELECT * FROM Users', function (error, results, fields) {
    if (error)
        throw error;
    
    result.forEach(result => {
        console.log (result);
    });
});
