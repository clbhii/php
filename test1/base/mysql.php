
<?php
$servername = "localhost";
$username = "root";
$password = "root";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, 'php', '3307');
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";



// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO user (user_name, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// 设置参数并执行
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

echo "新记录插入成功";

$stmt->close();

$sql = "SELECT id, user_name, password,email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 结果";
}

mysqli_query($conn,"UPDATE user SET password=36
WHERE user_name='John'");

mysqli_close($conn);
?>