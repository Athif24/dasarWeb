$create table = 
'CREATE TABLE IF NOT EXISTS tabel (
	id INT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
    )';

$sql = "INSERT INTO Students (id, username, password) VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70')";
if (mysqli_query($conn, sql)) {
    echo "teah terinput.";
} else {
    echo "Error: " . sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);