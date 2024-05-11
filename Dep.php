<?php
require_once "conn.php";

if (isset($_POST['submit'])) {
    $Dep = $_POST['Dep'];
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $targetDirectory = "picture/";
    $targetPath = $targetDirectory . $imageName;

    $type = $_POST['type'];
    $path_person = $_POST['path_person'];
    $note = $_POST['note'];

    // Move the uploaded file to the target directory
    if (move_uploaded_file($imageTmpName, $targetPath)) {
        echo "Image uploaded successfully!";
        
        $currentDate = date("Y-m-d");
    
        $sql = "INSERT INTO info (Government_department, image_name, image_path, type, date, path_person, note)
                VALUES ('$Dep', '$imageName', '$targetPath', '$type', '$currentDate', '$path_person', '$note')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header('Location: index2.html');
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading image.";
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are not empty
    if (!empty($_POST['Dep']) && !empty($_POST['type']) && !empty($_POST['date']) && !empty($_POST['path_person']) && !empty($_POST['note'])) {
        // Process the form data here (e.g., save to a database)
        
        // Display a success message
        echo "<p class='success-message'>تم تسليم الشكوى بنجاح!</p>";
    } else {
        // Display an error message if any field is empty
        echo "<p class='error-message'>يرجى ملء جميع الحقول!</p>";
    }
}
}

// Close connection
$conn->close();
?>
