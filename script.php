<?php
function executeQueries()
{
    // First SQL query
    $stmt = $mysqli->prepare("INSERT INTO data (Team_no, Style_no, Production_start_date, QCD, Peoduct_basket,Chassies_operations,Chassies_new_operations,Chassies_precentage) VALUES (?, ?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("ssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3']);
    $stmt->execute();
    // Second SQL query
    $team = mysqli_real_escape_string($mysqli, $_POST['teamnum']);
    $style = mysqli_real_escape_string($mysqli, $_POST['stylenum']);
    $stmt = $mysqli->prepare("UPDATE data SET Activity_data = ? WHERE Style_no=$style AND Team_no=$team");
    $dataList = (object) [];
    // Outer loop
    for ($i = 1; $i <= 127; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            // Insert 4 values
            $value = "$i.$j";
            $dataList['data'][$i]['No'] = $i;
            $dataList['data'][$i]['Who'] = $_POST[$i . '1'];
            $dataList['data'][$i]['Activity'] = $_POST[$i . '2'];
            $dataList['data'][$i]['Root cause'] = $_POST[$i . '3'];
            $dataList['data'][$i]['Additiona info'] = $_POST[$i . '4'];
        }
    }
    echo $dataList;
    $dataString = json_encode($dataList);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $mysqli->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset ($_POST['add'])){
    executeQueries();
}
}




?>
<?php
function executeQueries()
{
    // First SQL query
    $stmt = $mysqli->prepare("UPDATE stat crew SET(Team_no =?, Style_no=?, Production_start_date=?, QCD=?, Peoduct_basket=?,Chassies_operations=?,Chassies_new_operations=?,Chassies_precentage=?)");
    $stmt->bind_param("ssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3']);
    $stmt->execute();
    // Second SQL query
    $team = mysqli_real_escape_string($mysqli, $_POST['teamnum']);
    $style = mysqli_real_escape_string($mysqli, $_POST['stylenum']);
    $stmt = $mysqli->prepare("UPDATE data SET Activity_data = ? WHERE Style_no=$style AND Team_no=$team");
    $dataList = (object) [];
    // Outer loop
    for ($i = 1; $i <= 127; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            // Insert 4 values
            $value = "$i.$j";
            $dataList['data'][$i]['No'] = $i;
            $dataList['data'][$i]['Who'] = $_POST[$i . '1'];
            $dataList['data'][$i]['Activity'] = $_POST[$i . '2'];
            $dataList['data'][$i]['Root cause'] = $_POST[$i . '3'];
            $dataList['data'][$i]['Additiona info'] = $_POST[$i . '4'];
        }
    }
    echo $dataList;
    $dataString = json_encode($dataList);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $mysqli->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset ($_POST['update'])){
    executeQueries();
}
}
?>




<?php
function executeQueries()
{
    // First SQL query
    $stmt = $mysqli->prepare("SELECT * from stat crew where(Team_no=?, Style_no=?, Production_start_date=?, QCD=?, Peoduct_basket=?,Chassies_operations=?,Chassies_new_operations=?,Chassies_precentage=?)");
    $stmt->bind_param("ssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3']);
    $stmt->execute();
    // Second SQL query
    $team = mysqli_real_escape_string($mysqli, $_POST['teamnum']);
    $style = mysqli_real_escape_string($mysqli, $_POST['stylenum']);
    $stmt = $mysqli->prepare("UPDATE data SET Activity_data = ? WHERE Style_no=$style AND Team_no=$team");
    $dataList = (object) [];
    // Outer loop
    for ($i = 1; $i <= 127; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            // Insert 4 values
            $value = "$i.$j";
            $dataList['data'][$i]['No'] = $i;
            $dataList['data'][$i]['Who'] = $_POST[$i . '1'];
            $dataList['data'][$i]['Activity'] = $_POST[$i . '2'];
            $dataList['data'][$i]['Root cause'] = $_POST[$i . '3'];
            $dataList['data'][$i]['Additiona info'] = $_POST[$i . '4'];
        }
    }
    echo $dataList;
    $dataString = json_encode($dataList);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $mysqli->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset ($_POST['search'])){
    executeQueries();
}
}


?>




























