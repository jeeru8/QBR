<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM commercial_contact WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $commercial_id = $row['commercial_id'];
        $email = $row['email'];
        $title = $row['title'];
        $info = $row['info'];
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM commercial_alljobs WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_asset WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_comment WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['comment'];
        $enable = $row['enable'];
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_fixrate WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_fixrate WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_harddown WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_parts WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_time WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM corrective_uptime WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM equipment_comment WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $comment = $row['comment'];
        $enable = $row['enable'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM equipment_level WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $equipment_id = $row['equipment_idid'];
        $description = $row['description'];
        $modality = $row['modality'];
        $coverage = $row['coverage'];
        $warranty_expiration = $row['warranty_expiration'];
        $coverage_start = $row['coverage_start'];
        $coverage_end = $row['coverage_end'];
        $current_year = $row['current_year'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM fmi WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM installbase_comment WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $comment = $row['comment'];
        $enable = $row['enable'];
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM installbase_connectivity WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM installbase_entitlement WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM other_information WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM service_delivery WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $data = $row['data'];
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM technical_assesment WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $system = $row['system'];
        $findings = $row['findings'];
        $actions = $row['actions'];
        $recommendations = $row['recommendations'];
        $technical_comment = $row['technical_comment'];
        
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qbr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

id = $GET['data'];

$sql = "SELECT *  FROM technical_contact WHERE id = id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $id = $row['id'];
        $tech_id = $row['tech_id'];
        $name = $row['name'];
        $title = $row['title'];
        $email = $row['email'];
        $info = $row['info'];
        
   
    
     
        
    }
   
} else {
    echo "0 results";
}
$conn->close();
?>