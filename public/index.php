<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <img src="Logo.png" id="logo" onclick="showSection('home')">

        <button class="navbarbuttons" onclick="showSection('create')">Create</button>
        <button class="navbarbuttons" onclick="showSection('read')">Read</button>
        <button class="navbarbuttons" onclick="showSection('update')">Update</button>
        <button class="navbarbuttons" onclick="showSection('delete')">Delete</button>
    </nav>

    <!-- HOME -->
    <section id="home" class="content">
        <h1 class="splash">Welcome to Student Management System</h1>
        <h2 class="splash">A Project in Integrative Programming Technologies</h2>
    </section>

    <!-- CREATE -->
    <section id="create" class="content">
        <h1 class="contenttitle">Insert New Student</h1>

        <form action="../includes/insert.php" method="POST">
            <label class="label">Student ID</label>
            <input type="text" name="student_id" class="field" required><br/>

            <label class="label">Surname</label>
            <input type="text" name="surname" class="field" required><br/>

            <label class="label">Name</label>
            <input type="text" name="name" class="field" required><br/>

            <label class="label">Middle Name</label>
            <input type="text" name="middlename" class="field"><br/>

            <label class="label">Address</label>
            <input type="text" name="address" class="field"><br/>

            <label class="label">Mobile Number</label>
            <input type="text" name="contact" class="field"><br/>

            <div id="btncontainer">
                <button type="reset" class="btns">Clear Fields</button>
                <button type="submit" class="btns">Save</button>
            </div>

            <div id="success-toast" class="toast-hidden">
                Registration Successful!
            </div>
        </form>
    </section>

    <!-- READ -->
    <section id="read" class="content">
        <h1 class="contenttitle">Search Student</h1>

        <form action="../includes/read.php" method="GET">
            <label class="label">Student ID</label>
            <input type="text" name="student_id" class="field" required>
            <button type="submit" class="btns">Search</button>
        </form>
    </section>

    <!-- UPDATE -->
    <section id="update" class="content">
        <h1 class="contenttitle">Update Student</h1>

        <form action="../includes/update.php" method="POST">
            <label class="label">Student ID</label>
            <input type="text" name="student_id" class="field" required><br/>

            <label class="label">New Address</label>
            <input type="text" name="address" class="field"><br/>

            <label class="label">New Contact</label>
            <input type="text" name="contact" class="field"><br/>

            <button type="submit" class="btns">Update</button>
        </form>
    </section>

    <!-- DELETE -->
    <section id="delete" class="content">
        <h1 class="contenttitle">Delete Student</h1>

        <form action="../includes/delete.php" method="POST">
            <label class="label">Student ID</label>
            <input type="text" name="student_id" class="field" required>
            <button type="submit" class="btns">Delete</button>
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>