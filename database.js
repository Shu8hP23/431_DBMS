const {createPool} = require('mysql');

const pool = createPool({
    host: "localhost",
    user: "",
    passowrd:"",
    database: "test",
    port: 3300,
    
})

pool.query